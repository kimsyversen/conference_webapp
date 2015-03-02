@extends('layouts.default')
@section('content')

    <div class="row">
		<div class="col-md-6">
			<h1>Sign In!</h1>

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
				{{ link_to('password/remind', 'Reset password') }}
			</div>

			{{ Form::close() }}
		</div>
	</div>
@stop