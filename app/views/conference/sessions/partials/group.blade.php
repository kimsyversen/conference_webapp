@foreach($data['data'] as $sessionGroup)
    <div class="session-group">
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])
        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.sessions.partials.session', ['session' => $session, 'schedule_type' => $schedule_type])
        @endforeach
    </div>
@endforeach
