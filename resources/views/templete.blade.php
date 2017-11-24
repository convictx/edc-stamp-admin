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
        </style>
<!-- Bootstrap 3.3.7 -->
{{HTML::style('adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}
<!-- Font Awesome -->
{{HTML::style('adminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}
<!-- Ionicons -->
{{HTML::style('adminLTE/bower_components/Ionicons/css/ionicons.min.css')}}
<!-- Theme style -->
{{HTML::style('adminLTE/dist/css/AdminLTE.min.css')}}
<!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
{{HTML::style('adminLTE/dist/css/skins/_all-skins.min.css')}}
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif --}}
            @yield('content')
           
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
    </body>
</html>
