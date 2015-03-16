@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('newsfeed') ])
        @include('conference.layouts.partials.errors-and-messages')
        @include('conference.layouts.partials.page-header', ['text' => 'Newsfeed'])
        @if(isset($data) && !empty($data))
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @foreach($data['data'] as $post)
                        <div class="message">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="glyph">
                                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                            </div>
                                            <div class="title">
                                                <h3 class="panel-title"> {{ $post['title'] }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="time">
                                                {{ ConferenceHelper::timeStampToHuman($post['created_at']) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="body">
                                                {{ $post['body'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    @include('conference.partials.goto-top')
@stop