@extends('conference.layouts.default')
@section('content')

    <div class="features">
        <div>
            @include('conference.features.partials.navigationbar')
        </div>

        {{--         <hr>
         <div>
                 @include('conference.features.partials.newsfeed')
             </div>--}}

        <hr>

        <div>
        @include('conference.features.partials.schedule')
        </div>

        <hr>

  {{--      <div>
            @include('conference.features.partials.mySchedule')
        </div>

        <hr>

    <div>
            @include('conference.features.partials.account')
        </div>--}}

    </div>
@stop












