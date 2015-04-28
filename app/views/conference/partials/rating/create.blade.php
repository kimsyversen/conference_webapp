@extends('conference.layouts.default')
@section('content')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conference_rating') ])

    @include('conference.partials.errors-and-messages')
    @include('conference.partials.doFirstTimeStuff')

    @include('conference.partials.page-header', ['text' => Lang::get('menu.conference_rating')])


    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="col-xs-12 rating-item">
                @if($status == -1)
                    @include('conference.partials.rating.status.-1')
                @elseif($status == 0)
                    <div class="row">
                        <div class="col-xs-12 forms forms-small">
                            <div class="rating-form">
                                {{ Form::open(array('route' => array('conference_rating_path', Session::get('conference_id')) )) }}
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
                @elseif($status == 1)
                    @include('conference.partials.rating.status.1')
                @elseif($status == 2)
                    @include('conference.partials.rating.status.2')
                @endif
            </div>
        </div>
    </div>
@stop