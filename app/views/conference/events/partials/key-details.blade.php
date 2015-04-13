<ul>
    @if(isset($session['location']) && !empty($session['location']))
        <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ Lang::get('event.location') }}: {{ $session['location']  }}</li>
    @endif

    @if(isset($session['confirmed']) && $session['confirmed'] == 0)
        <li class="cancelled"> <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Lang::get('event.cancelled') }}</li>
    @endif

    @if(isset($session['target_audience']) &&  $session['target_audience'] == null)
        <li> <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> {{ Lang::get('event.audience') }}: {{ $session['target_audience'] }}</li>
    @endif

    @if(isset($session['speakers']) &&  $session['speakers'] != null)
            <li> <span class="glyphicon glyphicon glyphicon-bullhorn" aria-hidden="true"></span> {{ Lang::get('event.speaker') }}:
        @foreach($session['speakers'] as $speaker)
               {{ $speaker['first_name'] }} {{ $speaker['last_name'] }}
            @endforeach
            </li>
    @endif
</ul>