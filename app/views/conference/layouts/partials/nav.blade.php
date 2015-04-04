<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand {{ Active::action('ConferenceController@index')  }}" href="{{ route('conferences_path') }}"> <i class="glyphicon glyphicon-home"></i> {{ Lang::get('menu.home') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('conference_id'))
                    <li><a href="{{ route('newsfeed_path', ['conference_id' => Session::get('conference_id')]) }}" class="{{ Active::action('ConferenceNewsFeedController@index') }}"><i class="glyphicon glyphicon-envelope"></i>  {{ Lang::get('menu.newsfeed') }}</a> </li>
                    @if(isset($authenticated) && $authenticated === true)
                        <li class="nav-item"><a href="{{ route('chats_path', ['conference_id' => Session::get('conference_id')]) }}" class="{{ Active::action(array('ConferenceChatsController@index', 'ConferenceChatsController@show')) }}"><i class="glyphicon glyphicon-comment"></i> {{ Lang::get('menu.messages') }}</a> </li>
                        <li><a href="{{ route('personal_schedule_path', ['conference_id' => Session::get('conference_id')]) }}" class="{{ Active::action('ConferencePersonalScheduleController@index') }}"><i class="glyphicon glyphicon-tasks"></i>  {{ Lang::get('menu.personal_schedule') }}</a> </li>
                    @endif
                    <li><a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}" class="{{ Active::action('ConferenceMapsController@index') }}"><i class="glyphicon glyphicon-map-marker"></i>  {{ Lang::get('menu.maps') }}</a> </li>
                    <li><a href="{{ route('schedule_path', ['conference_id' => Session::get('conference_id')]) }}" class="{{ Active::action('ConferenceScheduleController@index') }}"><i class="glyphicon glyphicon-list-alt"></i>  {{ Lang::get('menu.schedule') }} </a> </li>
                @endif
            </ul>

         <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle dropdown-settings" data-toggle="dropdown" role="button" aria-expanded="false">
                         <i class="glyphicon glyphicon-cog <?php if (isset($authenticated) && $authenticated === false) echo 'logged-out'; else echo 'logged-in'; ?>"> </i> {{ Lang::get('menu.settings') }} <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         @if(isset($authenticated) && $authenticated === false)
                             <li> <a href="#" class="register-button" data-toggle="modal" data-target="#registerModal"><i class="glyphicon glyphicon-pencil"></i> {{ Lang::get('menu.register') }} </a></li>
                             <li> <a href="#" class="login-button" data-toggle="modal" data-target="#signIn"><i class="glyphicon glyphicon-log-in"></i> {{ Lang::get('menu.login') }} </a></li>
                         @else
                             <li> <a href="{{ route('logout_path')}}"><i class="glyphicon glyphicon-log-out"></i> {{ Lang::get('menu.logout') }}</a></li>
                         @endif
                     </ul>
                 </li>
                 <li class="dropdown hidden-xs">
                     <a href="#" class="dropdown-toggle btn-change-language" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-globe"></i>   </a>
                     <ul class="dropdown-menu" role="menu" onchange="submit();">
                         <li onclick="$('#language').val('en'); $('#frm-language').submit();"><a href="#" data-value="en">{{ Lang::get('menu.change-language.english')  }}</a></li>
                         <li onclick="$('#language').val('no'); $('#frm-language').submit();"><a href="#" data-value="no">{{ Lang::get('menu.change-language.norwegian')  }}</a></li>
                     </ul>
                </li>

             <li class="dropdown visible-xs">
                 <a href="#" class="dropdown-toggle btn-change-language" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-globe"></i> {{ Lang::get('menu.change-language.change-language')  }} <span class="caret"></span>  </a>
                 <ul class="dropdown-menu" role="menu" onchange="submit();">
                     <li onclick="$('#language').val('en'); $('#frm-language').submit();"><a href="#" data-value="en">{{ Lang::get('menu.change-language.english')  }}</a></li>
                     <li onclick="$('#language').val('no'); $('#frm-language').submit();"><a href="#" data-value="no">{{ Lang::get('menu.change-language.norwegian')  }}</a></li>
                 </ul>
             </li>
            </ul>
        </div>
    </div>
</nav>

{{ Form::open(['route' => 'ajax.user.language.change', 'id' => 'frm-language', 'class' => 'hidden']) }}
<input id="language" name="language" type="hidden">
{{ Form::close()}}