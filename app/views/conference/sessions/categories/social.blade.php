<div class="row session">
    <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
        <div class="row event">
            <div class="col-xs-2 col-sm-3 col-md-2 event-time">
                <div class="row">
                    <div class="col-xs-12 day">
                        {{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}
                    </div>
                    <div class="col-xs-12 month">
                        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}
                    </div>

                    <div class="col-xs-12 hour">
                        {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i') }} -

                        {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i') }}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 info">
                <h4><a href="/{{ $session['links']['session']['uri'] }}">{{ $session['title'] }}</a></h4>

                <div class="row descriptions">
                    <div class="col-xs-12 session-info">
                        <ul>
                            @if(isset($session['location']) && !empty($session['location']))
                                <li> <span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</li>
                            @endif

                            @if(isset($session['confirmed']) && ($session['category'] == 'professional' || $session['category'] == 'social'))
                                @if($session['confirmed'] == 1)
                                    <li> <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmed</li>
                                @else
                                    <li> <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelled</li>
                                @endif
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

            {{--        <div class="col-xs-12 col-sm-1 col-md-1 social">
                        <div class="row text-center">
                           --}}{{-- <div class="fb-share-button" data-href="/{{ $session['links']['session']['uri'] }}" data-layout="icon"></div>--}}{{--
                            <div class="col-xs-4 col-sm-12 col-md-12 facebook nopadding" id="fb-root">

                            </div>

                            --}}{{--<div class="col-xs-4 col-sm-12 col-md-12 facebook nopadding " id="fb-root"><a class="fb-share-button fb-root" data-href="/{{ $session['links']['session']['uri'] }}" data-layout="link"> <span class="fa fa-facebook"></span> </a>  </div>--}}{{--
                            <div class="col-xs-4 col-sm-12 col-md-12 twitter nopadding"><a href="#twitter"> <span class="fa fa-twitter"></span></a></div>
                            <div class="col-xs-4 col-sm-12 col-md-12 google-plus nopadding"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></div>
                        </div>
                    </div>--}}
        </div>
        <div class="row buttons">
            @if($schedule_type == 'conference')
                @if($authenticated)
                    @if($session['in_personal_schedule'] == true)
                        @if(empty($session['description']))
                            <div class="col-xs-12 col-sm-12 nopadding container-button-schedule">
                                @include('conference.components.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                            </div>
                        @else
                            <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                                @include('conference.components.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                            </div>
                        @endif
                    @else
                        @if(!empty($session['description']))
                            <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                                @include('conference.components.buttons.button-schedule-add', [ 'value' =>  $session['id'] ])
                            </div>
                        @else
                            <div class="col-xs-12 col-sm-12 nopadding container-button-schedule">
                                @include('conference.components.buttons.button-schedule-add', [ 'value' =>  $session['id'] ])
                            </div>
                        @endif
                    @endif
                    @if(!empty($session['description']))
                        <div class="col-xs-5 col-sm-6 nopadding">
                            @include('conference.components.buttons.button-read-more')
                        </div>
                    @endif
                @else
                    @if(!empty($session['description']))
                        <div class="col-xs-12 col-sm-12 nopadding">
                            @include('conference.components.buttons.button-read-more')
                        </div>
                    @endif
                @endif
            @endif
            @if($schedule_type == 'personal')
                @if(empty($session['description']))
                    <div class="col-xs-12 col-sm-12 nopadding container-button-schedule personal">
                        @include('conference.components.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                    </div>
                @else
                    <div class="col-xs-7 col-sm-6 nopadding container-button-schedule personal">
                        @include('conference.components.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                    </div>

                    <div class="col-xs-5 col-sm-6 nopadding">
                        @include('conference.components.buttons.button-read-more')
                    </div>
                @endif
            @endif

            @if($schedule_type == 'session')
                <div class="col-xs-12 nopadding">
                    @include('conference.components.buttons.button-read-more')
                </div>
            @endif
        </div>
    </div>
</div>
