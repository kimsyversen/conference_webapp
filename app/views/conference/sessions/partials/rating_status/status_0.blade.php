<div class="row header">
    <div class="col-xs-2 col-sm-1 avatar">
        <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </div>
    <div class="col-xs-10 title">
        <h4> Rate this session</h4>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="rating-description description-long">
            <p>Here you can give this session a rating and leave an optinal comment.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">

        {{ Form::open(['data-remote', 'route' => 'ajax.user.post.rating']) }}
        <div class="form-group">
            {{ Form::label('score', 'Rate:', ['class' => 'control-label']) }}

            {{ Form::selectRange(
                'score',
                1, 5,
                null,
                ['class' => 'form-control']);
            }}
        </div>

        <div class="form-group">
            {{ Form::label('comment', 'Comment:', ['class' => 'control-label']) }}
            {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => "Say what's on your mind"]) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>

