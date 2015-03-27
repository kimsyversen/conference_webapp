@extends('conference.layouts.default')

@section('content')

        @include('conference.layouts.components.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Details about event'])


        @if(isset($data['data']) && !empty($data['data']))

            @if(($data['data']['confirmed']) == 0)
                @include('conference.components.notice', ['text' => 'Event is cancelled'])
            @else
                @include('conference.layouts.partials.delimiter', ['text' => 'Event information', 'value' => ''])

                @include('conference.sessions.partials.session', ['session' => $data['data'], 'schedule_type' => 'conference'])

                @include('conference.layouts.partials.delimiter', ['text' => 'Say what you think about this event', 'value' => ''])

                @include('conference.sessions.partials.rating', ['status' => $status])
            @endif
        @endif
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
    <!-- Expand the details about session when entered and remove the button-->
    <script>
        $(document).ready(function() {
            $("#button-session-more").trigger("click");
        });
    </script>
@stop
