<div class="row options">
    <div class="col-xs-12 ">
        <a href="#" type="button" class="close" style="text-decoration: none; background: transparent; border: 0; color: black; font-size: 1em;">Search in schedule <span class="glyphicon glyphicon-menu-down" style="color:black;" aria-hidden="true" style="font-size: 1em;"> </span>
        </a>
    </div>
</div>


<div class="container-fluid">

    <div class="row toggled" id="advanced-options">
        <div class="padding">
            <div class="col-xs-12 col-md-6">
                <label>Find event by free text</label>
                <input type="text" class="text-input form-control" placeholder="Find event by free text" id="filter" value="" autocomplete="off" />
            </div>
            <div class="col-xs-12 col-md-6 btn-group" aria-label='Days' id="button-days">
                <label style="display:block">Filter the shedule by days</label>
            </div>
        </div>
    </div>
</div>

@foreach($data['data'] as $sessionGroup)
    <div class="session-group" data-value="{{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'m/d')  }}">
        @include('conference.partials.delimiter', ['text' => 'Events starting from', 'value' => ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')])

        @foreach($sessionGroup['sessions'] as $session)
            @include('conference.events.event', ['session' => $session, 'schedule_type' => $schedule_type])

        @endforeach
    </div>
@endforeach

