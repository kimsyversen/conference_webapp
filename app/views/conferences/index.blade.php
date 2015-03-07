@extends('layouts.default')
@section('content')
<div class="container">
    <div class='row'>
        <div class='col-xs-12'>
            <h2>Browse conferences</h2>
        </div>
    </div>
    <div class='row'>
        @include('conferences.partials.conference-item')
    </div>
</div>
@stop