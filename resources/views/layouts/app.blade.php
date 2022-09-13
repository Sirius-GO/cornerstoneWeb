<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>

        <title>Cornerstone Retail Services</title>
		
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link rel="icon" type="image/png" sizes="64x64" href="/cornerstone/storage/images/cornerstone_logo.ico">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        @include('inc.footer')

        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </body>
</html>
