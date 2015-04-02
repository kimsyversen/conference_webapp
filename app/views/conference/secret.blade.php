@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.alerts.danger')
    @include('conference.partials.alerts.info')
    @include('conference.partials.alerts.success')
    @include('conference.partials.alerts.warning')
    @include('conference.partials.alerts.firstvisit')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <i class="fa fa-github"></i>
                <i class="fa fa-beer fa-lg"></i>
            </div>
        </div>
    </div>

@stop
