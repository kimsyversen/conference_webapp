<!-- Parse each group-->
@foreach($data['data'] as $sessionGroup)
    @include('conference.partials.delimiter', ['text' => 'Sessions starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

    <!-- A session element -->
    @foreach($sessionGroup['sessions'] as $session)
        @include('conference.sessions.partials.session', ['session' => $session, 'schedule_type' => $schedule_type])
    @endforeach
@endforeach
