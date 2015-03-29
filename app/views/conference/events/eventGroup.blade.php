<div class="container-fluid" class="item">
<div id="advanced-options">
        <div class="row" style="padding: 1em; background-color: #afb0b3;">
            <div class="row">
                <div class="col-xs-12">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">More options <span class="glyphicon glyphicon-menu-down" aria-hidden="true" style="font-size: 1em;"></span></button>
                </div>
            </div>
            <div class="content">
            <div class="col-xs-12 col-md-6 ">
                <p>Search in events</p>
                <input type="text" class="text-input form-control" placeholder="Search events" id="filter" value="" autocomplete="off" />
            </div>
            <div class="col-xs-12 col-md-6 ">

                <div id="button-days" class='btn-group' role='group' aria-label='...'>
                    <p>Filter by day</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#advanced-options').find('.content').slideUp();
    });
</script>
@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.layouts.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach

