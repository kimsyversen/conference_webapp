@extends('conference.layouts.default')

@section('breadcrumb')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
@stop

@section('errors-and-messages')
    @include('conference.partials.errors-and-messages')
@stop

@section('first-time-stuff')
    @include('conference.partials.doFirstTimeStuff')
@stop

@section('content')
    @include('conference.partials.page-header', ['text' => 'Conference schedule'])

    @if(isset($data['data']))
        @if(!empty($data))
            @include('conference.events.eventGroup', ['sessionGroup' => $data['data'], 'schedule_type' => 'conference'])
        @else
            <p class="lead">There are currently no conferences here.</p>
        @endif
    @endif
@stop





