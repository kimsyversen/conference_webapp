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

    {{--   {{ HTML::style('css/bootstrap-simplex.min.css') }}--}}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/Main.css') }}
    {{ HTML::style('css/bootstrap-dialog.min.css') }}
    {{ HTML::style('css/addtohomescreen.css') }}

</head>


<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            @include('conference.layouts.components.sidebar')

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <!-- top nav -->
                <div class="navbar navbar-top  navbar-static-top">
                    <div class="navbar-header" >
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                            @if(Session::has('conference_id'))
                                <a class="navbar-brand home-link" href="{{ route('conference_path', ['conference_id' => Session::get('conference_id')])  }}">
                                    <i class='glyphicon glyphicon-home' aria-hidden="true"> </i><span> Home</span>
                                </a>
                            @else

                                <a class="navbar-brand" href="{{ route('conferences_path')}}">
                                    <i class='glyphicon glyphicon-home' aria-hidden="true"> </i><span> Browse conferences</span>
                                </a>
                            @endif
                    </div>

                    <nav class="collapse navbar-collapse" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            @if($authenticated)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class='glyphicon glyphicon-cog  navbar-user-image'> </i>Settings <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        {{--<li class="nav-item">  {{ link_to_route('profile_path', "Profile") }} </li>--}}
                                        <li class="nav-item "> {{ link_to_route('logout_path', 'Log out') }} </li>
                                    </ul>
                                </li>
                            @else
                                {{--<li class="nav-item"> {{ link_to_route('registration_path', 'Register') }} </li>--}}
                                <li class="nav-item"> <a href="#" id="register-button"><i class="glyphicon glyphicon-pencil"></i> Register</a></li>
                                {{--<li class="nav-item"> {{ link_to_route('login_path', 'Login', null, ['id' => 'login-button']) }} </li>--}}
                                <li class="nav-item"> <a href="#" class="login-button"><i class="glyphicon glyphicon-user"></i> Login</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>

                <div class="padding">
                    <div class="full col-xs-12">

                        <!-- content -->
                        <div class="row">
                            @yield('content')
                        </div>

                        <div class="push"></div>
                        @include('conference.layouts.partials.goto-top')

                        @include('conference.layouts.partials.footer')
                    </div>
                </div>
            </div>
        </div>    <!-- /main -->
    </div>
</div>




{{--@include('conference.layouts.partials.footer')--}}

@section('javascript')
    {{ HTML::script('js/jquery-2.1.3.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/bootstrap-dialog.min.js') }}
    {{ HTML::script('js/conference.js') }}
    {{ HTML::script('js/addtohomescreen.min.js') }}
    <script> $(document).ready(function(){ addToHomescreen(); }); </script>

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    @show
</body>
</html>