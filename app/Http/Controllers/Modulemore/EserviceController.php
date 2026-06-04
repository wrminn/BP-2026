<?php

namespace App\Http\Controllers\Modulemore;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MyService;

use Intervention\Image\Facades\Image;



class EserviceController extends Controller
{
    protected $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    function listeservice($menuId)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $list = DB::table('gennericforms')->paginate(20);


        foreach ($list as $item) {
            $tableName = $item->gennericforms_name_table;
  
            if (Schema::hasTable($tableName)) {
                $count = DB::table($tableName)
                    ->where('form_status', 'N')
                    ->count();

                $item->form_count = $count; // เก็บค่า count ไว้ใน list
            } else {
                $item->form_count = 0;
            }
        }

        $startIndex = ($list->currentPage() - 1) * $list->perPage() + 1;

        return view('admin.eservice.list', compact('title', 'list', 'menuId', 'startIndex'));
    }

    function listeserviceOne($menuId, $id)
    {
        $titles = $this->myService->getDataByKey($menuId);
        $title = $titles ?? 'ข้อมูลเมนู' . $menuId;

        $form =  DB::table('gennericforms')->get();


        $tableName = 'table_form_' . $id;
        $list = DB::table($tableName)->paginate(20);
        
        $tableUpload = 'table_form_file_' . $id;
        $list->getCollection()->transform(function ($item) use ($tableUpload) {
            $item->file = DB::table($tableUpload)
                ->where('form_id', $item->form_id)
                ->pluck('form_path')
                ->toArray();
            return $item;
        });


        $startIndex = ($list->currentPage() - 1) * $list->perPage() + 1;

        return view('admin.eservice.listformone', compact('title', 'list', 'menuId', 'id', 'startIndex', 'form'));
    }

    public function reply(Request $request)
    {
      
        $request->validate([
            'form_id' => 'required|integer',
            'reply_message' => 'required|string',
        ]);
        $tableName = 'table_form_' . $request->form_table;

        DB::table($tableName)->where('form_id', $request->form_id)
            ->update([
                'form_note' => $request->reply_message,
                'form_status' => 'R'
            ]);

        return redirect()->back()->with('success', 'ตอบกลับเรียบร้อยแล้ว');
    }
}
