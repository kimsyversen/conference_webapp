
@extends('layouts.default')
@section('content')
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('layouts.partials.errors-and-messages')

        @include('layouts.partials.page-header', ['text' => 'Details about session'])

        @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

        @include('conference.sessions.partials.session', ['session' => $data['data']])

        @include('conference.partials.delimiter', ['text' => 'Give a rating', 'value' => ''])


@stop




