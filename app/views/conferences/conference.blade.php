@extends('layouts.default')
@section('content')
    @include('layouts.partials.errors')
    <div class="row">
         <div class="well">
             <h1> {{$response['name']}} </h1>
         </div>

    </div>
@stop