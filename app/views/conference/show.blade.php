@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conference') ])
    @include('conference.partials.errors-and-messages')
    @include('conference.partials.page-header', ['text' => 'Conference start page'])
@stop


{{-- This is not currently used. Could be used as a start page for a conference. --}}
