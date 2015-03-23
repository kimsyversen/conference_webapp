<div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-10">
            <div class="row event">
                <div class="col-xs-2 col-sm-3 col-md-2 event-time">
                    <div class="row">
                        <div class="col-xs-12 day">
                            {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
                        </div>
                        <div class="col-xs-12 month">
                            {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-8 col-md-9 info">
                    <h2 class="title"><a href="/{{ $session['links']['session']['uri'] }}" rel="self">{{ $session['title'] }}</a></h2>

                    <div class="row">
                        <div class="description-short">
                            <div class="col-xs-12">
                                <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span> {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i')  }} - {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i')  }}</p>
                                <p><span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</p>
                            </div>
                        </div>

                        <div class="description-long hidden">
                            <div class="col-xs-12">
                                <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span> {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i')  }} - {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i')  }}</p>
                                <p><span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</p>
                                <p>{{ $session['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-1 col-md-1 social">
                    <div class="row text-center">
                        <div class="col-xs-4 col-sm-12 col-md-12 facebook"><a href="#facebook"> <span class="fa fa-facebook"></span> </a> </div>
                        <div class="col-xs-4 col-sm-12 col-md-12 twitter"><a href="#twitter"> <span class="fa fa-twitter"></span></a></div>
                        <div class="col-xs-4 col-sm-12 col-md-12 google-plus"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
