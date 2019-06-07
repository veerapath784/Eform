<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            margin-top: -600px;
            margin-left: 500px;
            }
            h1 {
                display: inline-block;
            font: bold 4.5em/1.5 Bebas, sans-serif;
            color: #DD5E89; /*non-webkit fallback*/
            font-size: 72px;
            text-transform: uppercase;
            background: -webkit-linear-gradient(135deg, #DD5E89, #F7BB97, #DD5E89);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            padding-bottom: .1em;
            margin-bottom: 0;
            border-bottom: 1px solid #DD5E89;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .gradient-button {
                margin: 10px;
                font-family: "Arial Black", Gadget, sans-serif;
                font-size: 20px;
                padding: 15px;
                text-align: center;
                text-transform: uppercase;
                transition: 0.5s;
                background-size: 200% auto;
                color: #FFF;
                box-shadow: 0 0 20px #eee;
                border-radius: 10px;
                width: 200px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
                transition: all 0.3s cubic-bezier(.25,.8,.25,1);
                cursor: pointer;
                display: inline-block;
                border-radius: 25px;
            }
            .gradient-button:hover{
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                margin: 8px 10px 12px;
            }
            .gradient-button-1 {background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%)}
            .gradient-button-1:hover { background-position: right center; }

        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="gradient-button gradient-button-1" href="{{ url('/backend') }}">Home</a>
                    @else
                        <a class="gradient-button gradient-button-1" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="gradient-button gradient-button-1" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div>
                <img src="/work.jpg" width="100%" height="100%">
                <div class="content links"><h1>E-Form</h1></div>
            </div>
            <div style="margin-top:-30px; margin-left:900px; font-size:20px;"> ระบบจัดการเอกสารราชการ</div>
        </div>
    </body>
</html>
