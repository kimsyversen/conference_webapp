<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conferences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/Main.css') }}
    {{ HTML::style('css/bootstrap-dialog.min.css') }}

</head>
<body>
    <header>
        @include('conference.layouts.partials.nav')
    </header>
    <div class="wrapper">
       <div class="container">
           @yield('content')
        </div>
        <div class="push"></div>
    </div>

    @include('conference.partials.goto-top')

    @include('conference.layouts.partials.footer')
    @section('javascript')
        {{ HTML::script('js/jquery-1.11.2.min.js') }}
        {{ HTML::script('js/jquery-ui.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap-dialog.min.js') }}
        {{ HTML::script('js/conference.js') }}
    @show
</body>
</html>
