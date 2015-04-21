<ul>
    @if(isset($session['location']) && !empty($session['location']))
        @if(Session::has('conference_id'))
            <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ Lang::get('event.location') }}: <a href="{{ route('maps_path', ['conference_id' => Session::get('conference_id')]) }}"> {{ $session['location']  }}</a> </li>
        @else
            <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ Lang::get('event.location') }}: {{ $session['location']  }}</li>
        @endif
    @endif

    @if(isset($session['confirmed']) && $session['confirmed'] == 0)
        <li class="cancelled"> <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Lang::get('event.cancelled') }}</li>
    @endif

    @if(isset($session['target_audience']) &&  $session['target_audience'] != null)
        <li> <span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"></span> {{ Lang::get('event.audience') }}: {{ $session['target_audience'] }}</li>
    @endif

    @if(isset($session['speakers']) &&  $session['speakers'] != null)
        <li> <span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span> {{ Lang::get('event.speaker') }}:
            @foreach($session['speakers'] as $speaker)
                   {{ $speaker['first_name'] }} {{ $speaker['last_name'] }}
            @endforeach
        </li>
    @endif
    <li> <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> <a href="/{{ $session['links']['session']['uri'] }}#giverating">{{ Lang::get('event.rating') }}</a></li>

</ul>