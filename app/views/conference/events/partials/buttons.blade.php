<div class="row buttons">
    @if($schedule_type == 'conference')
        @if($authenticated)
            @if($session['in_personal_schedule'] == true)
                @if(empty($session['description']))
                    <div class="col-xs-12 col-sm-12 nopadding container-button-schedule">
                        @include('conference.partials.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                    </div>
                @else
                    <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                        @include('conference.partials.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
                    </div>
                @endif
            @else
                @if(!empty($session['description']) && $session['confirmed'] == 1)
                    <div class="col-xs-7 col-sm-6 nopadding container-button-schedule">
                        @include('conference.partials.buttons.button-schedule-add', [ 'value' =>  $session['id'] ])
                    </div>
                @endif

                @if(empty($session['description']) && $session['confirmed'] == 1)
                    <div class="col-xs-12 col-sm-12 nopadding container-button-schedule">
                        @include('conference.partials.buttons.button-schedule-add', [ 'value' =>  $session['id'] ])
                    </div>
                @endif
            @endif
            @if(!empty($session['description'])  && $session['confirmed'] == 1)
                <div class="col-xs-5 col-sm-6 nopadding">
                    @include('conference.partials.buttons.button-read-more')
                </div>
            @endif
        @else
            @if(!empty($session['description'])  && $session['confirmed'] == 1)
                <div class="col-xs-12 col-sm-12 nopadding">
                    @include('conference.partials.buttons.button-read-more')
                </div>
            @endif
        @endif
    @endif
    @if($schedule_type == 'personal')
        @if(empty($session['description']))
            <div class="col-xs-12 col-sm-12 nopadding container-button-schedule personal">
                @include('conference.partials.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
            </div>
        @else
            <div class="col-xs-7 col-sm-6 nopadding container-button-schedule personal">
                @include('conference.partials.buttons.button-schedule-remove', [ 'value' =>  $session['id'] ])
            </div>

            <div class="col-xs-5 col-sm-6 nopadding">
                @include('conference.partials.buttons.button-read-more')
            </div>
        @endif
    @endif

    @if($schedule_type == 'session')
        <div class="col-xs-12 nopadding">
            @include('conference.partials.buttons.button-read-more')
        </div>
    @endif
</div>