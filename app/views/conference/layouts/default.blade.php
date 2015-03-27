<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conferencebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/img/android-chrome-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon-180x180.png">

    <meta name="msapplication-square70x70logo" content="/img/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="/img/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="/img/widetile.png" />
    <meta name="msapplication-square310x310logo" content="/img/largetile.png" />

    {{ HTML::style('components/vendor/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('components/vendor/bootstrap3-dialog/dist/css/bootstrap-dialog.min.js') }}
    {{ HTML::style('components/vendor/animate-css/animate.min.css') }}
    {{ HTML::style('css/Main.css') }}

    {{ HTML::style('css/addtohomescreen.css') }}
</head>

<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            @include('conference.layouts.components.sidebar')
            <div class="column col-sm-10 col-xs-11" id="main">
                <div class="navbar navbar-top navbar-static-top">
                    <div class="navbar-header" >
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="{{ route('conferences_path')}}">
                            <i class='glyphicon glyphicon-home' aria-hidden="true"> </i><span> Home</span>
                        </a>
                    </div>
                </div>

                <div class="padding">
                    <div class="full col-xs-12">
                        <div class="row">
                            @yield('content')
                        </div>

                        <div class="push"></div>
                        @include('conference.layouts.partials.goto-top')
                        @include('conference.layouts.components.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('javascript')
    {{ HTML::script('components/vendor/jquery/dist/jquery.min.js') }}
    {{ HTML::script('components/vendor/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('components/vendor/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js') }}
    {{ HTML::script('js/conference.js') }}
@show
</body>
</html>