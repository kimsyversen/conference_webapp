<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    {{HTML::style('css/Main.css') }}
</head>
<body>
	@include('layouts.partials.nav')
	<div class="container">
        @include('layouts.partials.errors')
        @include('layouts.partials.messages')
		@yield('content')
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
