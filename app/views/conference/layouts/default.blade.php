<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conferences</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    {{ HTML::style('css/Main.css') }}
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


    @include('conference.layouts.partials.footer')

    @section('javascript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        {{ HTML::script('js/conference.js') }}
    @show
</body>
</html>
