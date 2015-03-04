<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"> {{ link_to_route('conferences_path', 'All Conferences') }} </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if($authenticated)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="nav-item"> {{ link_to_route('profile_path', 'Profile') }} </li>
                            <li class="nav-item"> {{ link_to_route('logout_path', 'Log out') }} </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"> {{ link_to_route('register_path', 'Register') }} </li>
                    <li class="nav-item"> {{ link_to_route('login_path', 'Login') }} </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>