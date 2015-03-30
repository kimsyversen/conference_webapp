@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('profile') ])
    @include('conference.partials.errors-and-messages')

    <div class="row">
        <div class="col-md-6">
            <h1>Profile</h1>
            @include('conference.partials.errors')
        </div>
    </div>
@stop