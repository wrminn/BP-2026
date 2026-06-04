<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>แบบคำร้องทั่วไป</title>

    <style>
        @font-face {
            font-family: 'sarabun';
            font-style: normal;
            font-weight: normal;
            src: url("file://{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'sarabun-bold';
            font-style: normal;
            font-weight: bold;
            /* src: url("{{ public_path('fonts/THSarabunNew-Bold.ttf') }}") format('truetype'); */
            src: url("file://{{ public_path('fonts/THSarabunNew-Bold.ttf') }}") format('truetype');

        }

        body {
            /* font-family: 'sarabun', 'sarabun-bold', sans-serif; */
            font-family: 'thsarabun', sans-serif;
            font-size: 20px;
            line-height: 1.6;
        }

        .title_doc {
            text-align: center;
            margin-bottom: 20px;
        }

        .dotted-line {
            border-bottom: 1px dotted #000;
            display: inline-block;
            min-width: 500px;
            padding: 0 5px;
        }

        @page {
            margin: 20mm 15mm 10mm 15mm;
            /* เว้นขอบกระดาษ */
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 20pt;
        }

        /* .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 16px;
        } */
    </style>
</head>

<body>

    @php
        $parts = explode(' ', $list->field_date);
        $day = $parts[0] ?? '';
        $month = $parts[1] ?? '';
        $year = $parts[2] ?? '';
    @endphp

    <div class="title_doc">
        <strong>แบบแสดงจำนงขอใช้บริการจัดเก็บขยะมูลฝอย</strong><br>
        <strong>โดยเทศบาลตำบลบ้านโพธิ์</strong>
    </div>
    <div class="box_text" style="text-align: right;">
        <div style="margin-right: 10px; margin-top: 10px;">
            <span>วันที่</span>
            <span class="dotted-line" style="width: 5%; text-align: center;">&nbsp;&nbsp;&nbsp; {{ $day }}
                &nbsp;&nbsp;&nbsp;</span>
            <span>เดือน</span>
            <span class="dotted-line"
                style="width: 15%; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $month }}&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span>พ.ศ.</span>
            <span class="dotted-line"
                style="width: 10%; text-align: center;">&nbsp;&nbsp;&nbsp;{{ $year }}&nbsp;&nbsp;&nbsp;</span>
        </div>
    </div>

    <p>
        ข้าพเจ้า
        <span class="dotted-line" style="width: 87%; text-align: start; margin-left: 10px;">
            &nbsp;&nbsp;&nbsp;{{ $list->field_1 }}
            {{ $list->field_2 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        อาศัยอยู่บ้านเลขที่
        <span class="dotted-line" style="width: 10%; text-align: center;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_4 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <br>
        หมู่ที่
        <span class="dotted-line"
            style="width: 6%; text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_5 }}&nbsp;&nbsp;&nbsp;&nbsp;</span>
        ตรอก/ซอย
        <span class="dotted-line"
            style="width: 10%; text-align: center;">&nbsp;&nbsp;&nbsp;{{ $list->field_6 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        ตำบลบ้านโพธิ์ อำเภอบ้านโพธิ์ จังหวัดฉะเชิงเทรา ให้ดำเนินการแสดงความจำนงขอใช้บริการจัดเก็บขยะมูลฝอย
        พร้อมนี้ได้จัดหาถังขยะไว้เพื่อรองรับขยะมูลฝอยอย่างถูกต้องตามกหลักสุขาภิบาลแล้ว
        สถานที่ใกล้เคียง
        <span class="dotted-line" style="width: 15%; text-align: center;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_7 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        เบอร์โทรศัพท์ติดต่อ <span class="dotted-line"
            style="width: 10%; text-align: center;">&nbsp;&nbsp;&nbsp;{{ $list->field_3 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        โดยยินดีจ่ายค่าธรรมเนียมการเก็บขน ขยะมูลฝอย
    </p>

    <p>
        อัตราตามข้อบัญญัติองค์การบริหารส่วนตำบลแปลงยาว ดังนี้<br>

        {!! !empty($list->field_8) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} รายเดือน เป็นจำนวนเงิน

        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_8 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        บาท ต่อ เดือน (เริ่มตั้งแต่เดือน
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_9 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        เป็นต้นนไป)

        <br>
        {!! !empty($list->field_10) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} ราย ๖ เดือน เป็นจำนวนเงิน
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_10 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        บาท ต่อ ๖ เดือน (เริ่มตั้งแต่เดือน
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_11 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        เป็นต้นนไป)

        <br>
        {!! !empty($list->field_12) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} รายปี
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_12 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        บาท ต่อ ต่อ ๑ ปี (เริ่มตั้งแต่เดือน
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_13 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        เป็นต้นนไป)
        <br>
        {!! !empty($list->field_14) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} อื่นๆ
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_14 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>

    </p>

    <p>
        พร้อมคำขอนี้ข้าพเจ้าได้แนบเอกสารหลักฐานต่างๆ มาด้วยแล้ว ดังนี้
        <br>

        {!! !empty($list->field_15) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} 
        สำเนาบัตรประจำตัวประชาชน/ข้าราชการ/พนักงานรัฐวิสาหกิจ/อื่นๆ
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_15 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        <br>
        {!! !empty($list->field_16) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} 
        สำเนาทะเบียนบ้าน
       
        <br>
        {!! !empty($list->field_17) ? '<input type="checkbox" checked="checked" />' : '<input type="checkbox" />' !!} 
        เอกสารและหลักฐานอื่นๆ
        <span class="dotted-line"
            style="width: 90%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $list->field_17 }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
    </p>

    <p style="margin-top: 40px; text-align: center;">
        ขอรับรองว่าข้อความในคำขอนี้เป็นความจริงทุกประการ
    </p>

    <p style="margin-top: 40px; text-align: center;">
        ลงชื่อ ..............{{ $list->field_2 }}....................<br>
        ( {{ $list->field_1 }} {{ $list->field_2 }} )<br>
        ผู้ยื่นความจำนง
    </p>

    {{-- <div class="footer">
        <p>"ซื่อสัตย์สุจริต มุ่งสัมฤทธิ์ของงาน ยึดมั่นมาตรฐาน บริการด้วยใจเป็นธรรม"</p>
    </div> --}}

</body>

</html>
