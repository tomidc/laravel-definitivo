<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Los Simuladores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/simuladores.css">



        <!-- Styles -->
        <style>
            /* html, body {
                background-color: black;
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
                width: 100%;
                display: flex;
                justify-content: space-around;


            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #35FF00;
                text-transform: uppercase;
                font-family: 'Play', sans-serif;
            }

            .links > a {

                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: #35FF00;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */

            html, body {

                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-color: black;

            }

            /* .welcome-bg{
              background-image: url("/img/simu.jpg");
              background-repeat: no-repeat;
              background-size: cover;
            } */

            .welcome-bg{
              background-image: url("/img/simu.jpg");
              background-size: 100vw;
              background-position: center center;
              background-repeat: no-repeat;
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
                width: 100%;
                display: flex;
                justify-content: space-around;


            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: grey;
                text-transform: uppercase;
                font-family: 'Play', sans-serif;
            }

            .links > a {

                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: white;
                background-color: black;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height welcome-bg">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a id="welcome-h1" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a id="welcome-h1" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="">


                <!-- <img src="img/simu.jpg" alt="" class="img-welcome"> -->

            </div>
        </div>
    </body>
</html>
