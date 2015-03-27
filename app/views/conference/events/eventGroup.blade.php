@foreach($data['data'] as $sessionGroup)
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])
        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])
        @endforeach
@endforeach

