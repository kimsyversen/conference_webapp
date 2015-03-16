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
                    <li class="nav-item"> {{ link_to_route('conferences_path', 'All conferences', null, ['name' => 'all-conferences-link'] ) }} </li>
                    <li class="nav-item"> {{ link_to_route('schedule_path', 'Schedule', ['conference_id' => Session::get('conference_id')]) }} </li>
                    <li class="nav-item"> {{ link_to_route('maps_path', 'Maps', ['conference_id' => Session::get('conference_id')] ) }} </li>
                    <li class="nav-item"> {{ link_to_route('newsfeed_path', 'Newsfeed', ['conference_id' => Session::get('conference_id')] ) }} </li>

                    @if(isset($authenticated) && $authenticated === true)
                        <li class="nav-item"> {{ link_to_route('personal_schedule_path', 'Personal Schedule', ['conference_id' => Session::get('conference_id')] ) }} </li>
                    @endif
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($authenticated)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class='glyphicon glyphicon-user navbar-user-image'> </i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item">  {{ link_to_route('profile_path', "Profile") }} </li>
                            <li class="nav-item "> {{ link_to_route('logout_path', 'Log out') }} </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"> {{ link_to_route('registration_path', 'Register') }} </li>
                    <li class="nav-item"> {{ link_to_route('login_path', 'Login') }} </li>
                @endif
            </ul>
        </div>
    </div>
</nav>