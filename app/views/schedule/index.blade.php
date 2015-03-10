@extends('layouts.default')
@section('content')
    <div class="container ">
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
        @include('layouts.partials.errors-and-messages')

        <div class="row text-center">
            @include('layouts.partials.page-header', ['text' => 'Schedule'])
        </div>

        @unless(Session::has('errors'))
            <div class='row'>
                @foreach($data['data'] as $sessionGroup)
                    <div class="row session-information">

                        <div class="col-md-3"></div>
                        <div class="col-md-6 text-center">
                            <h4>Sessions starting from  {{ ConferenceHelper::formatTimestamp($sessionGroup['start_date']['date'],'H:i')  }} </h4>
                        </div>

                    </div>
                    @foreach($sessionGroup['sessions'] as $session)
                        <div class="row">
                            <div class="col-md-1"></div>

                            <div class="col-md-10 session-item ">
                                <div class="row header">
                                    <div class="col-xs-2 col-sm-1 avatar">
                                        <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-xs-10 title">
                                        <h4> <a href="#" rel="self">{{ $session['title'] }}</a></h4>
                                    </div>
                                </div>

                                <h4>  {{ ConferenceHelper::timestampToBeingEnds($sessionGroup['start_date']['date'], $sessionGroup['end_date']['date'], 'H:i')  }} </h4>
                                <div class="row description-short">
                                    <div class="col-xs-12">


                                        {{ ConferenceHelper::getShortDescription($session['description'], 1) }}
                                    </div>
                                </div>

                                <div class="row description-long hidden">
                                    <div class="col-xs-12">
                                      {{   $session['description'] }}
                                    </div>

                                </div>

                                <div class="row buttons ">
                                    <div class="col-xs-6 nopadding">
                                        <button class='btn button with-border button-schedule' id="button">
                                            <span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            <span class="button-text">Add to schedule</span></button>
                                    </div>
                                    <div class="col-xs-6 nopadding">
                                        <button class='btn button button-more' id="button"> <span class="glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            <span class="button-text">Read more </span>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1"></div>
                        </div>
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