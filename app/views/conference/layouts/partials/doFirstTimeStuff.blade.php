@if(Session::has('has_visited_before'))
    <div class="container-fluid">
        <div class="row site-notice">
            <div class="col-xs-12 text-center">

                <p class="lead">Hi! This is a message that you will only see the first time you visit this application. Do you want a short presentation of the features of this application? If not, you can always see the presentation again. Just scroll to the bottom of the page and click on "Features of this application".</p>
                <div class="btn-group">
                    <a href="{{ route('featurette_path')}}" class="btn button-dark">Give me a short presentation</a>
                    <a href="#" class="btn button-dark" id="dismiss">Dismiss</a>
                </div>
            </div>
        </div>
    </div>
    <?php Session::forget('has_visited_before') ?>
@endif