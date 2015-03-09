@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('layouts.partials.errors-and-messages')

        <div class="row text-center">
            @include('layouts.partials.page-header', ['text' => 'Schedule'])
        </div>

        <div class='row'>

            @foreach($data['data'] as $session)

                <div class="row session-information">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <h4>{{ ConferenceHelper::timestampToBeingEnds($session['begins'], $session['ends'] )  }} </h4>
                       <span class="glyphicon glyphicon glyphicon glyphicon-map-marker location" aria-hidden="true"></span> <a href="#" rel="self">{{ $session['location'] }}</a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class="col-md-10 session-item ">
                        <div class="header">
                            <div class="avatar">
                                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </div>
                            <div class="title">
                               <h4> <a href="#" rel="self">{{ $session['title'] }}</a></h4>
                        </div>

                        <div class="description">
                            {{ $session['description'] }}
                        </div>

                        <div class="row">
                            <button class='btn button form-control' id="button">
                                <span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span> Add to my schedule
                            </button>
                        </div>

                        </div>
                </div>
                <div class="col-md-1"></div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center "><a href="#top">To top of the page</a></div>
            <div class="col-md-1"></div>
        </div>
    </div>
@stop