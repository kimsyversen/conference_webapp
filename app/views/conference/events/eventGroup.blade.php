<div class="row">
    <div class="col-xs-12">
        <form id="live-search" action="" class="styled" method="post">
            <fieldset>
                <input type="text" class="text-input form-control" placeholder="Search events" id="filter" value="" />
            </fieldset>
        </form>
        <span class="input-group-addon"id="filter-count"></span>
    </div>
</div>

@foreach($data['data'] as $sessionGroup)
    <div class="session-group">
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach
