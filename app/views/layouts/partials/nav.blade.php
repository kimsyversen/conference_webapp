<nav class="navbar navbar-default navbar-inverse navbar-static-top header-navigation">
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
                <a class="navbar-brand" href="{{ route('conference_path', ['id' => Session::get('conference_id')])  }}">To conference</a>
            @else
                <a class="navbar-brand" href="{{ route('main_path')}}">Home</a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="nav-item {{HTML::isUrlActive('conferences_path')}}"> {{ link_to_route('conferences_path', 'All Conferences') }} </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($authenticated)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class='glyphicon glyphicon-user navbar-user-image'> </i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item "> {{ link_to_route('profile_path', 'Profile', ['id' => Session::get('conference_id')]) }} </li>
                            <li class="nav-item"> {{ link_to_route('logout_path', 'Log out') }} </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item {{HTML::isUrlActive('register_path')}}"> {{ link_to_route('register_path', 'Register') }} </li>
                    <li class="nav-item {{HTML::isUrlActive('login_path')}}"> {{ link_to_route('login_path', 'Login') }} </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>