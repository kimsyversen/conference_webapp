@extends('conference.layouts.default')

@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

    @include('conference.layouts.partials.errors-and-messages')

    @include('conference.layouts.partials.page-header', ['text' => 'Details about session'])

    @unless(Session::has('errors'))
        @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

        @include('conference.sessions.partials.session', ['session' => $data['data']])

        @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

        @include('conference.sessions.partials.rating', ['status' => $status])

    @endunless

    @include('conference.partials.goto-top')

@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
@stop
