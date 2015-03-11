@extends('layouts.default')

@section('content')
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('layouts.partials.errors-and-messages')

        @include('layouts.partials.page-header', ['text' => 'Details about session'])

        <div>
            <a href="#" id="initialize-rating">

            </a>
        </div>

        @unless(Session::has('errors'))
            @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            @include('conference.sessions.partials.session', ['session' => $data['data']])

            @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

            <div class="user-can-rate hidden">
                @include('conference.sessions.partials.rating', ['rateable' => true])
            </div>
            <div class="user-not-rate hidden">
                @include('conference.sessions.partials.rating', ['rateable' => false])
            </div>

        @endunless
@stop

@section('javascript')
    <script>
        $(document).ready(function(){

            $('#initialize-rating').click(function(e){
                e.preventDefault();
                var conferenceId = " {{ Session::get('conference_id') }}";
                var sessionId = " {{ Session::get('session_id') }}";

                $.get('/conferences/" + conferenceId  +  " /sessions/" +  sessionId+ "/rate', function(data)
                {
                    determineRateElement(data['data']['rateable']);
                });
            });

            $('#initialize-rating').click();
        });

        function determineRateElement(rateable) {
            if(rateable === true)
            {
                $(".user-can-rate").removeClass('hidden');
            }
            else {
                $(".user-not-rate").removeClass('hidden');
            }
        }
    </script>
@stop



