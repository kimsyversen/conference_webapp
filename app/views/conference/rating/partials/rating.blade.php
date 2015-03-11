<div class="row">
    <!-- Push one column to left -->
    <div class="col-md-1"></div>

    <div class="col-md-10 session-item ">
        @if($data['rateable'] == true)
            <div class="conference-form">
                {{ Form::open(['data-remote']) }}
                <div class="form-group">
                    {{ Form::label('value', 'Rate:', ['class' => 'control-label']) }}

                    {{ Form::selectRange(
                        'value',
                        0, 5,
                        null,
                        ['class' => 'form-control']);
                    }}
                </div>

                <div class="form-group">
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 3]) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('submit', ['class' => 'btn btn-primary form-control']) }}
                </div>
                {{ Form::close() }}
            </div>
            @else
                <p>You have already rated this session</p>
        @endif
    </div>
</div>
