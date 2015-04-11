@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('guidelines') ])

    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.page-header', ['text' => Lang::get('guidelines.title')])

    <div class="container item-push">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 text-center">
                <p class="lead">{{ Lang::get('guidelines.p') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-9">
                <ul class="guidelines-list">
                    <li><i class="glyphicon glyphicon glyphicon-arrow-right"></i> {{ Lang::get('guidelines.list.1') }} </li>
                    <li><i class="glyphicon glyphicon glyphicon-arrow-right"></i> {{ Lang::get('guidelines.list.2') }}</li>
                    <li><i class="glyphicon glyphicon glyphicon-arrow-right"></i> {{ Lang::get('guidelines.list.3') }}</li>
                    <li><i class="glyphicon glyphicon glyphicon-arrow-right"></i> {{ Lang::get('guidelines.list.4') }}</li>
                </ul>
            </div>
        </div>
    </div>
@stop