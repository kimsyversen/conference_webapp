<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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

    {{ HTML::style('css/conference.min.css') }}
</head>

<body>
<div class="pure-container" data-effect="pure-effect-slide">


    <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left"/>
    <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left"><span class="pure-toggle-icon"></span></label>

    <nav class="pure-drawer " data-position="left">
        <div class="row">
            <ul class="nav nav-stacked nav-conference">
                @if(Session::has('conference_id'))
                    <li><a href="{{ route('schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-list-alt"></i> Conference schedule</a> </li>
                    <li><a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-map-marker"></i> Maps</a> </li>
                    <li><a href="{{ route('newsfeed_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-earphone"></i> Newsfeed</a> </li>

                    @if(isset($authenticated) && $authenticated === true)
                        <li><a href="{{ route('personal_schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-tasks"></i> My schedule</a> </li>
                        {{--<li class="nav-item"><a href="{{ route('chats_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-comment"></i> Chats</a> </li>--}}
                        <li"> <a href="{{ route('logout_path')}}"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
                    @else
                        <li> <a href="#" class="register-button" data-toggle="modal" data-target="#registerModal"><i class="glyphicon glyphicon-pencil"></i> Register</a></li>
                        <li> <a href="#" class="login-button" data-toggle="modal" data-target="#signIn"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
                    @endif
                @endif

                @if(!Session::has('conference_id'))
                    <li>  <span class="text-center "><i class="glyphicon glyphicon-exclamation-sign"> </i> You will have more choises here when you enter a conference. </span> </li>
                @endif
                <li><a href="{{ URL::current() }}"><i class="glyphicon glyphicon-refresh"></i> Refresh </a> </li>
            </ul>
        </div>
    </nav>

    <div class="pure-pusher-container">
        <div class="pure-pusher">

            <div class="container" style="margin-top: 100px;">
                @yield('breadcrumb')
                @yield('errors-and-messages')
                @yield('first-time-stuff')
                @yield('content')
            </div>

            @include('conference.layouts.partials.goto-top')
            @include('conference.layouts.partials.footer')
        </div>
    </div>
    <label class="pure-overlay" for="pure-toggle-left" data-overlay="left"></label>
</div>


@include('conference.layouts.modals.signin')
@include('conference.layouts.modals.register')

@section('javascript')
    {{ HTML::script('js/conference.min.js') }}
@show
</body>
</html>