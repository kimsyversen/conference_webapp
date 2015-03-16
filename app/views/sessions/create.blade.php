@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('login') ])
    @include('conference.layouts.partials.errors-and-messages')
    @include('conference.layouts.partials.page-header', ['text' => 'Sign In'])


    <div class="col-xs-12 forms " >
        {{ Form::open(['route' => 'login_path', 'method' => 'post']) }}

        <div class="form-group">
            {{ Form::label('username', 'Email:', ['class' => 'control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Sign in', ['class' => 'form-control btn btn-primary']) }}
        </div>

        {{ Form::close() }}
    </div>

@stop