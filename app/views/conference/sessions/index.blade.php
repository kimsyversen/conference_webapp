@extends('layouts.default')

@section('content')
        @include('layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('session') ])

        @include('layouts.partials.errors-and-messages')

        @include('layouts.partials.page-header', ['text' => 'Details about session'])

        <div>
            <a href="#" id="get-button">
                Get ajax data
            </a>
        </div>



        @unless(Session::has('errors'))
            @include('conference.partials.delimiter', ['text' => 'Session information', 'value' => ''])

            @include('conference.sessions.partials.session', ['session' => $data['data']])

            @include('conference.partials.delimiter', ['text' => 'Rate session', 'value' => ''])

            <div class="rateable hidden">
                @include('conference.sessions.partials.rating', ['rateable' => true])
            </div>
            <div class="not-rateable hidden">
                @include('conference.sessions.partials.rating', ['rateable' => false])
            </div>

        @endunless
@stop

@section('javascript')
    <script>
        $(document).ready(function(){

            $('#get-button').click(function(e){
                e.preventDefault();
                var conferenceId = " {{ Session::get('conference_id') }}";
                var sessionId = " {{ Session::get('session_id') }}";

                $.get('/conferences/" + conferenceId  +  " /sessions/" +  sessionId+ "/rate', function(data)
                {
                    determineRateElement(data['data']['rateable']);
                });
            });

            $('#get-button').click();
        });

        function determineRateElement(rateable) {
            if(rateable !== true)
            {

                $(".rateable").removeClass('hidden');
            }
            else {
                $(".not-rateable").removeClass('hidden');
            }
        }
    </script>
@stop



