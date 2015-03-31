
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> {{ Lang::get('forms.sign-in.title') }}</h4>
            </div>
            <div class="modal-body">
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
                    <p>{{ Lang::get('forms.sign-in.message')  }} <a href="{{route('register_path') }}"> {{ Lang::get('forms.sign-in.message_link')  }}</a></p>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> {{ Lang::get('forms.close') }}</button>
                {{ Form::submit(Lang::get('forms.sign-in.button_send'), ['class' => 'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>


