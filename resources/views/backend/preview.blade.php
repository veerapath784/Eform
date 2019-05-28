<!DOCTYPE html>
<html>

<head>
    <title>บันทึกข้อความ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ storage_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ storage_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
            font-size: 24px;
            margin-left: 85px;
            margin-right: 70px;
        }

        .center {
            text-align: center;
            margin-left: -10.1px;
            margin-top: -20px;
            margin-bottom: -75px;
            font-size: 18px;
        }


        .float-right {
            float: right;


        }

        .float-left {
            float: left;
            margin-top: 50px;
        }

        .clearfix {
            clear: both;
        }

        .bg-gray-100 {
            background-color: #f0f3f5 !important
        }

        a.bg-gray-100:focus,
        a.bg-gray-100:hover,
        button.bg-gray-100:focus,
        button.bg-gray-100:hover {
            background-color: #d1dbe1 !important
        }

        .bg-gray-200 {
            background-color: #e4e7ea !important
        }

        a.bg-gray-200:focus,
        a.bg-gray-200:hover,
        button.bg-gray-200:focus,
        button.bg-gray-200:hover {
            background-color: #c7ced4 !important
        }

        .bg-gray-300 {
            background-color: #c8ced3 !important
        }

        a.bg-gray-300:focus,
        a.bg-gray-300:hover,
        button.bg-gray-300:focus,
        button.bg-gray-300:hover {
            background-color: #acb5bc !important
        }

        .bg-gray-400 {
            background-color: #acb4bc !important
        }

        a.bg-gray-400:focus,
        a.bg-gray-400:hover,
        button.bg-gray-400:focus,
        button.bg-gray-400:hover {
            background-color: #909ba5 !important
        }

        .bg-gray-500 {
            background-color: #8f9ba6 !important
        }

        a.bg-gray-500:focus,
        a.bg-gray-500:hover,
        button.bg-gray-500:focus,
        button.bg-gray-500:hover {
            background-color: #73828f !important
        }

        .bg-gray-600 {
            background-color: #73818f !important
        }

        .bg-gray-700,
        a.bg-gray-600:focus,
        a.bg-gray-600:hover,
        button.bg-gray-600:focus,
        button.bg-gray-600:hover {
            background-color: #5c6873 !important
        }

        a.bg-gray-700:focus,
        a.bg-gray-700:hover,
        button.bg-gray-700:focus,
        button.bg-gray-700:hover {
            background-color: #454e57 !important
        }

        .bg-gray-800 {
            background-color: #2f353a !important
        }

        a.bg-gray-800:focus,
        a.bg-gray-800:hover,
        button.bg-gray-800:focus,
        button.bg-gray-800:hover {
            background-color: #181b1e !important
        }

        .bg-gray-900 {
            background-color: #23282c !important
        }

        a.bg-gray-900:focus,
        a.bg-gray-900:hover,
        button.bg-gray-900:focus,
        button.bg-gray-900:hover {
            background-color: #0c0e10 !important
        }
    </style>
</head>

<body>
    <div class="float-left">
        <img src="{{ public_path('thai.png') }}" alt="" width="65px;">
    </div>
    <div class="center">
        <h1>บันทึกข้อความ</h1>
    </div>

    <div>
        <div class="float-left">
            <strong>ส่วนราชการ</strong>&nbsp; {{-- เพื่มข้อความ --}} {{$memo->part}}
            <div style="margin-top:-40px; margin-left:80px;">
                ...............................................................</div>
        </div>
        <div class="float-right">
            <strong>โทร.</strong>&nbsp; {{-- เพื่มข้อความ --}}{{$memo->phone}}
            <div style="margin-top:-40px; margin-left:-20px;">
                ..................................................................</div>
        </div>
    </div>
    <br>
    <div class="float-left" style=" margin-left:-240px;">
        <strong>ที่</strong>&nbsp; {{-- เพื่มข้อความ --}} {{$memo->at}}
        <div style="margin-top:-40px; margin-left:10px;">
            ....................................................................................</div>
    </div>
    <div class="float-left" style=" margin-top:50px; margin-right:-120px;">
        <strong>วันที่</strong>&nbsp; {{-- เพื่มข้อความ --}}{{$memo->date}}
        <div style="margin-top:-40px; margin-left:28px;">
            .....................................................</div>
    </div>
    <br>
    <div class="float-left" style="margin-left:-450px;">
        <strong>เรื่อง</strong>&nbsp; {{-- เพื่มข้อความ --}}{{$memo->subject}}
        <div style="margin-top:-40px; margin-left:30px;">
            ...........................................................................................................................................
        </div>
    </div><br>

    <div class="float-left" style="margin-left:-570px; margin-top:60px;">
        <strong>เรียน</strong>&nbsp; {{-- เพื่มข้อความ --}}{{$memo->study}}
    </div><br><br><br>
<div style="margin-right:-33px;">
<p > <dd> 1. ควรแจ้งขอใช้รถราชการล่วงหน้า </dd>อย่างน้อย 1 วัน โดยกรอกข้อมูลในแบบขออนุญาตใช้รถราชการ ส่งยัง กองกลาง สำนักงานอธิการบดี
    2. ห้ามผู้ขอใช้รถและพนักงานคนขับรถยนต์ นำรถออกนอกเส้นทางราชการโดยเด็ดขาด หากเกิดอุบัติเหตุผู้ควบคุมรถจะต้องรับผิดชอบ
    3. ทางหน่วยงานที่จะขอใช้รถมหาวิทยาลัยราชภัฏเชียงใหม่ จะต้องมีการติดตามผลการอนุมัติว่าอนุมัติหรือไม่ โดยตรวจสอบผ่านเว็บไซต์ เลือกเมนูรายการจอง</p>
</div><br>

<div class="float-left" style="margin-left:33px;" >
    {{$memo->ending}}
</div><br><br><br><br><br><br>

<div class="float-right">
    ({{$memo->sign}})
    <br>
    <div style="margin-top:-10px; margin-left:-45px;">ผู้อำนวยการสำนักงานดิจิทัลเพื่อการศึกษา</div>
</div>



</body>

</html>
