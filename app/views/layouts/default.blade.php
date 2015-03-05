<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    {{HTML::style('css/Main.css') }}
</head>
<body>
    <header>
        @include('layouts.partials.nav')
    </header>
    <div class="wrapper">
        <div class="container">
            @include('layouts.partials.errors')
            @include('layouts.partials.messages')

            @yield('content')
        </div>
    </div>
    <div class="push"></div>
        @include('layouts.partials.footer')

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
