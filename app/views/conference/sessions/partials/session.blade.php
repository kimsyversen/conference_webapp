@if($session['category'] == 'professional')
    @include('conference.sessions.categories.professional')
@endif

@if($session['category'] == 'social')
    @include('conference.sessions.categories.social')
@endif

@if($session['category'] == 'break')
    @include('conference.sessions.categories.break')
@endif

@if($session['category'] == 'other')
    @include('conference.sessions.categories.other')
@endif