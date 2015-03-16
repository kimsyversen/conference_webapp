@extends('conference.layouts.default')
@section('content')
    <div class="container ">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('conference.layouts.partials.page-header', ['text' => 'Personal schedule'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.sessions.partials.session_group', ['sessionGroup' => $data['data']])
        @endif
    </div>
@stop