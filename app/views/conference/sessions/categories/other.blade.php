<div class="row session">
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <div class="row event">
            <div class="col-xs-2 col-sm-3 col-md-2 event-time">
                @include('conference.sessions.categories.partials.time')
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 info">
                <h4>{{ $session['title'] }}</h4>

                <div class="row descriptions">
                    <div class="col-xs-12 session-info">
                        <ul>
                            @if(isset($session['location']) && !empty($session['location']))
                                <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</li>
                            @endif

                            @if(isset($session['confirmed']) && $session['confirmed'] == 0)
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
            </div>
        </div>
    </div>
</div>
