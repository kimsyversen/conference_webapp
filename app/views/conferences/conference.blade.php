@extends('layouts.default')
    @section('content')
        <div class="row">
            <h1>Conference start page</h1>
            @if(isset($data))
                 <div class="well">
                     <p>Name: {{ $data['name'] }}</p>
                     <p>Begins: {{ $data['begins'] }}</p>
                     <p>Ends: {{ $data['ends'] }}</p>
                 </div>
            @endif
        </div>
@stop