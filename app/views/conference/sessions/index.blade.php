@extends('layouts.default')

@section('content')
    @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

    @include('layouts.partials.errors-and-messages')

    @include('layouts.partials.page-header', ['text' => 'Details about session'])

    @unless(Session::has('errors'))
        @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

        @include('conference.sessions.partials.session', ['session' => $data['data']])

        @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

        <a href="#" id="initialize-rating"></a>


        {{-- When AJAX html binding works as expected, this can be removed and ratings.js can bind data to a div here --}}
        <div class="row">
            <!-- Push one column to left -->
            <div class="col-md-1"></div>
            <div class="col-md-10 session-item ">

            <div class="status--1 hidden">
                @include('conference.sessions.partials.rating_status.status_-1')
            </div>
            <div class="status-0 hidden">
                @include('conference.sessions.partials.rating_status.status_0')
            </div>
            <div class="status-1 hidden">
                @include('conference.sessions.partials.rating_status.status_1')
            </div>
            <div class="status-2 hidden">
                @include('conference.sessions.partials.rating_status.status_2')
            </div>
            <div class="status-3 hidden">
                @include('conference.sessions.partials.rating_status.status_3')
            </div>
        </div>
        </div>
    @endunless

    @include('conference.partials.goto-top')

@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
@stop