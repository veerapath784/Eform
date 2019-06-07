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
            font-size: 22.5px;
            /* margin-left: 85px;
            margin-right: 60px; */
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
        td,
        tr {
            border: 0.01em solid #333;
            border-collapse: collapse;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
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

        .content {
            margin-left: 65px;
            margin-right: 65px;
        }
    </style>
</head>

<body>



    <img src="{{ public_path('head.jpg') }}" alt="" width="110%;" style="margin-left:-40px; margin-top:-40px;">
    <div style="margin-top:-231px; margin-left:180px;">{{$memo->part}} </div>
    <div style="margin-left:100px;  padding-top:-201px;">{{$memo->at}}</div>
    <div style="margin-left:450px;  padding-top:-201px;">{{$memo->date}}</div>
    <div style="margin-left:110px;  padding-top:-172px;">{{$memo->subject}}</div>
    <div style="margin-left:110px;  padding-top:-131px;">{{$memo->study}}</div>

    <div style="margin-left:0cm; margin-right:0cm; text-align:justify  ">
        <div class="content" style=" text-indent: 1.5em; line-height : 80%; padding-top:-75px;  text-align: justify;
               ">{!!$memo->deteil!!}

            <div class="float-left" style="margin-left:23px;">
                {{$memo->ending}}
            </div>
        </div>
    </div>
    <footer>
        <br><br><br><br>

        <div class="center" style="height:180px;
        position:fixed;
        margin-left:330px;
        bottom:0px;
        width:100%;
        z-index: 99;

       ">
            ({{$memo->sign}})
            <br>
            <div style="margin-top:-10px; ">{{$memo->position}}</div>
        </div>


    </footer>





</body>

</html>
