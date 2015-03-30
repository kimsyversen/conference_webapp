@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

{{--    @include('conference.partials.alerts.danger')
    @include('conference.partials.alerts.info')
    @include('conference.partials.alerts.success')
    @include('conference.partials.alerts.warning')--}}

    @if(isset($data))
        @if(!empty($data))
            @include('conference.partials.page-header', ['text' => 'Browse conferences'])
            @include('conference.partials.conference', ['data' =>  $data])
        @else
            <p class="lead">There are currently no conferences here.</p>
        @endif
    @endif
@stop
