
<div class="row">
    <div class="col-xs-12 forms forms-small">
        <div class="rating-form">
            {{ Form::open(['data-remote', 'id' => 'frm-rating', 'class' => 'remember', 'route' => 'ajax.user.post.rating']) }}
            <div class="form-group">
                {{ Form::label('score', Lang::get('rate.0.form.score-label'), ['class' => 'control-label']) }}

                {{ Form::selectRange(
                    'score',
                    5, 1,
                    null,
                    ['class' => 'form-control']);
                }}
            </div>

            <div class="form-group">
                {{ Form::label('comment', Lang::get('rate.0.form.comment-title'), ['class' => 'control-label']) }}
                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => Lang::get('rate.0.form.comment-placeholder') ]) }}
            </div>

            <div class="form-group">
                {{ Form::submit(Lang::get('rate.0.form.submit'), ['class' => 'btn btn-primary form-control']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

