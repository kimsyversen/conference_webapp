
    <ul class="navigation">
        @if(!$authenticated)
            <li class="nav-item"> {{ link_to_route('register_path', 'Register') }} </li>
            <li class="nav-item"> {{ link_to_route('login_path', 'Login') }} </li>
        @endif

        @if($authenticated)
            <li class="nav-item"> {{ link_to_route('profile_path', 'Profile') }} </li>
            <li class="nav-item"> {{ link_to_route('logout_path', 'Log out') }} </li>
        @endif
    </ul>

    <input type="checkbox" id="nav-trigger" class="nav-trigger" />
    <label for="nav-trigger"></label>








