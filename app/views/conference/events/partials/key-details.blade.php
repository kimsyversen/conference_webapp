<ul>
    @if(isset($session['location']) && !empty($session['location']))
        <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</li>
    @endif

    @if(isset($session['confirmed']) && $session['confirmed'] == 0)
        <li class="cancelled"> <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelled</li>
    @endif
</ul>