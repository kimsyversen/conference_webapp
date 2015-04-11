@extends('conference.layouts.default')
@section('content')

    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('about') ])
    @include('conference.partials.errors-and-messages')

    @include('conference.partials.page-header', ['text' => Lang::get('about.title')])

    <div class="container">
        <div class="row row-center">
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8 about-the-application" style="margin-top:2em;">


                <p>{{ Lang::get('about.text_first') }}</p>

                <ul style="list-style-type: bullet; margin-left: 2em;">
                    <li>{{ Lang::get('about.list.1') }}</li>
                    <li>{{ Lang::get('about.list.2') }}</li>
                    <li>{{ Lang::get('about.list.3') }}</li>
                    <li>{{ Lang::get('about.list.4') }}</li>
                    <li>{{ Lang::get('about.list.5') }}</li>
                </ul>

                <p>{{ Lang::get('about.text_last') }}  </p>

            </div>
        </div>
    </div>
@stop






