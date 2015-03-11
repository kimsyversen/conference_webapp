@extends('layouts.default')
    @section('content')
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conference') ])
        @include('layouts.partials.errors-and-messages')
        @include('layouts.partials.page-header', ['text' => 'Conference start page'])

@stop