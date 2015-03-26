<!-- Sidebar from http://www.bootstrapzero.com/bootstrap-template/facebook -->


    <!-- sidebar -->
    <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

        <ul class="nav">
            <li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
        </ul>

        <ul class="nav hidden-xs" id="lg-menu">
            @if(Session::has('conference_id'))
                <li class="nav-item"><a href="{{ route('schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-list-alt"></i> Conference schedule</a> </li>
                <li class="nav-item"><a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-map-marker"></i> Maps</a> </li>
                <li class="nav-item"><a href="{{ route('newsfeed_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-earphone"></i> Newsfeed</a> </li>

                @if(isset($authenticated) && $authenticated === true)
                    <li class="nav-item"><a href="{{ route('personal_schedule_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-tasks"></i> My schedule</a> </li>
                    <li class="nav-item"><a href="{{ route('chats_path', ['conference_id' => Session::get('conference_id')]) }}"><i class="glyphicon glyphicon-comment"></i> Chats</a> </li>

                @endif
            @endif
        </ul>
        <ul class="list-unstyled hidden-xs" id="sidebar-footer">
            <li>
                @if(Session::has('conference_id'))
                    <a class="navbar-brand home-link" href="{{ route('conference_path', ['conference_id' => Session::get('conference_id')])  }}">
                        <i class='glyphicon glyphicon-home' aria-hidden="true"> </i><span> Home</span>
                    </a>
                @else

                    <a class="navbar-brand" href="{{ route('conferences_path')}}">
                        <i class='glyphicon glyphicon-home' aria-hidden="true"> </i><span> Browse conferences</span>
                    </a>
                @endif
            </li>
        </ul>

        <!-- tiny only nav-->
        <ul class="nav visible-xs" id="xs-menu">
            @if(Session::has('conference_id'))
                <li class="nav-item"><a href="{{ route('schedule_path', ['conference_id' => Session::get('conference_id')]) }}" class="text-center"><i class="glyphicon glyphicon-list-alt"></i>  </a> </li>
                <li class="nav-item"><a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}" class="text-center"><i class="glyphicon glyphicon-map-marker"></i> </a> </li>
                <li class="nav-item"><a href="{{ route('newsfeed_path', ['conference_id' => Session::get('conference_id')]) }}" class="text-center"><i class="glyphicon glyphicon-earphone"></i> </a> </li>

                @if(isset($authenticated) && $authenticated === true)
                    <li class="nav-item"><a href="{{ route('personal_schedule_path', ['conference_id' => Session::get('conference_id')]) }}" class="text-center"><i class="glyphicon glyphicon-tasks"></i> </a> </li>
                    <li class="nav-item"><a href="{{ route('chats_path', ['conference_id' => Session::get('conference_id')]) }}" class="text-center"><i class="glyphicon glyphicon-comment"></i> </a> </li>
                @endif
            @endif
        </ul>
    </div>