<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Ipassion Administrator</title>

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('/images/favicon.ico') }}" type="image/x-icon">
         <!-- Bootstrap core CSS-->
        <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{ asset('/admin/css/sb-admin.css') }}" rel="stylesheet">

    </head>
    <body class="bg-dark">
        @yield('content')
        <!-- Core JavaScript -->
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Plugin JavaScript -->
        <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    </body>
</html>
