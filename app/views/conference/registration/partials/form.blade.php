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