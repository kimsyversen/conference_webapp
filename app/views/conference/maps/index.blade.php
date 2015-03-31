
@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
    @stop

    @section('errors-and-messages')
        @include('conference.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop


    @section('content')
        @include('conference.partials.page-header', ['text' => Lang::get('menu.maps')])

        @if(isset($data) && !empty($data))
            @foreach($data['data'] as $map)
                @include('conference.maps.partials.map', ['map' => $map])
            @endforeach
        @endif
    @stop













