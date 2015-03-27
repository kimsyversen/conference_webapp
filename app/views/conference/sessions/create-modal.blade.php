
@extends('conference.layouts.default-modal')
@section('content')

        @include('conference.layouts.partials.errors-and-messages')

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
            {{ link_to_route('register_path', "Register a new account") }}
        </div>

        {{ Form::close() }}
@stop


