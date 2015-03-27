<div class="row session" data-value="{{ $session['id'] }}" data-url="/{{ $session['links']['session']['uri'] }}">
    <div class="col-xs-offset-0 col-xs-12">
        <div class="row event">
            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 event-time">
                @include('conference.sessions.categories.partials.time')
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 info">
                @if($session['confirmed'] == 1)
                    <h4><a href="/{{ $session['links']['session']['uri'] }}">{{ $session['title'] }}</a></h4>
                @else
                    <h4>{{ $session['title'] }}</h4>
                @endif

                <div class="row descriptions">
                    <div class="col-xs-12 session-info">
                        @include('conference.sessions.categories.partials.key-details')
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
