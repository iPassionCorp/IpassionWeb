<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Ipassion Administrator</title>

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
         <!-- Bootstrap core CSS-->
        <link href="{{ asset('/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="{{ asset('/admin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
       
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        @yield('content')
        
        <!-- jQuery -->
        <script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('/admin/dist/js/sb-admin-2.js')}}"></script>
    </body>
</html>
