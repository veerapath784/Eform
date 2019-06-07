<!DOCTYPE html>
<html>

<head>
    <title>รายงานการประชุม</title>
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
            font-size: 21px;

        }

        .edge {
            margin-left: 50px;
            margin-right: 4%;

        }

        .center {
            text-align: center;
        }


        .float-right {
            float: right;


        }

        .table {
            border-spacing: 0;
            width: 100%;
        }

        th,
        td {
            border: 0.01em solid #333;
            border-collapse: collapse;
            padding: 5px;
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

        .img {
            text-align: center;

            margin-left: -35px;
            margin-right: 15px;

        }

        .text {
            line-height: 100%;
        }
    </style>
</head>

<body>
    <img src="{{ public_path('bg-white.png') }}" height="40px;">
    <div class="text" style="text-align:center;">{!!$minutes->heading!!}</div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="center" style="margin-top:-50px;">............................................................</div>
    <div class="left edge"><strong><u>ผู้มาประชุม</u></strong>
        <div style="margin-left:10px; line-height : 30%;">{!!$minutes->meeting!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ผู้เข้าร่วมประชุม</u></strong>
        <div style="margin-left:10px; line-height : 30%;">{!!$minutes->attendees!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ผู้ไม่เข้าร่ามชุม</u></strong>
        <div style="margin-left:10px; line-height : 30%;">{!!$minutes->nonattendee!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>เริ่มประชุมเวลา {!!$minutes->time!!}</u></strong>
        <div style="margin-left:10px; line-height : 30%;">{!!$minutes->start!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๑
                เรื่องที่ประทานแจ้งที่ประชุม</u></strong>
        <div style="margin-left:10px; line-height : 30%;">{!!$minutes->agenda1!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="3cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๒
                เรื่องรับรองรายงานการประชุม</u></strong>
        <div style="margin-left:10px; line-height : 80%;">{!!$minutes->agenda2!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๓ เรื่องสืบเนื่อง</u></strong>
        <div style="margin-left:10px; line-height : 80%;">{!!$minutes->agenda3!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="3cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๔ เรื่องเสนอเพื่อพิจารณา</u></strong>
        <div style="margin-left:10px; line-height : 80%;">{!!$minutes->agenda4!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๕
                เรื่องเสนอเพื่อรับทราบหรือทักท้วง</u></strong>
        <div style="margin-left:10px; line-height : 60%;">{!!$minutes->agenda5!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong><u>ระเบียบวาระที่ ๖ เรื่องอื่นๆ</u></strong>
        <div style="margin-left:10px; line-height : 60%;">{!!$minutes->agenda6!!}</div>
    </div>
    <img src="{{ public_path('bg-white.png') }}" height="0.5cm;">
    <div class="left edge" style="margin-top:-50px;"><strong>เลิกประชุมเวลา</strong>&nbsp; {!!$minutes->end!!}
    </div>
    <br>

    <img src="{{ public_path('bg-white.png') }}" height="5cm;">

    <div  style="margin-top:-110px; margin-left:8cm;">
        <div style="margin-left:10px; line-height : 30%; text-align:center;">({!!$minutes->sign1!!})
            <br>{!!$minutes->position1!!}
        </div>


    <br><br><br><br>

    <div>
        <div style="margin-left:10px; line-height : 30%; text-align:center;">({!!$minutes->sign2!!})
            <br>{!!$minutes->position2!!}
        </div>
    </div>
</div>
</body>

</html>
