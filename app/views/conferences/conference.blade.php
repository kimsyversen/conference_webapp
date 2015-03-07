@extends('layouts.default')
    @section('content')
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conference') ])
        @include('layouts.partials.errors-and-messages')
        @include('layouts.partials.page-header', ['text' => 'Conference start page'])

        @if(isset($data))
            <div class="row">
                 <div class='col-xs-12 conference-well'>
                     <p>Name: {{ $data['name'] }}</p>
                     <p>Begins: {{ $data['begins'] }}</p>
                     <p>Ends: {{ $data['ends'] }}</p>
                </div>
            </div>
        @endif
@stop