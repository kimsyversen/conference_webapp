
@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('registration') ])
    @stop

    @section('errors-and-messages')
        @include('conference.layouts.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop

    @section('content')
        @include('conference.layouts.partials.page-header', ['text' => 'Create account'])
        <div class="col-md-3"></div>
        <div class="col-md-6 forms form-small">

                {{ Form::open(['route' => 'registration_path', 'method' => 'post']) }}

                <div class="form-group">
                    {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                    {{ Form::text('email', null, ['required', 'class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                    {{ Form::password('password', ['required', 'class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password confirmation:', ['class' => 'control-label']) }}
                    {{ Form::password('password_confirmation', ['required', 'class' => 'form-control',  'placeholder' => 'Confirm the password']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Sign up', ['class' => 'form-control btn btn-primary']) }}
                </div>
                {{ Form::close() }}
            </div>
    @stop