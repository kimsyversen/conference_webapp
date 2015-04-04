
@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('registration') ])
    @stop

    @section('errors-and-messages')
        @include('conference.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop

    @section('content')
        @include('conference.partials.page-header', ['text' => Lang::get('forms.sign-up.title')])

        <div class="col-md-3"></div>
        <div class="col-md-6 forms form-small">
                {{ Form::open(['route' => 'registration_path', 'method' => 'post']) }}

                <div class="form-group">
                    {{ Form::label('email', Lang::get('forms.email'), ['class' => 'control-label']) }}
                    {{ Form::text('email', null, ['required', 'class' => 'form-control', 'placeholder' => Lang::get('forms.email')]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', Lang::get('forms.password'), ['class' => 'control-label']) }}
                    {{ Form::password('password', ['required', 'class' => 'form-control', 'placeholder' => Lang::get('forms.password')]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password_confirmation', Lang::get('forms.password_confirmation'), ['class' => 'control-label']) }}
                    {{ Form::password('password_confirmation', ['required', 'class' => 'form-control',  'placeholder' => Lang::get('forms.password_confirmation')]) }}
                </div>

                <div class="form-group">
                    <p>{{ Lang::get('forms.sign-up.message')  }} <a href="{{ route('login_path') }}"> {{ Lang::get('forms.sign-up.message_link')  }}</a></p>
                </div>

                <div class="form-group">
                    {{ Form::submit(Lang::get('forms.sign-up.button_send'), ['class' => 'form-control btn btn-primary']) }}
                </div>
                {{ Form::close() }}
        </div>
    @stop