<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conferences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('components/vendor/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/bootstrap-dialog.min.css') }}
    {{ HTML::style('css/Main.css') }}


</head>
<body>
    @yield('content')

    @section('javascript')
        {{ HTML::script('js/conference.js') }}
    @show
</body>
</html>
