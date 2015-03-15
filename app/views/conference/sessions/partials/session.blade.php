<div class="row">
    <!-- Push one column to left -->
    <div class="col-md-1"></div>
    <div class="col-md-10 session-item">
        <div class="row header">
            <div class="col-xs-2 col-sm-1 avatar">
                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
            </div>
            <div class="col-xs-10 title">
                <h4> <a href="/{{ $session['links']['session']['uri'] }}" rel="self">{{ $session['title'] }}</a></h4>
            </div>
        </div>

        <div class="row description-short">
            <div class="col-xs-12">
                {{ ConferenceHelper::getShortDescription($session['description'], 15) }}
            </div>
        </div>

        <div class="row description-long hidden">
            <div class="col-xs-12">
                <p class="lead">About the session</p>
                <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span> {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i')  }} - {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i')  }}</p>
                <p><span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</p>
                <p>{{ $session['description'] }}</p>
            </div>
        </div>

        <div class="row buttons">
            @if($authenticated)
                <div class="col-xs-6 nopadding">
                    <button class='btn button-dark with-border button-schedule' id="add-to-schedule" value="{{ $session['id']  }}">
                        <span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <span class="button-text">Add to schedule</span></button>
                </div>

                <div class="col-xs-6 nopadding button-more-parent">
                    <button class='btn button-dark button-more' id="button"><span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <span class="button-text">Read more</span>
                    </button>
                </div>
            @else
                <div class="col-xs-12 nopadding button-more-parent">
                    <button class='btn button-dark button-more' id="button"> <span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span>
                        <span class="button-text">Read more</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>