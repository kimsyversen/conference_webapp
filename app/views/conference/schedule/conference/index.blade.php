@extends('conference.layouts.default2')
@section('content')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('conference.layouts.partials.errors-and-messages')
        @include('conference.partials.doFirstTimeStuff')

        @include('conference.layouts.partials.page-header', ['text' => 'Conference schedule'])

        @if(isset($data['data']))
            @if(!empty($data))
                @include('conference.events.eventGroup', ['sessionGroup' => $data['data'], 'schedule_type' => 'conference'])
            @else
                <p class="lead">There are currently no conferences here.</p>
            @endif
        @endif
@stop





