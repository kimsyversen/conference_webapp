@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('survey') ])

    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.page-header', ['text' => Lang::get('survey.menu_text')])

    <div class="container">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 text-center">
                <p style="font-size:1.1em;"><span class="glyphicon glyphicon-info-sign"></span> {{ Lang::get('survey.first') }}
                    <a href="{{ Lang::get('survey.first_link') }}" target="_blank"> {{ Lang::get('survey.first_link_text') }}</a>.
                    {{ Lang::get('survey.second')}}
                    <a href="{{ Lang::get('survey.second_link') }}" target="_blank"> {{ Lang::get('survey.second_link_text') }}</a>.

                    {{ Lang::get('survey.thanks') }}
                </p>
            </div>
        </div>
    </div>

@stop