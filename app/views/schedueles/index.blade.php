@extends('layouts.default')
@section('content')
    <div class="row">
            <h1>Conference program</h1>
            @include('layouts.partials.errors')



            @foreach($response as $conference_program)
                <section>
                    <div class="conference-program">
                        <h3> Conference program  {{ $conference_program['program_id']  }}</h3>
                        Start time: <span> {{ Carbon\Carbon::createFromTimestamp(strtotime($conference_program['created_at']))->diffForHumans() }}</span>
                    </div>



                    @foreach($conference_program['sessions'] as $session)
                        <div class="conference-session">
                            <div class="conference-session-title">
                                <p>{{ $session['title'] }}</p>
                                <p> {{ $session['location'] }}</p>
                            </div>
                        </div>

                    @endforeach

            </section>

            @endforeach
        </div>
@stop