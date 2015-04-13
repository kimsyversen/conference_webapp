@extends('conference.layouts.default')


@section('breadcrumb')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])
@stop

@section('errors-and-messages')
    @include('conference.partials.errors-and-messages')
@stop

@section('content')
    @include('conference.partials.page-header', ['text' => Lang::get('event.show.heading')])


    @if(isset($data['data']) && !empty($data['data']))

        @if(($data['data']['confirmed']) == 0)
            @include('conference.partials.notice', ['text' => Lang::get('event.show.cancelled')])
        @else
            @include('conference.partials.delimiter', ['text' => Lang::get('event.show.delimiter'), 'value' => ''])

            @include('conference.events.event', ['session' => $data['data'], 'schedule_type' => 'conference'])

            @if(isset($data['data']['speakers']))
                @include('conference.partials.delimiter', ['text' => Lang::get('event.show.speakers'), 'value' => ''])
                @include('conference.events.partials.speakers', ['speakers' => $data['data']['speakers']])
            @endif

            @include('conference.partials.delimiter', ['text' => Lang::get('event.show.rate-heading'), 'value' => ''])

            @include('conference.events.partials.rating.rating', ['status' => $status])
        @endif
    @endif
@stop

@section('javascript')
    @parent
    <!-- Expand the details about session when entered and remove the button-->
    <script>
      $(document).ready(function() {
            $(".button-more").trigger("click");
        });
    </script>
@stop
