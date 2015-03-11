@extends('layouts.default')
@section('content')
    @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('rating') ])

    @include('layouts.partials.errors-and-messages')

    @include('layouts.partials.page-header', ['text' => 'Rate session'])

    @include('conference.rating.partials.rating')






@stop

