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
                allDayDefault: false,
                allDaySlot: false,
                firstDay: 1,
                defaultDate: '2015-04-10',
                defaultView: 'agendaDay',
                axisFormat: 'H:mm',
                timeFormat: 'H(:mm)',
                minTime: '06:00:00',
                maxTime: '24:00:00',
                events: [{"title":"Registrering","start":"2015-04-05UTC08:30:01","end":"2015-04-05UTC09:30:00","uri":"conferences\/1\/sessions\/1","color":"rgb(197, 89, 179)"},{"title":"Kurs 6 - Big data og offentlig sektor","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/7","color":"rgb(197, 64, 11)"},{"title":"Kurs 7 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/8","color":"rgb(197, 64, 11)"},{"title":"Kurs 4 - Brukeren i sentrum - gode argumenter for universell utforming","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/5","color":"rgb(197, 64, 11)"},{"title":"Kurs 5 - Offentlige anskaffelser til det beste","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/6","color":"rgb(197, 64, 11)"},{"title":"Kurs 2 - Portef\u00f8ljestyring","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/3","color":"rgb(197, 64, 11)"},{"title":"Kurs 3 - Digital post","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/4","color":"rgb(197, 64, 11)"},{"title":"Kurs 1 - Prosjektveiviseren","start":"2015-04-05UTC09:30:01","end":"2015-04-05UTC11:15:00","uri":"conferences\/1\/sessions\/2","color":"rgb(197, 64, 11)"},{"title":"Lunsj","start":"2015-04-05UTC11:30:01","end":"2015-04-05UTC12:30:00","uri":"conferences\/1\/sessions\/9","color":"rgb(79, 153, 197);"},{"title":"Workshop 5 - Er den nasjonale beredskapen i Norge god nok til \u00e5 m\u00f8te krise og katastrofe?","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/14","color":"rgb(197, 64, 11)"},{"title":"Workshop 7 - M\u00e5lbilde for offentlig sektor i 2025 ","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/16","color":"rgb(197, 64, 11)"},{"title":"Workshop 8 - Personvern i skolen og barnehagen ","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/17","color":"rgb(197, 64, 11)"},{"title":"Workshop 6 - Finansieringsmuligheter i IKT 2025 og EU sitt Horizon 2020-program","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/15","color":"rgb(197, 64, 11)"},{"title":"Workshop 4 - Hvordan f\u00e5 effekt av virksomhetsarkitektur?","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/13","color":"rgb(197, 64, 11)"},{"title":"Workshop 2 - Informasjonsdeling ","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/11","color":"rgb(197, 64, 11)"},{"title":"Workshop 1 - EDAG - den st\u00f8rste IT-reformen i Norge i 2014\/2015","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/10","color":"rgb(197, 64, 11)"},{"title":"Workshop 3 - Forenkle, forenkle, forenkle - hvor enkelt vil du ha det? ","start":"2015-04-05UTC12:30:01","end":"2015-04-05UTC14:00:00","uri":"conferences\/1\/sessions\/12","color":"rgb(197, 64, 11)"},{"title":"Pause - Spekemat, ost og kjeks","start":"2015-04-05UTC14:00:01","end":"2015-04-05UTC14:15:00","uri":"conferences\/1\/sessions\/18","color":"rgb(61, 197, 91)"},{"title":"Workshop fortsetter","start":"2015-04-05UTC14:15:01","end":"2015-04-05UTC15:45:00","uri":"conferences\/1\/sessions\/19","color":"rgb(197, 89, 179)"},{"title":"Pause - Oppsk\u00e5ret frukt, gr\u00f8nt & dip","start":"2015-04-05UTC15:45:01","end":"2015-04-05UTC16:00:00","uri":"conferences\/1\/sessions\/20","color":"rgb(61, 197, 91)"},{"title":"Workshop fortsetter","start":"2015-04-05UTC16:00:01","end":"2015-04-05UTC17:00:00","uri":"conferences\/1\/sessions\/21","color":"rgb(197, 89, 179)"},{"title":"Slutt","start":"2015-04-05UTC17:00:01","end":"2015-04-05UTC17:00:02","uri":"conferences\/1\/sessions\/22","color":"rgb(61, 197, 91)"},{"title":"Rockheim, Splitter Pine Tapas og Charlotte Audestad","start":"2015-04-05UTC19:00:01","end":"2015-04-05UTC23:00:00","uri":"conferences\/1\/sessions\/23","color":"rgb(79, 153, 197);"},{"title":"Registrering","start":"2015-04-06UTC08:30:01","end":"2015-04-06UTC09:30:00","uri":"conferences\/1\/sessions\/24","color":"rgb(197, 89, 179)"},{"title":"Digital kommunikasjon","start":"2015-04-06UTC09:30:01","end":"2015-04-06UTC11:00:00","uri":"conferences\/1\/sessions\/26","color":"rgb(197, 64, 11)"},{"title":"Halveis til framtiden - digitale trender og impulser","start":"2015-04-06UTC09:30:01","end":"2015-04-06UTC11:00:00","uri":"conferences\/1\/sessions\/25","color":"rgb(197, 64, 11)"},{"title":"Kaffepause. Spekemat, ost og kjeks","start":"2015-04-06UTC11:00:01","end":"2015-04-06UTC11:15:00","uri":"conferences\/1\/sessions\/27","color":"rgb(61, 197, 91)"},{"title":"U5 - Telenor: Velferdsteknologi i praksis","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/32","color":"rgb(197, 64, 11)"},{"title":"U6 - Visma: Hvordan skape innovasjon i din virksomhet?","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/33","color":"rgb(197, 64, 11)"},{"title":"U4 - Capgemini: Kunsten \u00e5 lage verdiskapende, brukersentrerte digitale tjenester","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/31","color":"rgb(197, 64, 11)"},{"title":"U1 - Software Innovation: Skyl\u00f8sninger","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/28","color":"rgb(197, 64, 11)"},{"title":"U2 - EVRY: Mobile trender og l\u00f8sninger for offentlig sektor","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/29","color":"rgb(197, 64, 11)"},{"title":"U3 - Br\u00f8nn\u00f8ysundregistrene: Med Altinn i fremtiden","start":"2015-04-06UTC11:15:01","end":"2015-04-06UTC11:45:00","uri":"conferences\/1\/sessions\/30","color":"rgb(197, 64, 11)"},{"title":"Lunsj","start":"2015-04-06UTC11:45:01","end":"2015-04-06UTC12:00:00","uri":"conferences\/1\/sessions\/38","color":"rgb(79, 153, 197);"},{"title":"U7 - Kantega: Hvordan finne ut mer om brukerne dine enn brukeren selv vet","start":"2015-04-06UTC12:00:01","end":"2015-04-06UTC13:00:00","uri":"conferences\/1\/sessions\/34","color":"rgb(197, 64, 11)"},{"title":"Sesjon 1A Kunsten \u00e5 forenkle \u2013 suksesshistorier","start":"2015-04-06UTC12:00:01","end":"2015-04-06UTC13:00:00","uri":"conferences\/1\/sessions\/35","color":"rgb(197, 64, 11)"},{"title":"Sesjon 1C Sikkerhet og beredskap","start":"2015-04-06UTC12:00:01","end":"2015-04-06UTC13:00:00","uri":"conferences\/1\/sessions\/37","color":"rgb(197, 64, 11)"},{"title":"Sesjon 1B Servicedesign - tjenesteutvikling med brukeren i sentrum","start":"2015-04-06UTC12:00:01","end":"2015-04-06UTC13:00:00","uri":"conferences\/1\/sessions\/36","color":"rgb(197, 64, 11)"},{"title":"Paneldebatt: Ledere i utakt - manglende digital kompetanse?","start":"2015-04-06UTC14:00:01","end":"2015-04-06UTC15:00:00","uri":"conferences\/1\/sessions\/39","color":"rgb(197, 64, 11)"},{"title":"Pause. Frukt, gr\u00f8nt og dip.","start":"2015-04-06UTC15:00:01","end":"2015-04-06UTC15:15:00","uri":"conferences\/1\/sessions\/40","color":"rgb(61, 197, 91)"},{"title":"Sesjon 2A Digital post","start":"2015-04-06UTC15:15:01","end":"2015-04-06UTC16:15:00","uri":"conferences\/1\/sessions\/41","color":"rgb(197, 64, 11)"},{"title":"Sesjon 2C Fra prosjekt til forvaltningv","start":"2015-04-06UTC15:15:01","end":"2015-04-06UTC16:15:00","uri":"conferences\/1\/sessions\/43","color":"rgb(197, 64, 11)"},{"title":"Sesjon 2B Brukersentrerte tjenester p\u00e5 tvers av etatenes siloer","start":"2015-04-06UTC15:15:01","end":"2015-04-06UTC16:15:00","uri":"conferences\/1\/sessions\/42","color":"rgb(197, 64, 11)"},{"title":"Konferansemiddag og Fyrlyktprisen","start":"2015-04-06UTC19:30:01","end":"2015-04-06UTC23:30:00","uri":"conferences\/1\/sessions\/44","color":"rgb(79, 153, 197);"},{"title":"Kaffe","start":"2015-04-07UTC08:30:01","end":"2015-04-07UTC09:00:00","uri":"conferences\/1\/sessions\/45","color":"rgb(61, 197, 91)"},{"title":"Plenum","start":"2015-04-07UTC09:00:01","end":"2015-04-07UTC10:30:00","uri":"conferences\/1\/sessions\/46","color":"rgb(197, 64, 11)"},{"title":"Kaffepause. Spekemat, ost og kjeks.","start":"2015-04-07UTC10:30:01","end":"2015-04-07UTC10:45:00","uri":"conferences\/1\/sessions\/47","color":"rgb(61, 197, 91)"},{"title":"Sesjon 3C - Samarbeid mellom kunde og leverand\u00f8r for \u00e5 skape innovasjon i anskaffelsesprosessen","start":"2015-04-07UTC10:45:01","end":"2015-04-07UTC11:45:00","uri":"conferences\/1\/sessions\/50","color":"rgb(197, 64, 11)"},{"title":"Sesjon 3B - Digitalt f\u00f8rstevalg for alle - er det mulig?","start":"2015-04-07UTC10:45:01","end":"2015-04-07UTC11:45:00","uri":"conferences\/1\/sessions\/49","color":"rgb(197, 64, 11)"},{"title":"Sesjon 3A - Veikart for felleskomponenter","start":"2015-04-07UTC10:45:01","end":"2015-04-07UTC11:45:00","uri":"conferences\/1\/sessions\/48","color":"rgb(197, 64, 11)"},{"title":"Lunsj","start":"2015-04-07UTC11:45:01","end":"2015-04-07UTC12:45:00","uri":"conferences\/1\/sessions\/51","color":"rgb(79, 153, 197);"},{"title":"U11 - Accenture: Hvordan modernisere borgernes og n\u00e6ringslivets interaksjon med det offentlige","start":"2015-04-07UTC12:45:01","end":"2015-04-07UTC13:15:00","uri":"conferences\/1\/sessions\/55","color":"rgb(197, 64, 11)"},{"title":"U10 - EVRY: Glem teknologi \u2013 tenk verdi!","start":"2015-04-07UTC12:45:01","end":"2015-04-07UTC13:15:00","uri":"conferences\/1\/sessions\/54","color":"rgb(197, 64, 11)"},{"title":"U9 - Microsoft: Fornying, forenkling og forbedring med innbyggeren i fokus","start":"2015-04-07UTC12:45:01","end":"2015-04-07UTC13:15:00","uri":"conferences\/1\/sessions\/53","color":"rgb(197, 64, 11)"},{"title":"U8 - Bouvet: Ekte digitalisering handler IKKE om \u00e5 f\u00e5 skjemaer p\u00e5 nett","start":"2015-04-07UTC12:45:01","end":"2015-04-07UTC13:15:00","uri":"conferences\/1\/sessions\/52","color":"rgb(197, 64, 11)"},{"title":"Pause","start":"2015-04-07UTC13:15:01","end":"2015-04-07UTC13:30:00","uri":"conferences\/1\/sessions\/56","color":"rgb(61, 197, 91)"},{"title":"Sesjon 4C - Skytjenester - bruk dem gjerne, men bruk dem riktig!","start":"2015-04-07UTC13:30:01","end":"2015-04-07UTC14:30:00","uri":"conferences\/1\/sessions\/59","color":"rgb(197, 64, 11)"},{"title":"Sesjon 4B - Kommunale fellesl\u00f8sninger: Visjon og virkelighet","start":"2015-04-07UTC13:30:01","end":"2015-04-07UTC14:30:00","uri":"conferences\/1\/sessions\/58","color":"rgb(197, 64, 11)"},{"title":"Sesjon 4A - Digital ledelse","start":"2015-04-07UTC13:30:01","end":"2015-04-07UTC14:30:00","uri":"conferences\/1\/sessions\/57","color":"rgb(197, 64, 11)"},{"title":"Pause. Frukt, gr\u00f8nt og dip.","start":"2015-04-07UTC14:30:01","end":"2015-04-07UTC14:45:00","uri":"conferences\/1\/sessions\/60","color":"rgb(61, 197, 91)"},{"title":"Internasjonalt plenum","start":"2015-04-07UTC14:45:01","end":"2015-04-07UTC15:45:00","uri":"conferences\/1\/sessions\/61","color":"rgb(197, 64, 11)"},{"title":"Vel hjem!","start":"2015-04-07UTC15:45:01","end":"2015-04-07UTC15:46:00","uri":"conferences\/1\/sessions\/62","color":"rgb(61, 197, 91)"}]
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


