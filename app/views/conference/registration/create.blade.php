@extends('conference.layouts.default')

@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('registration') ])
    @include('conference.layouts.partials.errors-and-messages')

    @include('conference.layouts.partials.page-header', ['text' => 'Create account'])
    <div class="col-md-1"></div>
    <div class="col-md-10 forms">

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