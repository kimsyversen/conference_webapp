@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register</h1>

            {{ Form::open(['route' => 'register_path', 'method' => 'post']) }}

            <div class="form-group">
                {{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password confirmation:', ['class' => 'control-label']) }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Sign up', ['class' => 'form-control btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@stop