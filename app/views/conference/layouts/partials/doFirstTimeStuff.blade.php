@if(Session::has('has_visited_before'))
    <div class="container-fluid">
        <div class="row site-notice">
            <div class="col-xs-12 text-center">

                <p class="lead">Hi! We see that this is the first time you use this application. Do you want a short presentation of what you can do with this application?</p>
                <div class="btn-group">
                    <a href="{{ route('featurette_path')}}" class="btn button-dark">Give me a quick tour</a>
                    <a href="#" class="btn button-dark" id="dismiss">Dismiss</a>
                </div>
            </div>
        </div>
    </div>
    <?php Session::forget('has_visited_before') ?>
@endif