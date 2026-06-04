<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Services\MyService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Barryvdh\DomPDF\Facade\Pdf;

use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

// use Spipu\Html2Pdf\Html2Pdf;

use App\Models\GennericForm;

class GennericFormController extends Controller
{
    /**
     * Export PDF for general request using mPDF
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    protected $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    public function SelectDate()
    {
        $timestamp = time();
        $thai_months = [
            1 => "มกราคม",
            2 => "กุมภาพันธ์",
            3 => "มีนาคม",
            4 => "เมษายน",
            5 => "พฤษภาคม",
            6 => "มิถุนายน",
            7 => "กรกฎาคม",
            8 => "สิงหาคม",
            9 => "กันยายน",
            10 => "ตุลาคม",
            11 => "พฤศจิกายน",
            12 => "ธันวาคม"
        ];
        $day = date('j', $timestamp);
        $month = date('n', $timestamp);
        $year = date('Y', $timestamp) + 543;

        $thai_date = $day . " " . $thai_months[$month] . " " . $year;
        return $thai_date;
    }
    function listform($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $list = GennericForm::active()->paginate(20);

        return view('data.formeservice.index', compact('title', 'menuId', 'list'));
    }

    function listformpdf($menuId, $id)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $list = DB::table('table_form_1')
            ->where('form_id', '1')
            ->first();

        return view('data.formeservice.pdf.table_1', compact('title', 'menuId', 'list'));
    }

    function showform($menuId, $id)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;
        $Date = $this->SelectDate();
        $form_page = 'data.formeservice.table_' . $id;

        return view($form_page, compact('title', 'menuId', 'id', 'Date'));
    }

    function saveform(Request $request, $menuId, $id)
    {

        // $data = [];

        // for ($i = 1; $i <= 15; $i++) {
        //     $field = 'field_' . $i;
        //     $data[$field] = $request->input($field);
        // }

        $data = [];

        // foreach ($request->all() as $key => $value) {
        //     if (
        //         preg_match('/^field_(\d+)$/', $key, $matches) && // ตรงกับ field_ตัวเลข
        //         (int) $matches[1] >= 1 && (int) $matches[1] <= 50
        //     ) {
        //         $data[$key] = $value;
        //     } elseif ($key === 'field_date') { // เฉพาะ field_date
        //         $data[$key] = $value;
        //     }
        // }

        foreach ($request->all() as $key => $value) {
            if (preg_match('/^field_(\d+)$/', $key, $matches)) {
                $num = (int) $matches[1];
                if ($num >= 1 && $num <= 50) {
                    if (is_array($value)) {
                        if (!empty($value)) {
                            $data[$key] = 'C';
                        }
                    } else {
                        if (!empty($value)) {
                            $data[$key] = $value;
                        }
                    }
                }
            } elseif ($key === 'field_date') {
                $data[$key] = $value;
            }
        }


        $table_name = "table_form_" . $id;
        $id_inserted = DB::table($table_name)->insertGetId($data);

        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $key => $file) {

                $ext = $file->getClientOriginalExtension();
                $timestamp = now()->format('Ymd_His');
                $seq = $key + 1;

                $folder = "content/{$menuId}";
                $filename = "{$id}_formeservice_{$seq}_{$timestamp}.{$ext}";
                $path = $file->storeAs($folder, $filename, 'public');

                $fullPath = storage_path('app/public/' . $path);
                if (file_exists($fullPath)) {
                    chmod($fullPath, 0644);
                }

                $publicStoragePath = public_path('storage/' . $path);
                if (!file_exists(dirname($publicStoragePath))) {
                    mkdir(dirname($publicStoragePath), 0775, true);
                }
                copy($fullPath, $publicStoragePath);
                chmod($publicStoragePath, 0644);

                $data_texteditor_upload = [
                    'form_id' => $id_inserted,
                    'form_path' => $path,
                ];
                $table_name = "table_form_file_" . $id;
                DB::table($table_name)->insert($data_texteditor_upload);
            }
        }
        return redirect('/formeservice/menu/' . $menuId . '/id/' . $id)->with('success', 'ส่งแบบฟอร์มสำเร็จ');
    }


    // public function GeneralRequestsAdminExportPDFtest($id)
    // {
    //     $list = DB::table('table_form_1')
    //         ->where('form_id', $id)
    //         ->first();

    //     $pdf = Pdf::loadView('data.formeservice.pdf.table_1_test', compact('list'))->setPaper('A4', 'portrait');

    //     return $pdf->stream('แบบคำขอร้องทั่วไป' . $id . '.pdf');
    // }

    // public function GeneralRequestsAdminExportPDFtest2pdf($id)
    // {
    //     $list = DB::table('table_form_1')
    //         ->where('form_id', $id)
    //         ->first();

    //     // สร้าง HTML2PDF object
    //     $html2pdf = new Html2Pdf('P', 'A4', 'en'); // P = Portrait, A4, ภาษาไทย
    //     $html2pdf->setDefaultFont('freeserif');   // แนะนำ font ภาษาไทย

    //     // Render view เป็น HTML แล้วส่งให้ Html2Pdf
    //     $htmlContent = view('data.formeservice.pdf.table_1_test', compact('list'))->render();
    //     $html2pdf->writeHTML($htmlContent);

    //     // แสดงใน Browser (stream)
    //     return $html2pdf->output('แบบคำขอร้องทั่วไป_' . $id . '.pdf', 'I');
    // }


    public function GeneralRequestsAdminExportPDF($form, $id)
    {
        $name_form = DB::table('gennericforms')
            ->where('gennericforms_id', $form)
            ->first();

        $table_name = $name_form->gennericforms_name_table;
        $file = 'table_' . $form;
        $list = DB::table($table_name)
            ->where('form_id', $id)
            ->first();

        if (!$list) {
            abort(404, 'ไม่พบข้อมูล');
        }


        $parts = explode(' ', $list->field_date);
        $day = $parts[0] ?? '';
        $month = $parts[1] ?? '';
        $year = $parts[2] ?? '';

        $html = view('data.formeservice.pdf.' . $file, compact('list', 'day', 'month', 'year'))->render();

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [public_path('fonts')]),
            'fontdata' => $fontData + [
                'thsarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'B' => 'THSarabunNew-Bold.ttf',
                    'I' => 'THSarabunNew-Italic.ttf',
                    'BI' => 'THSarabunNew-BoldItalic.ttf'
                ]
            ],
            'default_font' => 'thsarabun',
            'format' => 'A4',
            'margin_top' => 20,
            'margin_bottom' => 20,
            'margin_left' => 25,
            'margin_right' => 25,
        ]);

        // return view('data.formeservice.pdf.table_1', compact('list', 'day', 'month', 'year'));
        $mpdf->WriteHTML($html);
        return response($mpdf->Output('', 'S'))
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $name_form->gennericforms_name . '-' . $id . '.pdf"');
    }

    //webboard

    public function webboard($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $list = DB::table('threads')
            ->where('threads_status', 'O')
            ->get();

        foreach ($list as $item) {


            if (Schema::hasTable('posts')) {
                $count = DB::table('posts')
                    ->where('threads_id', $item->threads_id)
                    ->where('posts_status', 'O')
                    ->count();

                $item->form_count = $count; // เก็บค่า count ไว้ใน list
            } else {
                $item->form_count = 0;
            }
        }

        return view('data.webboard.index', compact('title', 'menuId', 'list'));
    }

    public function Thread($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;
        return view('data.webboard.newthread', compact('title', 'menuId'));
    }

    public function ThreadInsert(Request $request, $menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
        ]);

        $Date = $this->SelectDate();

        $id = DB::table('threads')->insertGetId([
            'threads_title' => $validated['title'],
            'threads_content' => $validated['content'],
            'threads_name' => $validated['name'],
            'threads_email' => $validated['email'],
            'threads_ip' => $request->ip(),
            'threads_date_insert' => now(),
            'threads_date_show' => $Date
        ]);

        return redirect('/webboard/menu/' . $menuId)->with('success', 'ตั้งกระทู้สำเร็จ');
    }

    public function getThreaddetail($menuId, $id)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $list = DB::table('threads')
            ->where('threads_id', $id)
            ->first();

        $detail = DB::table('posts')
            ->where('threads_id', $id)
            ->where('posts_status', "O")
            ->get();

        $cookieKey = "viewed_event_" . $id;
        $alreadyViewed = request()->cookie($cookieKey);

        if (!$alreadyViewed) {
            DB::table('threads')->where('threads_id', $id)
                ->update([
                    'threads_view' => $list->threads_view + 1,
                ]);

            cookie()->queue(cookie($cookieKey, true, 60 * 24)); // 60*24 = 1 วัน
        }



        return view('data.webboard.threaddetail', compact('title', 'menuId', 'list', 'detail', 'id'));
    }

    public function PostsInsert(Request $request, $menuId, $id)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $validated = $request->validate([
            'content' => 'required|string',
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
        ]);

        $Date = $this->SelectDate();

        $id = DB::table('posts')->insertGetId([
            'threads_id' => $id,
            'posts_content' => $validated['content'],
            'posts_name' => $validated['name'],
            'posts_email' => $validated['email'],
            'posts_ip' => $request->ip(),
            'posts_date_insert' => now(),
            'posts_date_show' => $Date
        ]);

        return redirect('/threaddetail/menu/' . $menuId . '/id/' . $id)->with('success', 'ตั้งกระทู้สำเร็จ');
    }

    //Satisfaction
    public function satisfaction($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        return view('data.webboard.satisfaction', compact('title', 'menuId'));
    }

    public function satisfactionInsert(Request $request, $menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $request->validate([
            'customer_name'   => 'required|string|max:255',
            'customer_phone'  => 'required|digits_between:9,10',
            'customer_address' => 'required|string|max:500',
            'customer_department' => 'required|string|max:255',
            'service_topic'   => 'required|string',
            'q1'              => 'required|integer|min:1|max:5',
            'q2'              => 'required|integer|min:1|max:5',
            'q3'              => 'required|integer|min:1|max:5',
            'suggestions'   => 'required|string|max:255',
        ]);

        $data_texteditor_detail = [
            'satisfaction_customer_name'   => $request->customer_name,
            'satisfaction_customer_phone'  => $request->customer_phone,
            'satisfaction_customer_address' => $request->customer_address,
            'satisfaction_customer_department' => $request->customer_department,
            'satisfaction_service_topic'   => $request->service_topic,
            'satisfaction_service_other'   => $request->service_other,
            'satisfaction_q1'              => $request->q1,
            'satisfaction_q2'              => $request->q2,
            'satisfaction_q3'              => $request->q3,
            'satisfaction_suggestions'   => $request->suggestions,
            'satisfaction_ip'   => $request->ip(),
        ];

        DB::table('satisfaction')->insert($data_texteditor_detail);


        return redirect('/satisfaction/menu/' . $menuId)->with('success', 'ส่งแบบสอบถามสำเร็จ');
    }

    public function calendar($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;
        return view('data.webboard.calendar', compact('title', 'menuId'));
    }
    public function getEvents()
    {
        $events = DB::table('events')->where('events_display', 'A')->get()->map(function ($event) {
            return [
                'id'    => $event->events_id,
                'title' => $event->events_name,
                'start' => $event->events_start,
                'end'   => $event->events_end ?? $event->events_start,
                'color' => $event->events_color ?? '#3788d8',
            ];
        });

        return response()->json($events);
    }
}
