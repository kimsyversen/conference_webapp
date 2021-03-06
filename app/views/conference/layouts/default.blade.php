<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>ConferenceBook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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

    {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css')}}
    {{ HTML::style('css/conference.min.css') }}
    {{ HTML::script('js/conference.min.js') }}
</head>
<body>
<header>
    @include('conference.layouts.partials.nav')
</header>

<div class="wrapper">
    <div class="container">
        @yield('breadcrumb')
        @yield('errors-and-messages')
        @yield('first-time-stuff')

        @include('conference.partials.survey')
        @yield('content')
    </div>
    <div class="push"></div>
</div>

@include('conference.layouts.partials.footer')
@include('conference.layouts.modals.signin')
@include('conference.layouts.modals.register')

@section('javascript')
@show
</body>
</html>

