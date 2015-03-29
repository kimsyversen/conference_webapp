@if(Session::has('has_visited_before'))
    <div class="container-fluid site-notice">
        <div class="alert alert-info alert-dismissible animated fadeIn" style="color: black">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="font-size: 2em;">&times;</span></button>
            <div class="exclamation animated flash" style="float: left; padding: 1em;">
                <i class="fa fa-exclamation-circle" style="font-size:4em;"></i>
            </div>
            <div style="margin-top: 1em;">
                <p style="font-size:1.3em;">Do you want a short presentation of the features of this application? If not, just scroll to the bottom of the page and click on "Features of this application" when you want.
                    <a class="alert-link" href="{{ route('featurette_path')}}">Give me a short presentation</a></p>
            </div>
        </div>
    </div>
    <?php Session::forget('has_visited_before') ?>
@endif

