<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Routing App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            a.active{
                padding:3px;
                margin:2px;
                background-color:green;
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Routing App
                </div>

                <header>
                    <nav>
                        <div class="links">
                            <a href="/" class="{{ (Request::segment(1) == '') ? 'active' : '' }}">Home</a>
                            <a href="{{route('about')}}" class="{{ (Request::segment(1) == 'about') ? 'active' : '' }}">About</a>
                            <a href="{{route('contact')}}" class="{{ (Request::segment(1) == 'contact') ? 'active' : '' }}">Contact</a>
                        </div>
                    </nav>
                </header>

                @yield('content')

            </div>

        </div>
    </body>
</html>
