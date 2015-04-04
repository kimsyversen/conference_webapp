@extends('conference.layouts.default')
@section('content')

    <div class="features">
        <div>
            @include('conference.features.partials.navigationbar')
        </div>

        <div>
            @include('conference.features.partials.newsfeed')
        </div>

     {{--   <div>
            <p>Write about messages?</p>
        </div>--}}

        <div>
        @include('conference.features.partials.schedule')
        </div>


        <div>

        </div>

    </div>
@stop












