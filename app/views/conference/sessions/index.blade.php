@extends('conference.layouts.default')

@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Details about session'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            @include('conference.sessions.partials.session', ['session' => $data['data'], 'schedule_type' => 'session'])

            @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

            @include('conference.sessions.partials.rating', ['status' => $status])

        @endif
</div>
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
    <!-- Expand the details about session when entered and remove the button-->
    <script>
        $(document).ready(function() {
            $("#button-session-more").trigger("click");
            $("#button-session-more").detach();
        });
    </script>
@stop
