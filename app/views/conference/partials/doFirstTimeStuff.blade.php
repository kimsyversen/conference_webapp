@if(Session::has('has_visited_before'))
    @include('conference.partials.alerts.firstvisit')
    <?php Session::forget('has_visited_before') ?>
@endif

