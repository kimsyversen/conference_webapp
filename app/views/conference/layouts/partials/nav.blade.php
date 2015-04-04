{{--<nav class="pure-drawer" data-position="left">
    <div class="row">
        <ul class="nav nav-stacked nav-conference">


            @if(!Session::has('conference_id'))
                <li> <a href="#" class="disabled"><i class="glyphicon glyphicon-exclamation-sign"> </i> {{ Lang::get('menu.menu_message') }}</a> </li>

                @if(isset($authenticated) && $authenticated === false)
                    <li> <a href="#" class="register-button" data-toggle="modal" data-target="#registerModal"><i class="glyphicon glyphicon-pencil"></i> {{ Lang::get('menu.register') }}</a></li>
                    <li> <a href="#" class="login-button" data-toggle="modal" data-target="#signIn"><i class="glyphicon glyphicon-log-in"></i> {{ Lang::get('menu.login') }}</a></li>
                @endif
            @endif
            <li><a href="{{ URL::current() }}"><i class="glyphicon glyphicon-refresh"></i>  {{ Lang::get('menu.refresh') }} </a> </li>
        </ul>
    </div>
</nav>--}}
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('conferences_path') }}"> {{ Lang::get('menu.home') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('conference_id'))
                    <li><a href="{{ route('schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-list-alt"></i>  {{ Lang::get('menu.schedule') }} </a> </li>
                    <li><a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-map-marker"></i>  {{ Lang::get('menu.maps') }}</a> </li>
                    <li><a href="{{ route('newsfeed_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-earphone"></i>  {{ Lang::get('menu.newsfeed') }}</a> </li>

                    @if(isset($authenticated) && $authenticated === true)
                        <li><a href="{{ route('personal_schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-tasks"></i>  {{ Lang::get('menu.personal_schedule') }}</a> </li>
                        <li class="nav-item"><a href="{{ route('chats_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-comment"></i> {{ Lang::get('menu.messages') }}</a> </li>
                    @endif
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(isset($authenticated) && $authenticated === false)
                    <li> <a href="#" class="register-button" data-toggle="modal" data-target="#registerModal"><i class="glyphicon glyphicon-pencil"></i> {{ Lang::get('menu.register') }}</a></li>
                    <li> <a href="#" class="login-button" data-toggle="modal" data-target="#signIn"><i class="glyphicon glyphicon-log-in"></i> {{ Lang::get('menu.login') }}</a></li>
                @else
                    <li> <a href="{{ route('logout_path')}}"><i class="glyphicon glyphicon-log-out"></i> {{ Lang::get('menu.logout') }}</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>