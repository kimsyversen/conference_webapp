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


        <div class="user-must-be-authenticated hidden">
            @include('conference.sessions.partials.rating', ['status' => -1])
        </div>
        <div class="user-can-rate hidden">
            @include('conference.sessions.partials.rating', ['status' => 0])
        </div>
        <div class="session-does-not-belong-to-conference hidden">
            @include('conference.sessions.partials.rating', ['status' => 1])
        </div>
        <div class="user-session-must-end hidden">
            @include('conference.sessions.partials.rating', ['status' => 2])
        </div>
        <div class="user-already-rated hidden">
            @include('conference.sessions.partials.rating', ['status' => 3])
        </div>
    @endunless

    @include('conference.partials.goto-top')
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
@stop


