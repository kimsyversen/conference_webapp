@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
        @include('conference.layouts.partials.errors-and-messages')


        @include('conference.layouts.partials.page-header', ['text' => 'Maps'])

        @include('conference.layouts.partials.doFirstTimeStuff')

        @if(isset($data) && !empty($data))
            <div class="row">
                    @foreach($data['data'] as $map)
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <img class="img-responsive text-center" src="{{ $map['uri'] }}">
                    </div>


                    @endforeach
            </div>
        @endif
    </div>
@stop