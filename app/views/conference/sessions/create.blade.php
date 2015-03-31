@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('login') ])
    @stop

    @section('errors-and-messages')
        @include('conference.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop

@section('content')
    @include('conference.partials.page-header', ['text' => 'Sign In'])
    <div class="col-md-3"></div>
    <div class="col-md-6 forms form-small">
        {{ Form::open(['route' => 'login_path', 'method' => 'post']) }}

        <div class="form-group">
            {{ Form::label('username', 'Email:', ['class' => 'control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email ']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password ']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Sign in', ['class' => 'form-control btn btn-primary']) }}
        </div>

        <div class="form-group">
            <p>Need an account? <a href="{{route('register_path') }}"> Register a new account</a></p>
        </div>

        {{ Form::close() }}
    </div>
@stop