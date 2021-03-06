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
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('/admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
        <!-- DataTables CSS -->
        <link href="{{asset('/admin/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{asset('/admin/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">
        <link href="{{asset('/vendor/sweet-alert/sweetalert.css')}}" rel="stylesheet">
        <link href="{{asset('/admin/vendor/summernote/summernote.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset('/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div id="wrapper">
            @include('admin.layouts.header')
            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
         <!-- jQuery -->
        <script src="{{asset('/admin/vendor/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>
        <!-- DataTables JavaScript -->
        <script src="{{asset('/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('/admin/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
        <!-- Extends JS -->
        <script src="{{asset('/vendor/sweet-alert/sweetalert.js')}}"></script>
        <script src="{{asset('/admin/vendor/summernote/summernote.js')}}"></script>
        <script src="{{asset('/vendor/jquery-validate/jquery.validate.min.js')}}"></script>
        <script src="{{asset('/vendor/jquery-validate/additional-methods.min.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('/admin/js/sb-admin-2.js')}}"></script>
        @yield('js')
    </body>
</html>
