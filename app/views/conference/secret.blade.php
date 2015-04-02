@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.alerts.danger')
    @include('conference.partials.alerts.info')
    @include('conference.partials.alerts.success')
    @include('conference.partials.alerts.warning')
    @include('conference.partials.alerts.firstvisit')

@stop
