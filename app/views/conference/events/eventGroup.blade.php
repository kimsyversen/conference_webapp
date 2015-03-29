<div class="row" style="padding: 1em;">
    <div class="col-xs-12 col-md-6 ">
        <input type="text" class="text-input form-control pull-left" placeholder="Search events" id="filter" value="" autocomplete="off" />
    </div>
    <div class="col-xs-12 col-md-6 ">

        <div id="button-days" class='btn-group pull-right' role='group' aria-label='...'>
        </div>


</div>

<div class="row">

    </div>
</div>





@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach
