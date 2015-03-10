@extends('layouts.default')
@section('content')
    @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])
    @include('layouts.partials.errors-and-messages')
    @include('layouts.partials.page-header', ['text' => 'Session'])


    @include('conference.sessions.partials.session', ['session' => $data['data']])


@stop