<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conferencebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="img/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="img/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="img/widetile.png" />
    <meta name="msapplication-square310x310logo" content="img/largetile.png" />

    {{ HTML::style('css/addtohomescreen.css') }}
    {{ HTML::script('js/addtohomescreen.min.js') }}
    <script> $(document).ready(function(){ addToHomescreen(); }); </script>

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/Main.css') }}
    {{ HTML::style('css/bootstrap-dialog.min.css') }}


</head>
<body>

    <header>
        @include('conference.layouts.partials.nav')
    </header>
    <div class="wrapper">
       <div class="container">
           @yield('content')
        </div>
        <div class="push"></div>
    </div>

    @include('conference.partials.goto-top')

    @include('conference.layouts.partials.footer')

    @section('javascript')
        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap-dialog.min.js') }}
        {{ HTML::script('js/conference.js') }}
    @show
    @if(Session::has('has_visited_before'))
        <div id="#receiver"></div>
        <script>
            $(document).ready(function(){
                $('#receiver').click();
            });
        </script>
        <?php Session::forget('has_visited_before') ?>

    @endif
</body>

</html>
