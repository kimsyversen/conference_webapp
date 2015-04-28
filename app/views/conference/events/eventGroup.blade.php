<div class="row">
    <div class="col-xs-12 text-center" style="margin-top: 1em;">
        <div class="btn-group" role="group" aria-label="...">
            <button type="button" id="buttonCalendar" class="btn btn-default <?php if($default_view == "calendar") echo "active";  ?>" onclick="$('#view').val('calendar'); $('#frm-view').submit();" >{{ Lang::get('event.buttons.calendar-view') }}</button>
            <button type="button" id="buttonAlerts" class="btn btn-default <?php if($default_view == "traditional") echo "active";  ?>" onclick="$('#view').val('traditional'); $('#frm-view').submit();">{{ Lang::get('event.buttons.traditional-view') }}</button>
        </div>
    </div>
</div>


{{ Form::open(['route' => 'ajax.user.change.view', 'id' => 'frm-view', 'class' => 'hidden']) }}
    <input id="view" name="view" type="hidden">
{{ Form::close()}}


@if($default_view == "calendar")
    <div class="calendar-view {{ $default_view == "traditional" ? "toggled" : "toggle" }}" style="margin-top: 1em;">
        <div class="col-xs-12">
            @include('conference.events.partials.calendar')
        </div>
    </div>
@endif

@if($default_view == "traditional")
    <div class="traditional-view toggle {{ $default_view == "traditional" ? "toggle" : "toggled" }}">
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
    </div>
@endif






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
    eventRender: function(event, element, view) {
        if(event.location) {
            element.append("<span class='glyphicon glyphicon glyphicon-map-marker'></span>" + event.location);
            element.append("<br>");
        }

        if(event.speakers) {
            element.append("<span class='glyphicon glyphicon glyphicon-user'></span>" + event.speakers);
        }



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
   minTime: '07:30:00',
   maxTime: '24:00:00',
   slotDuration: '00:15:00',
   events: Uninett.events
});
});

</script>

