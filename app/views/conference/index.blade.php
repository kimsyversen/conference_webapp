@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
        @include('conference.layouts.partials.errors-and-messages')

        @unless(Session::has('errors'))
            @include('conference.layouts.partials.page-header', ['text' => 'Browse conferences'])
            <div class='row'>
                @include('conference.partials.conference-item')
            </div>
        @endunless
    </div>
@stop