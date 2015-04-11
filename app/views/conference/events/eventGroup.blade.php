

<div class="row">
    <div class="col-xs-12 text-center" style="margin-top: 1em;">
        <div class="btn-group" role="group" aria-label="...">
            <button type="button" id="buttonCalendar" class="btn btn-default" onclick="$('#view').val('calendar'); $('#frm-view').submit();" >{{ Lang::get('event.buttons.calendar-view') }}</button>
            <button type="button" id="buttonAlerts" class="btn btn-default" onclick="$('#view').val('traditional'); $('#frm-view').submit();">{{ Lang::get('event.buttons.traditional-view') }}</button>
        </div>
    </div>
</div>

{{ Form::open(['route' => 'ajax.user.change.view', 'id' => 'frm-view', 'class' => 'hidden']) }}
<input id="view" name="view" type="hidden">
{{ Form::close()}}



<div class="calendar-view {{ $default_view == "traditional" ? "toggled" : "toggle" }}" style="margin-top: 1em;">
    <div class="col-xs-12">
        <div id='calendar'></div>
    </div>
</div>



<div class="traditional-view toggle {{ $default_view == "traditional" ? "toggle" : "toggled" }}">
    <div class="row">
        <div class="col-xs-12">
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
</div>

<script>
    $(document).ready(function() {
        addToHomescreen();
        // page is now ready, initialize the calendar...
            $('#buttonCalendar').click(function() {
                $('.calendar-view').removeClass('toggled').addClass('toggle');
                $('.traditional-view').addClass('toggled').removeClass('toggle');
            });

            $('#buttonAlerts').click(function() {
                $('.calendar-view').removeClass('toggle').addClass('toggled');
                $('.traditional-view').addClass('toggle').removeClass('toggled');
            });



        $('#calendar').fullCalendar({
            defaultView: 'agendaDay',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay'
            },
            buttonText: {
                today : Uninett.buttonText.today,
                month : Uninett.buttonText.month,
                week : Uninett.buttonText.week,
                day: Uninett.buttonText.day
            },
            viewRender : function( view, element ) {
                $.jStorage.set('defaultDate', $('#calendar').fullCalendar('getDate'));
            },
             defaultDate: $.jStorage.get('defaultDate', "") !== "" ? $.jStorage.get('defaultDate') : moment(),


            dayNames : Uninett.dayNames,
            height: 'auto',
            allDayDefault: false,
            allDaySlot: false,
            firstDay: 1,
            axisFormat: 'H:mm',
            timeFormat: 'H(:mm)',
            minTime: '06:00:00',
            maxTime: '24:00:00',
            slotDuration: '00:15:00',
            events: Uninett.events
        });




    });

</script>

