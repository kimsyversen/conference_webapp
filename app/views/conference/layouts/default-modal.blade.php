<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conferences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('css/conference.min.css') }}
</head>
<body>
    @yield('content')

    @section('javascript')
        {{ HTML::script('js/conference.min.js') }}
    @show
</body>
</html>
