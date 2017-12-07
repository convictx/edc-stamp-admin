<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estamp Backend</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .main-sidebar {
                border-right: 1px solid #d3d6df;
            }
        </style>
        <!-- Bootstrap 3.3.7 -->
        {{HTML::style('adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}
        <!-- Font Awesome -->
        {{HTML::style('adminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}
        <!-- Ionicons -->
        {{HTML::style('adminLTE/bower_components/Ionicons/css/ionicons.min.css')}}
        <!-- DataTables -->
        {{HTML::style('css/jquery.dataTables.min.css')}}
        {{HTML::style('adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}
        
        <!-- Theme style -->
        {{HTML::style('adminLTE/dist/css/AdminLTE.min.css')}}
        <!-- bootstrap datepicker -->
        {{HTML::style('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}

        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        {{HTML::style('adminLTE/dist/css/skins/_all-skins.min.css')}}
        {{HTML::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css')}}

        <!-- Loading for Ajax -->
        {{HTML::style('adminLTE/dist/css/loading.css')}}
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="loading" style="display: none;">Loading&#8230;</div>
        <div class="loadpage">Loading&#8230;</div>
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>E</b>S</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>E-Stamp</b> Admin</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </nav>
            </header>
            @include('layouts.sidebar')
         <div class="content-wrapper">
        <!-- Content Header (Page header) -->
                @yield('content')
        
        </div> 
        </div>
<!-- jQuery 3 -->
{{HTML::script('adminLTE/bower_components/jquery/dist/jquery.min.js')}}
<!-- Bootstrap 3.3.7 -->
{{HTML::script('adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}
<!-- FastClick -->
{{HTML::script('adminLTE/bower_components/fastclick/lib/fastclick.js')}}
<!-- AdminLTE App -->
{{HTML::script('adminLTE/dist/js/adminlte.min.js')}}
<!-- AdminLTE for demo purposes -->
{{HTML::script('adminLTE/dist/js/demo.js')}}
{{HTML::script('adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}
<!-- DataTables -->
{{HTML::script('adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}
{{HTML::script('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.all.min.js')}}
{{HTML::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js')}}
{{HTML::script('//cdn.datatables.net/plug-ins/1.10.16/dataRender/ellipsis.js')}}

 @yield('js', '<span class="label bg-danger">MISSING FOOTER SCRIPT</span>')
<script>
    $(function() {
        $('.loadpage').hide();
    });
</script>
    </body>
</html>
