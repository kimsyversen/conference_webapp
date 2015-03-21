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
    @yield('content')

    @section('javascript')
        {{ HTML::script('js/jquery-ui.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bootstrap-dialog.min.js') }}
    @show
</body>
</html>
