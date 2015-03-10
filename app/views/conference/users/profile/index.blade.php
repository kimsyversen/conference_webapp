@extends('layouts.default')
@section('content')
    @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('profile') ])
    @include('layouts.partials.errors-and-messages')

    <div class="row">
        <div class="col-md-6">
            <h1>Profile</h1>
            @include('layouts.partials.errors')

        </div>
    </div>
@stop