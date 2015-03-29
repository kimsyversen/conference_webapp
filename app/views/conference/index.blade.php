@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.layouts.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @if(isset($data))
        @if(!empty($data))
            @include('conference.layouts.partials.page-header', ['text' => 'Browse conferences'])
            @include('conference.partials.conference', ['data' =>  $data])
        @else
            <p class="lead">There are currently no conferences here.</p>
        @endif
    @endif
@stop
