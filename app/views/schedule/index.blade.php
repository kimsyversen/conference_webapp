@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('layouts.partials.errors-and-messages')
        @include('layouts.partials.page-header', ['text' => 'Schedule'])

        <div class='row'>
            @foreach($data['data'] as $session)
                <div class="row session-information">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <h4> {{ ConferenceHelper::timestampToBeingEnds($session['begins'], $session['ends'] )  }} </h4>
                        <span class="glyphicon glyphicon glyphicon glyphicon-map-marker location" aria-hidden="true"> {{ $session['location'] }}</span>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 session-item ">

                        <div class="header">

                            <div class="time">


                            </div>

                            <div class="avatar">
                                <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </div>
                            <div class="title">
                               <h4> <a href="#" rel="self">{{ $session['title'] }}</a></h4>
                            </div>

                            <div class="description">
                                {{ $session['description'] }}


                            </div>

                        </div>
                    </div>

                </div>



            @endforeach
        </div>
    </div>
@stop