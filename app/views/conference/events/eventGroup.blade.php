<div class="row options">
    <div class="col-xs-12 ">
        <a href="#" class="close">{{ Lang::get('event.filter.title')  }} <span class="glyphicon glyphicon-menu-down" style="color:black;" aria-hidden="true" style="font-size: 1em;"> </span>
        </a>
    </div>
</div>

<div class="container-fluid">
    <div class="row toggled" id="advanced-options">
        <div class="padding">
            <div class="col-xs-12 col-md-6">
                <label>{{ Lang::get('event.filter.title-free')  }}</label>
                <input type="text" class="text-input form-control" placeholder="{{ Lang::get('event.filter.title-free')  }}" id="filter" value="" autocomplete="off" />
            </div>
            <div class="col-xs-12 col-md-6 btn-group" aria-label='Days' id="button-days">
                <label style="display:block">{{ Lang::get('event.filter.title-buttons')  }}</label>


                <a href='#' class='btn btn-default conference-button-day' data-value='all'>{{ Lang::get('event.buttons.all-days')  }} </a>
            </div>
        </div>
    </div>
</div>

@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.partials.delimiter', ['text' => Lang::get('event.heading'), 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach

