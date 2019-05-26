<!DOCTYPE html>
<html lang="en">

<head>

    <title>สวัสดี</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @font-face {
            font-family: 'THNiramit';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/TH Niramit AS.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THNiramit';
            font-style: normal;
            font-weight: bold;
            src: url("{{ storage_path('fonts/TH Niramit AS Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THNiramit';
            font-style: italic;
            font-weight: normal;
            src: url("{{ storage_path('fonts/TH Niramit AS Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THNiramit';
            font-style: italic;
            font-weight: bold;
            src: url("{{ storage_path('fonts/TH Niramit AS Bold Italic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THNiramit";
            font-size: 16px;
        }

        .table {
            border-spacing: 0;
            width: 300px;
        }

        th,
        td {
            border: 0.01em solid #333;
            border-collapse: collapse;
            padding: 5px;
        }

        .float-right {
            float: right;
        }

        .float-left {
            float: left;
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
    <div>

        <div class="float-left">
            <img style="margin-left: 25px;" src="{{ public_path('images/digital_logo.gif') }}" alt="" width="200">
            <div style="font-weight: bold; font-size: 18px; margin-left: 65px;">ใบแจ้งซ่อม (ต้นฉบับ)</div>
        </div>
        <div class="float-right">
            <strong>งานซ่อมบำรุง สำนักดิจิทัลเพื่อการศึกษา</strong><br>
            เลขที่ 202 ชั้น 2 อาคารสำนักดิจิทัลเพื่อการศึกษา<br>
            มหาวิทยาลัยราชภัฏเชียงใหม่<br>
            ต.ช้างเผือก อ.เมืองเชียงใหม่ จ.เชียงใหม่ 50100 <br>
            <abbr title="Phone">โทรศัพท์:</abbr> 053885925-6
        </div>
        <div class="clearfix"></div>
    </div>
    <div>
        <div class="float-left">
            <h4 style="margin-bottom: -2px;">ผู้ขอรับบริการ</h4>
            <p>
                <strong>ชื่อ-สกุล : </strong> นายบัณฑิต นันทะเทศ <br>
                <strong>ประเภท : </strong> นักศึกษา <br>
                <strong>รหัสนักศึกษา : </strong> 61234567 <br>
                <strong>โทรศัพท์ : </strong> 0834600010 <br>
            </p>
        </div>
        <div class="float-right">
            <table class="table" style="margin-top: 50px;">
                <tr>
                    <th class="bg-gray-100">รหัส #</th>
                    <td class="text-right">2311111</td>
                </tr>
                <tr>
                    <th class="bg-gray-100">วันที่</th>
                    <td class="text-right">23, เมษายน 2562</td>
                </tr>
                <tr>
                    <th class="bg-gray-100">เวลา </th>
                    <td class="text-right">12:30</td>
                </tr>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- <hr style="border: #ccc solid 0.02em;"> -->
    <!-- <p><strong>สถานที่รับบริการ: </strong>มหาวิทยาลัยราชภัฏเชียงใหม่, ศูนย์แม่ริม </p> -->
    <h4 style="margin-bottom: 5px; margin-top: 5px;">รายละเอียด</h4>
    <table class="table" style="width: 100%;">
        <tr>
            <th>อุปกรณ์ที่นำมารับบริการ</th>
            <td>Notebook HP Omen Harddisk 256GB, Ram 16GB </td>
        </tr>
        <tr>
            <th>รหัสผลิตภัณฑ์</th>
            <td>336210057SP339</td>
        </tr>
        <tr>
            <th>ปัญหาที่พบ</th>
            <td>Software </td>
        </tr>
        <tr>
            <th>ยี่ห้อ</th>
            <td>HP</td>
        </tr>
        <tr>
            <th>ระบบปฏิบัติการ </th>
            <td>Windows 10 Pro</td>
        </tr>
        <tr>
            <th>โปรแกรมสำนักงาน </th>
            <td>Word, PowerPoint, Excel, One Note</td>
        </tr>
        <tr>
            <th>โปรแกรม</th>
            <td>SPSS, Line, Android Studio, VLC</td>
        </tr>
        <tr>
            <th>สิ่งที่นำมาด้วย</th>
            <td>กระเป๋า, เมาส์</td>
        </tr>
        <tr>
            <th>หมายเหตุ</th>
            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus adipisci nulla quisquam amet?
                Sit dignissimos inventore libero non quibusdam ratione alias ducimus esse rerum voluptatum aperiam,
                voluptate impedit ab corporis!</td>
        </tr>
    </table>
    <div>
        <div class="float-left">
            <p> ลงชื่อ .................................................................. พนักงานบันทึกข้อมูล<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                (......นายปิยพงษ์
                หินเกย......)
            </p>
        </div>
        <div class="float-right">
            <p> ลงชื่อ .................................................................. ผู้ขอรับบริการ<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                (.......นายบัณฑิต
                นันทะเทศ ......)
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div style="border-top: #aaa dashed 1px; margin-top: 20px;">
        <div style="margin-top: -13px; "><img class="float-left" src="{{ public_path('/images/cut.png') }}" alt=""
                width="24">
            <!-- <span style="font-size: 10px; color: #333;">ฉีกตามรอยปุ</span></div> -->
        </div>

</body>

</html>
