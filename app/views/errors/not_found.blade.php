@extends('layouts.default')
@section('content')

    @include('layouts.partials.errors-and-messages')

    <div class="container">
        <div class="col-xs-12 text-center">
            <h1>404 - Not found</h1>

            <p>Sorry, this page did not exist.</p>

            <h3><a href="{{ route('home_path') }}">Go home</h3>
        </div>
    </div>
@stop