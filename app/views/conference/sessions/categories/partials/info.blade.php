<h4><a href="/{{ $session['links']['session']['uri'] }}">{{ $session['title'] }}</a></h4>

<div class="row descriptions">
    <div class="col-xs-12 session-info">
        <ul>
            @if(isset($session['location']) && !empty($session['location']))
                <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</li>
            @endif

            @if(isset($session['confirmed']) && $session['confirmed'] == 1)
                <li> <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmed</li>
            @else
                <li> <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelled</li>
            @endif

        </ul>
    </div>
    <div class="description-short">
        <div class="col-xs-12">
            @if(!empty($session['description']) )
                <p> {{ ConferenceHelper::getShortDescription($session['description'], 5) }}</p>
            @endif
        </div>
    </div>

    <div class="description-long hidden">
        <div class="col-xs-12">

            <p>{{ $session['description'] }}</p>
        </div>
    </div>
</div>