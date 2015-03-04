@extends('layouts.default')
@section('content')
    <div class="row">
            <h1>Home</h1>
            @include('layouts.partials.errors')

            @foreach($response as $conference)
                <div class="col-md-3">
                    <div class="panel panel-default">

                       Program id  <h3> {{ $conference['program_id']  }}</h3>
                        <div class="panel-body">
                            Start time:  {{ Carbon\Carbon::createFromTimestamp(strtotime($conference['created_at']))->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@stop