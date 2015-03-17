@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
        @include('conference.layouts.partials.errors-and-messages')


        @include('conference.layouts.partials.page-header', ['text' => 'Maps'])

        @if(isset($data) && !empty($data))
            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-10 item">

                    @foreach($data['data'] as $map)
                        <img class="img-responsive" src="{{ $map['uri'] }}">
                        <p> {{ $map['description'] }}</p>
                    @endforeach
                </div>

            </div>
        @endif
    </div>
@stop