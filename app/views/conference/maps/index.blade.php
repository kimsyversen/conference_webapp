
@extends('conference.layouts.default')
@section('content')

    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
    @include('conference.layouts.partials.errors-and-messages')


    @include('conference.layouts.partials.page-header', ['text' => 'Maps'])

    @include('conference.partials.doFirstTimeStuff')

    @if(isset($data) && !empty($data))
        @foreach($data['data'] as $map)
            @include('conference.maps.partials.map', ['map' => $map])
        @endforeach
    @endif

@stop













