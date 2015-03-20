@extends('conference.layouts.default')
@section('content')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Schedule'])
        @if(isset($data['data']))
            @if(!empty($data))
                @include('conference.sessions.partials.group', ['sessionGroup' => $data['data'], 'schedule_type' => 'conference'])
            @else
                <p class="lead">There are currently no conferences here.</p>
            @endif
        @endif
@stop





