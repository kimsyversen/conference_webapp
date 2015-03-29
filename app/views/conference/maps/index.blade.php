
@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
    @stop

    @section('errors-and-messages')
        @include('conference.layouts.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop


    @section('content')
        @include('conference.layouts.partials.page-header', ['text' => 'Maps'])

        @if(isset($data) && !empty($data))
            @foreach($data['data'] as $map)
                @include('conference.maps.partials.map', ['map' => $map])
            @endforeach
        @endif
    @stop













