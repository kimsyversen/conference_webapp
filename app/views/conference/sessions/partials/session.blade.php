<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-1 col-md-10">
            <ul class="event-list">
                <li>
                    <time>
                        <span class="day">{{ ConferenceHelper::timestampToCarbon($session['start_date']['date'])->day  }}</span>
                        <span class="month">{{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'M') }}</span>
                        <span class="time">12:00 AM</span>
                    </time>
                    <div class="info">
                        <h2 class="title"><a href="/{{ $session['links']['session']['uri'] }}" rel="self">{{ $session['title'] }}</a></h2>
                        <div class="description-short">
                            <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span> {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i')  }} - {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i')  }}</p>
                            <p><span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</p>
                        </div>

                        <div class="description-long hidden">
                            <div class="col-xs-12">
                                <p><span class="glyphicon glyphicon glyphicon-time" aria-hidden="true"></span> {{ ConferenceHelper::formatTimestamp($session['start_date']['date'],'H:i')  }} - {{ ConferenceHelper::formatTimestamp($session['end_date']['date'],'H:i')  }}</p>
                                <p><span class="glyphicon glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $session['location']  }}</p>
                                <p>{{ $session['description'] }}</p>
                            </div>
                        </div>


                 {{--           <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
                            <li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>--}}
                        <div class="buttons">
                            @if($schedule_type == 'conference')
                                @if($authenticated)
                                    @if($session['in_personal_schedule'] == true)
                                        <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                                            @include('conference.components.button', [
                                            'id' => 'remove-from-schedule',
                                            'buttonClass' => 'btn button-dark with-border button-schedule',
                                            'text' => 'Remove from schedule',
                                            'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-remove',
                                            'value' =>  $session['id']])
                                        </div>
                                    @else
                                        <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                                            @include('conference.components.button', [
                                            'id' => 'add-to-schedule',
                                            'buttonClass' => 'btn button-dark with-border button-schedule',
                                            'text' => 'Add to schedule',
                                            'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-save',
                                            'value' =>  $session['id']])
                                        </div>
                                    @endif
                                    <div class="col-xs-5 col-sm-6 nopadding button-more-parent">
                                        @include('conference.components.button', [
                                        'buttonClass' => 'btn button-dark button-more',
                                        'id' => 'button-session-more',
                                        'text' => 'Read more',
                                        'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-zoom-in'])
                                    </div>
                                @else
                                    <div class="col-xs-12 col-sm-12 nopadding button-more-parent">
                                        @include('conference.components.button', [
                                        'buttonClass' => 'btn button-dark button-more',
                                        'id' => 'button-session-more',
                                        'text' => 'Read more',
                                        'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-zoom-in'])
                                    </div>
                                @endif
                            @endif

                            @if($schedule_type == 'personal')
                                <div class="col-xs-7 col-sm-6 nopadding container-button-schedule personal">
                                    @include('conference.components.button', [
                                    'id' => 'remove-from-schedule',
                                    'buttonClass' => 'btn button-dark with-border button-schedule',
                                    'text' => 'Remove from schedule',
                                    'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-remove',
                                    'value' =>  $session['id']])
                                </div>
                                <div class="col-xs-5 col-sm-6 nopadding button-more-parent">
                                    @include('conference.components.button', [
                                    'buttonClass' => 'btn button-dark button-more',
                                    'id' => 'button-session-more',
                                    'text' => 'Read more',
                                    'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-zoom-in'])
                                </div>
                            @endif

                            @if($schedule_type == 'session')
                                <div class="col-xs-12 nopadding button-more-parent">
                                    @include('conference.components.button', [
                                    'buttonClass' => 'btn button-dark button-more',
                                    'id' => 'button-session-more',
                                    'text' => 'Read more',
                                    'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-zoom-in'])
                                </div>


                            @endif
                        </div>

                    </div>
                    <div class="social">
                        <ul>
                            <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span> </a></li>
                            <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                            <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>