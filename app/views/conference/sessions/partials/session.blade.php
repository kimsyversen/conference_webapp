<div class="row session-item">
    <!-- Push one column to left -->
    <div class="col-md-1"></div>
    <div class="col-md-10 item">
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
            @if($schedule_type == 'conference')
                @if($authenticated)
                    @if($session['in_personal_schedule'] == true)
                        <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                            @include('conference.components.button', [
                            'id' => 'remove-from-schedule',
                            'buttonClass' => 'btn button-dark with-border button-schedule',
                            'text' => 'Remove from schedule',
                            'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-calendar',
                            'value' =>  $session['id']])
                        </div>
                    @else
                        <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                            @include('conference.components.button', [
                            'id' => 'add-to-schedule',
                            'buttonClass' => 'btn button-dark with-border button-schedule',
                            'text' => 'Add to schedule',
                            'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-calendar',
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
                        'spanClass' => 'glyphicon glyphicon glyphicon glyphicon-calendar',
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