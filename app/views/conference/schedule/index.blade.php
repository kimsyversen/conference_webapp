@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('layouts.partials.errors-and-messages')

        <!-- Heading -->
        <div class="row text-center">
            @include('layouts.partials.page-header', ['text' => 'Schedule'])
        </div>

        @unless(Session::has('errors'))
            <div class='row'>
                <!-- Parse each group-->
                @foreach($data['data'] as $sessionGroup)
                    @include('conference.sessions.partials.session-delimiter', ['sessionGroup' => $sessionGroup])

                    <!-- A session element -->
                    @foreach($sessionGroup['sessions'] as $session)
                        @include('conference.sessions.partials.session', ['session' => $session])
                    @endforeach

                @endforeach
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center "><a href="#top">To top of the page</a></div>
                <div class="col-md-1"></div>
            </div>
    @endunless
    </div>
@stop