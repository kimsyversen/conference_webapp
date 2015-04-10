@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')


<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" id="buttonCalendar" class="btn btn-default">View calendar</button>
                <button type="button" id="buttonAlerts" class="btn btn-default">View other</button>

            </div>
        </div>
    </div>

    <div class="row traditional-view ">
        <div class="col-xs-12">
            @include('conference.partials.alerts.danger')
            @include('conference.partials.alerts.info')
            @include('conference.partials.alerts.success')
            @include('conference.partials.alerts.warning')
            @include('conference.partials.alerts.firstvisit')
        </div>
    </div>

    <div class="row calendar-view ">
        <div class="col-xs-12">
            <div id='calendar'></div>
        </div>
    </div>
</div>

    <script>
        $(document).ready(function() {


            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'agendaWeek,agendaDay'
                },
                height: 'auto',
                defaultDate: '2015-04-05',
                defaultView: 'agendaDay',

                events: [{
                    "title": "Registrering",
                    "start": "2015-04-05UTC08:30:01",
                    "end": "2015-04-05UTC09:30:00"

                }, {
                    "title": "ASDF",
                    "start": "2015-04-05UTC08:30:01",
                    "end": "2015-04-05UTC09:30:00"
                }
                ]
            })
        });
    </script>

<script>
    $(document).ready(function() {
        $('#buttonCalendar').click(function() {
            $('.viewCalendar').removeClass('toggled').addClass('toggle');
            $('.viewAlerts').addClass('toggled').removeClass('toggle');
        });

        $('#buttonAlerts').click(function() {
            $('.viewCalendar').removeClass('toggle').addClass('toggled');
            $('.viewAlerts').addClass('toggle').removeClass('toggled');
        });
    });
</script>

<div class="container">
    <div class="row  text-center">
        <h1>Font awesome</h1>
        <div class="col-xs-12">
            <i class="fa fa-github"></i>
            <i class="fa fa-beer fa-lg"></i>
        </div>

        <div class="col-xs-12 text-center ">
            <h1>Star rating</h1>
            <div id="event-rating" class="rating-item" style="font-size: 2.5em;">
                <span data-value="5">☆</span>
                <span data-value="4">☆</span>
                <span data-value="3">☆</span>
                <span data-value="2">☆</span>
                <span data-value="1">☆</span>
            </div>
        </div>
    </div>
</div>



@stop


