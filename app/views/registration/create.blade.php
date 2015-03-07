@extends('layouts.default')

@section('content')
    @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('registration') ])
    @include('layouts.partials.errors-and-messages')

    @include('layouts.partials.page-header', ['text' => 'Create account'])
        <div class="col-xs-12 conference-form">

            {{ Form::open(['route' => 'registration_path', 'method' => 'post']) }}

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

@stop