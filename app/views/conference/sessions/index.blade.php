@extends('conference.layouts.default')

@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('conference.layouts.partials.errors-and-messages')

        @include('conference.layouts.partials.page-header', ['text' => 'Details about session'])

        @if(isset($data['data']) && !empty($data['data']))
            @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            @include('conference.sessions.partials.session', ['session' => $data['data']])

            @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

            @include('conference.sessions.partials.rating', ['status' => $status])

        @endif

        @include('conference.partials.goto-top')
</div>
@stop

@section('javascript')
    @parent
    {{ HTML::script('js/ratings/ratings.js') }}
    <script>
        $(document).ready(function() {
            $(".button-more").trigger("click");
        });
    </script>
@stop
