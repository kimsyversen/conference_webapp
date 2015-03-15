@extends('conference.layouts.default')
@section('content')
    <div class="container ">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('conference.layouts.partials.errors-and-messages')


        @include('conference.layouts.partials.page-header', ['text' => 'Schedule'])


        @unless(Session::has('errors'))
            @include('conference.sessions.partials.session_group', ['sessionGroup' => $data['data']])
        @endunless
    </div>
    @include('conference.partials.goto-top')
@stop





