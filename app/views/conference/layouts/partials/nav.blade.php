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
                    <li> <a href="{{ route('logout_path')}}"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
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