@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('conference.layouts.partials.errors-and-messages')

        @unless(Session::has('errors'))
            @include('conference.layouts.partials.page-header', ['text' => 'Schedule'])
            @include('conference.sessions.partials.session_group', ['sessionGroup' => $data['data']])
        @endunless
    </div>
    @include('conference.partials.goto-top')
@stop





