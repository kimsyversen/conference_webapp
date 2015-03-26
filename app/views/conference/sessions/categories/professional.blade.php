<div class="row session" data-value="{{ $session['id'] }}" data-url="/{{ $session['links']['session']['uri'] }}">
    <div class="col-xs-12">
        <div class="row event">
            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 event-time">
                @include('conference.sessions.categories.partials.time')
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 info">
                @if($session['confirmed'] == 1)
                    <h4><a href="/{{ $session['links']['session']['uri'] }}">{{ $session['title'] }}</a></h4>
                @else
                    <h4>{{ $session['title'] }}</h4>
                @endif

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
            </div>
        </div>
        @include('conference.sessions.categories.partials.buttons')
    </div>
</div>
