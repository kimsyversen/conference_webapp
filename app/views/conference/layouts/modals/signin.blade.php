
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign in to your account</h4>
            </div>
            <div class="modal-body">
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
                    {{ link_to_route('register_path', "Register a new account") }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{ Form::submit('Sign in', ['class' => ' btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
