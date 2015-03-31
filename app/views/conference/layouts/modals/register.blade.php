<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register a new account</h4>
            </div>
            <div class="modal-body">
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
                    <p>Do you already have an account? <a href="{{ route('login_path') }}"> Log in</a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{ Form::submit('Sign up', ['class' => 'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>