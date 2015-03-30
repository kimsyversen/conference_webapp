<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conferencebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/Admin.css') }}

</head>
<body>
<header>
    @include('admin.partials.nav')
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-2">
            <div class="list-group" id="sidebar">
                <a href="#" class="list-group-item">Item
                </a>
                <a href="#" class="list-group-item">Item
                </a>
                <a href="#" class="list-group-item">Item
                </a>
                <a href="#" class="list-group-item">Item
                </a>
                <a href="#" class="list-group-item">Item
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-10">
            @yield('content')
        </div>
    </div>
</div>

@section('javascript')
    {{ HTML::script('js/jquery-2.1.3.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/bootstrap-dialog.min.js') }}
    {{ HTML::script('js/conference.js') }}
    {{ HTML::script('js/addtohomescreen.min.js') }}
@show
</body>
</html>
