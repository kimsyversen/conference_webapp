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

    {{ HTML::style('css/conference.min.css') }}
    {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css') }}



{{--    {{ HTML::script('components/vendor/jquery/dist/jquery.min.js') }}
    {{ HTML::script('packages/frenzy/turbolinks/jquery.turbolinks.js') }}

    {{ HTML::script('js/conference.min.js') }}

    {{ HTML::script('packages/frenzy/turbolinks/turbolinks.js') }}--}}

</head>

<body>
<div class="pure-container" id="pure-container" data-effect="pure-effect-slide">
    <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"/>
    <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left"><span class="pure-toggle-icon"></span></label>

    @include('conference.layouts.partials.nav')

    <div class="pure-pusher-container">
        <div class="pure-pusher">

            <div class="container">
                <div class="im-centered row">
                    <div class="col-xs-12 text-center">
                        @include('conference.partials.options.language')
                    </div>
                </div>

               {{-- <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 center-block" style="float:none">
                        @include('conference.partials.options.language')
                    </div>
                </div>--}}
                @yield('breadcrumb')
                @yield('errors-and-messages')
                @yield('first-time-stuff')
                @yield('content')

            </div>
            @include('conference.partials.goto-top')
            @include('conference.layouts.partials.footer')
        </div>

    </div>

    <label class="pure-overlay" for="pure-toggle-left" data-overlay="left"></label>
</div>


@include('conference.layouts.modals.signin')
@include('conference.layouts.modals.register')

@section('javascript')
{{--    {{ HTML::script('components/vendor/jquery/dist/jquery.min.js') }}--}}
    {{ HTML::script('js/conference.min.js') }}

@show
</body>
</html>