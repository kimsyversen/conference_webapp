@extends('layouts.default')
    @section('content')
        <div class="row">
                <h1>All conferences</h1>
                @include('conferences.partials.conference')
        </div>
@stop