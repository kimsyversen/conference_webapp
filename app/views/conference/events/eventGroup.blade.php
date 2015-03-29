<div class="row" style="padding: 1em;">
    <div class="col-xs-12">
        <input type="text" class="text-input form-control" placeholder="Search events" id="filter" value="" autocomplete="off" />
    </div>
    <div class="col-xs-12 text-center">
        <span class="text-center" id="filter-count"></span>
        </div>
</div>

<div id="button-days" class='btn-group' role='group' aria-label='...'>
    <input type="text" class="text-input form-control" placeholder="Search">

</div>




@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach
