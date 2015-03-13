@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('profile') ])
    @include('conference.layouts.partials.errors-and-messages')

    <div class="row">
        <div class="col-md-6">
            <h1>Profile</h1>
            @include('conference.layouts.partials.errors')

        </div>
    </div>
@stop