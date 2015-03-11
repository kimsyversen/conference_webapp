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

        <div class="user-can-rate hidden">
            @include('conference.sessions.partials.rating', ['rateable' => true])
        </div>
        <div class="user-not-rate hidden">
            @include('conference.sessions.partials.rating', ['rateable' => false])
        </div>
    @endunless

    @include('conference.partials.goto-top')
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
@stop



