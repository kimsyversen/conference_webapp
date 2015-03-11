<nav class="navbar navbar-default navbar-inverse navbar-static-top conference-navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @if(Session::has('conference_id'))
                <a class="navbar-brand" href="{{ route('conference_path', ['conference_id' => Session::get('conference_id')])  }}">Conference {{ Session::get('conference_id') }}</a>
            @else
                <a class="navbar-brand" href="{{ route('home_path')}}">Home</a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="nav-item {{HTML::isUrlActive('conferences_path')}}"> {{ link_to_route('conferences_path', 'All Conferences') }} </li>

                @if(Session::has('conference_id'))
                    <li class="nav-item {{HTML::isUrlActive('schedule_path')}}"> {{ link_to_route('schedule_path', 'Schedule', ['conference_id' => Session::get('conference_id')] ) }} </li>

                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('access_token')))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class='glyphicon glyphicon-user navbar-user-image'> </i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item">  {{ link_to_route('profile_path', "Profile", ['id' => Session::get('conference_id')] ) }} </li>
                            <li class="nav-item"> {{ link_to_route('logout_path', 'Log out') }} </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item {{HTML::isUrlActive('registration_path')}}"> {{ link_to_route('registration_path', 'Register') }} </li>
                    <li class="nav-item {{HTML::isUrlActive('login_path')}}"> {{ link_to_route('login_path', 'Login') }} </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>