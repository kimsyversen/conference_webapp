{{ Form::open(['route' => 'ajax.user.change.view', 'id' => 'frm-view', 'class' => 'hidden']) }}
<input id="view" name="view" type="hidden">
{{ Form::close()}}


<div class="row">
    <div class="col-xs-12" style="margin-top: 1em;">
        @include('conference.partials.options.filter')
    </div>
</div>

@include('conference.partials.options.filter-options')

@include('conference.partials.options.filter-options-count')

@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.partials.delimiter', ['text' => Lang::get('event.heading'), 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])
        @endforeach
    </div>
@endforeach



