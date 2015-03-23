@extends('conference.layouts.default')

@section('content')

        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Details about session'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.layouts.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            @include('conference.sessions.partials.session', ['session' => $data['data'], 'schedule_type' => 'conference'])

            @include('conference.layouts.partials.delimiter', ['text' => 'Say what you think about this session', 'value' => ''])

            @include('conference.sessions.partials.rating', ['status' => $status])

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
