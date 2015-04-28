@extends('conference.layouts.default')




@section('breadcrumb')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('schedule') ])
@stop




@section('errors-and-messages')
    @include('conference.partials.errors-and-messages')
@stop

@section('first-time-stuff')
    @include('conference.partials.doFirstTimeStuff')
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <div class="col-xs-12 ">
                @if($status == -1)
                    @include('conference.partials.rating.status.-1')
                @elseif($status == 0)
                    @include('conference.partials.rating.status.0')
                @elseif($status == 1)
                    @include('conference.partials.rating.status.1')
                @elseif($status == 2)
                    @include('conference.partials.rating.status.2')
                @endif
            </div>
        </div>
    </div>

    @include('conference.partials.page-header', ['text' => Lang::get('menu.schedule')])


    @if(isset($data['data']))
        @if(!empty($data))

            @include('conference.events.eventGroup', ['sessionGroup' => $data['data'], 'schedule_type' => 'conference'])
        @else
            <p class="lead"> {{ Lang::get('schedule.empty') }}</p>
        @endif
    @endif
@stop