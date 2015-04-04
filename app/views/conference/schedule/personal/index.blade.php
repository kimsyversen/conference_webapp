
@extends('conference.layouts.default')
@section('breadcrumb')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
@stop

@section('errors-and-messages')
    @include('conference.partials.errors-and-messages')
@stop

@section('first-time-stuff')
    @include('conference.partials.doFirstTimeStuff')
@stop

@section('content')
    @include('conference.partials.page-header', ['text' => Lang::get('menu.personal_schedule')])

    @if(isset($data['data']))
        @if(!empty($data['data']))
            @include('conference.events.eventGroup', ['sessionGroup' => $data['data'], 'schedule_type' => 'personal'])
        @else
            <p class="lead text-center">Your schedule is empty.</p>
        @endif
    @endif
@stop

<script>
    $(document).ready(function() {
        $("#button-session-more").trigger("click");
    });
</script>
