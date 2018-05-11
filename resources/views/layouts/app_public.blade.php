<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ipassion 
            @if (trim($__env->yieldContent('title')))
               - @yield('title')
            @else 
            
            @endif
        </title>

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom fonts -->
        <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <!-- Custom styles -->
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        @include('layouts.navbar')
            @yield('header')
            @yield('content')
        @include('layouts.footer')      
        
        <!-- Core JavaScript -->
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Plugin JavaScript -->
        <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery-validate/additional-methods.min.js') }}"></script>
        <!-- Custom scripts -->
        <script src="{{ asset('/js/main.js') }}"></script>
        @yield('js')
    </body>
</html>
