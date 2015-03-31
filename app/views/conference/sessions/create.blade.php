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
    @include('conference.partials.page-header', ['text' => Lang::get('forms.sign-in.title')])
    <div class="col-md-3"></div>
    <div class="col-md-6 forms form-small">
        {{ Form::open(['route' => 'login_path', 'method' => 'post']) }}

        <div class="form-group">
            {{ Form::label('username', Lang::get('forms.email'), ['class' => 'control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => Lang::get('forms.email') ] ) }}
        </div>

        <div class="form-group">
            {{ Form::label('password', Lang::get('forms.password'), ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => Lang::get('forms.password')] ) }}
        </div>

        <div class="form-group">
            {{ Form::submit(Lang::get('forms.sign-in.button_send'), ['class' => 'form-control btn btn-primary']) }}
        </div>

        <div class="form-group">
            <p>{{ Lang::get('forms.sign-in.message')  }} <a href="{{route('register_path') }}"> {{ Lang::get('forms.sign-in.message_link')  }}</a></p>
        </div>

        {{ Form::close() }}
    </div>
@stop