<div class="row session">
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
                <h4><a href="/{{ $session['links']['session']['uri'] }}" rel="self">{{ $session['title'] }}</a></h4>

                <div class="row descriptions">
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
</div>
