@extends('conference.layouts.default')
@section('content')

    @include('conference.partials.errors-and-messages')

    <div class="container">
        <div class="col-xs-12 text-center">
            <h1>{{ Lang::get('404.title') }}</h1>

            <p>{{ Lang::get('404.message') }}</p>

            <h3><a href="{{ route('home_path') }}"> {{ Lang::get('404.text') }}</a></h3>
        </div>
    </div>
@stop