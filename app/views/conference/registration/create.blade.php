
@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('registration') ])
    @stop

    @section('errors-and-messages')
        @include('conference.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop

    @section('content')
        @include('conference.partials.page-header', ['text' => Lang::get('forms.sign-up.title')])

        <div class="col-md-3"></div>
        <div class="col-md-6 forms form-small">
            @include('conference.registration.partials.form')
        </div>
    @stop