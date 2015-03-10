@extends('layouts.default')
@section('content')
    <div class="container">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
        @include('layouts.partials.errors-and-messages')

        @unless(Session::has('errors'))
            @include('layouts.partials.page-header', ['text' => 'Browse conferences'])
            <div class='row'>
                @include('conferences.partials.conference-item')
            </div>
        @endunless
    </div>
@stop