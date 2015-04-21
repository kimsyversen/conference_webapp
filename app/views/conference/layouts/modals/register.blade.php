<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerModalTitle">{{ Lang::get('forms.sign-up.title')  }}</h4>
            </div>
            {{ Form::open(['route' => 'registration_path', 'method' => 'post']) }}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('email', Lang::get('forms.email'), ['class' => 'control-label']) }}
                        {{ Form::text('email', null, ['required', 'class' => 'form-control', 'placeholder' => Lang::get('forms.email'), 'required' => 'required' ]) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', Lang::get('forms.password'), ['class' => 'control-label']) }}
                        {{ Form::password('password', ['required', 'class' => 'form-control', 'placeholder' => Lang::get('forms.password'), 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_confirmation', Lang::get('forms.password_confirmation'), ['class' => 'control-label']) }}
                        {{ Form::password('password_confirmation', ['required', 'class' => 'form-control',  'placeholder' => Lang::get('forms.password_confirmation'), 'required' => 'required']) }}
                    </div>

                    <div class="form-group">
                        <p>{{ Lang::get('forms.sign-up.message')  }} <a href="{{ route('login_path') }}"> {{ Lang::get('forms.sign-up.message_link')  }}</a></p>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{Lang::get('forms.close')  }}</button>
                    {{ Form::submit(Lang::get('forms.sign-up.button_send'), ['class' => 'btn btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>