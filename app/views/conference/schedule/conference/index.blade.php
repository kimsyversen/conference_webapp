@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Schedule'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.sessions.partials.group', ['sessionGroup' => $data['data'], 'schedule_type' => 'conference'])

        @endif
    </div>
    @include('conference.partials.goto-top')
@stop





