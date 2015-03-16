@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
        @include('conference.layouts.partials.errors-and-messages')


        @if(isset($data) && !empty($data))
            @include('conference.layouts.partials.page-header', ['text' => 'Browse conferences'])

            @include('conference.partials.conference', ['data' =>  $data])
        @endif
    </div>
    @include('conference.partials.goto-top')
@stop