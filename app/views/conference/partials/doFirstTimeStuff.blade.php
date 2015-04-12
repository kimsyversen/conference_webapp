@if(!Cookie::has('first_visit') || empty(Cookie::get('first_visit')))
    @include('conference.partials.alerts.firstvisit')
@endif

