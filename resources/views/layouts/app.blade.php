<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>

        <title>Cornerstone Retail Services</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="64x64" href="../../cornerstone/storage/app/public/images/cornerstone_logo.ico">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #222;
                color: #fff;
                font-family: tahoma, sans-serif;
                font-weight: lighter;
                margin: 0;
                overflow-x: hidden;
            }

            .carousel-logo{
                position: absolute;
                top: 25px;
                right: 5px;
                z-index: 20;
            }
            .jumbo-logo{
                position: absolute;
                top: 75px;
                right: 10px;
                z-index: 20;
            }
            @media only screen and (max-width: 3000px) {
              .cTitle{
                -webkit-text-stroke: 1px #0464c7;
                font-weight: 900;
                color: #111;
              }
              .cBody{
                -webkit-text-stroke: 1px #0464c7;
                font-weight: 900;
                font-size: 20px;
                color: #111;
              }
            }
            @media only screen and (max-width: 800px) {
              .cTitle{
                -webkit-text-stroke: 1px #0464c7;
                font-weight: 900;
                color: #111;
                font-size: 2em;
              }
              .cBody{
                -webkit-text-stroke: 1px #0464c7;
                font-weight: 900;
                font-size: 17px;
                color: #111;
              }
            }
            .message_bar{
                width: 100%;
                text-align: center;
                position: absolute;
                top: 65px;
                z-index: 99;

                animation:message_bar 5s 1;
                -webkit-animation:message_bar 5s 1;
                animation-fill-mode: forwards;

                animation-delay:5.5s;
                -webkit-animation-delay:5.5s; /* Safari and Chrome */
                -webkit-animation-fill-mode: forwards;

              }

              @keyframes message_bar{
                    from {opacity :1;}
                    to {opacity :0;}
              }

              @-webkit-keyframes message_bar{
                    from {opacity :1;}
                    to {opacity :0;}
              }

              #cookie-law {
                position: absolute;
                top: 140px;
                width: 90%;
                left: 50%;
                margin-left: -45%;
                max-width: 90%;
                background:#eee;
                border: solid 2px;
                text-align: center;
              }

              #cookie-law p {
                padding:10px;
                font-size:15px !important;
                font-weight:bold;
                margin: auto;
                color:#333;
              }

        </style>

    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        @include('inc.footer')


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </body>
</html>
