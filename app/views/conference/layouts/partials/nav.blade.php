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
                <a class="navbar-brand" href="{{ route('conferences_path')}}">All conferences</a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('conference_id'))
                    <li class="nav-item {{HTML::activeState('conferences_path')}}"> {{ link_to_route('conferences_path', 'All Conferences', null, ['name' => 'all-conferences-link'] ) }} </li>
                @endif

                @if($authenticated)
                    <li class="nav-item {{HTML::activeState('schedule_path')}}"> {{ link_to_route('schedule_path', 'Schedule', ['conference_id' => Session::get('conference_id')], ['name' => 'conference-schedule-link']  ) }} </li>

                    @if($authenticated)
                        <li class="nav-item {{HTML::activeState('personal_schedule_path')}}"> {{ link_to_route('personal_schedule_path', 'Personal Schedule', ['conference_id' => Session::get('conference_id')], ['name' => 'personal-schedule-link']  ) }} </li>
                    @endif
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($authenticated)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class='glyphicon glyphicon-user navbar-user-image'> </i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item {{HTML::activeState('profile_path')}} ">  {{ link_to_route('profile_path', "Profile", null, ['name' => 'profile-link'] ) }} </li>
                            <li class="nav-item {{HTML::activeState('logout_path')}} "> {{ link_to_route('logout_path', 'Log out', null, ['name' => 'logout-link']) }} </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item {{HTML::activeState('registration_path')}}"> {{ link_to_route('registration_path', 'Register', null, ['name' => 'register-link'] ) }} </li>
                    <li class="nav-item {{HTML::activeState('login_path')}}"> {{ link_to_route('login_path', 'Login', null, ['name' => 'login-link'] ) }} </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>