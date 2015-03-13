@extends('conference.layouts.default')
@section('content')
    <div class="container ">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('personal_schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        <!-- Heading -->
        @include('conference.layouts.partials.page-header', ['text' => 'Personal schedule'])

        @unless(Session::has('errors'))
            @include('conference.sessions.partials.session_group', ['sessionGroup' => $data['data']])
        @endunless
    </div>
@stop