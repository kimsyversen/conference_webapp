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
			<a class="navbar-brand" href="{{ route('main_path') }}">Home</a>
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if(!$authenticated)
					<li> {{ link_to_route('register_path', 'Register') }} </li>
                    <li> {{ link_to_route('login_path', 'Login') }} </li>
				@endif

                @if($authenticated)
                <li> {{ link_to_route('profile_path', 'Profile') }} </li>
                <li> {{ link_to_route('logout_path', 'Log out') }} </li>
                @endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>