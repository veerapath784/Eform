<!DOCTYPE html>
<html>

<head>
    <title>หนังสือภายนอก</title>
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
            font-size: 23px;
            margin-left: 75px;
            margin-right: 4%;
            margin-bottom: 1px;
        }

        .center {
            text-align: center;
        }


        .float-right {
            float: right;


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
    </style>
</head>

<body>
    <img src="{{ public_path('bg-white.png') }}" height="50px;">
    <div class="img">
        <img src="{{ public_path('thai.png') }}" alt="" width="100px;">
    </div>

    <div class="float-left" style="margin-top:-45px; margin-left:-35px; ">
        <strong>ที่</strong>&nbsp;{{$letter->at}}
    </div>

    <div class="float-right " style=" line-height : 30%; margin-top:5px;">
        {!!$letter->address!!}

    </div>
    <img src="{{ public_path('bg-white.png') }}" width="140px;">
    <div class="center" style="margin-left:90px;">
        {{$letter->date}}
    </div>
    <div>
        <div class="float-left" style="margin-left:-30px;"><strong>เรื่อง</strong></div>
        <div class="float-left" style="margin-left:10px; margin-top:-23px;">
            <p>{{$letter->subject}}</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="float-left" style="margin-left:-87.5%;">
        <strong>เรื่อง</strong>&nbsp; {{$letter->study}}
    </div>
    <div class="float-right "
        style="text-align: inherit; line-height : 100%; margin-top:80px; margin-left:-40px; margin-right:10px;">
        <p>{!!$letter->deteil!!}</p>
    </div>
    <div class="float-right" style="margin-top:35%; margin-right:30%; line-height : 100%;">
        <p style="text-align:center;">
            {{$letter->ending}}
            <br>
            <br>
            <br>
            ({{$letter->sign}})
            <br>
            {{$letter->position}}
        </p>
        <span style="height:20px;
        position:fixed;
        margin-left:-130px;
        bottom:0px;
        width:100%;
        z-index: 99;
        font-size:20px;
        line-height : 70%;">
        สำนักดิจิทัลเพื่อการศึกษา<br>
        โทร. {{$letter->phone}}
    </span>
    </div>


</body>

</html>
