<!-- Stored in resources/views/layouts/app.blade.php -->
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




    </head>
    <body>

      
        <aside class="main-sidebar">
            @include('page.leftmenu')
        </aside>
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <div class="">
                @yield('input_form')
              {{--   @yield('input_form_branchs')
                @yield('input_form_campaigns') --}}
                
                @yield('dataTable')
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


 @yield('js')
    </body>
</html>
