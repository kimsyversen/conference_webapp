@extends('conference.layouts.default')
@section('content')

        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('conference.layouts.partials.page-header', ['text' => 'Personal schedule'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.sessions.partials.group', ['sessionGroup' => $data['data'], 'schedule_type' => 'personal'])
        @endif

@stop