
<div class="row">
    <div class="col-xs-12 forms forms-small">
        <div class="rating-form">
            {{ Form::open(['data-remote', 'route' => 'ajax.user.post.rating']) }}
            <div class="form-group">
                {{ Form::label('score', 'Give it a score (5 is best):', ['class' => 'control-label']) }}

                {{ Form::selectRange(
                    'score',
                    5, 1,
                    null,
                    ['class' => 'form-control']);
                }}
            </div>

            <div class="form-group">
                {{ Form::label('comment', 'Anything to comment?', ['class' => 'control-label']) }}
                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => "Giving comment is optional."]) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

