@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.components.breadcrumb', ['breadcrumb' => Breadcrumbs::render('maps') ])
        @include('conference.layouts.partials.errors-and-messages')


        @include('conference.layouts.partials.page-header', ['text' => 'Maps'])

        @include('conference.layouts.partials.doFirstTimeStuff')

        @if(isset($data) && !empty($data))
            <div class="row maps-item">
                    @foreach($data['data'] as $map)
                        <div class="col-md-2"></div>
                        <div class="col-md-8">

                                <div class="col-xs-12 text-center">
                                    <p class="lead">{{ $map['description'] }}</p>

                                <div class="col-xs-12">
                                    <img class="img-responsive text-center" src="{{ $map['uri'] }}">
                                </div>
                            </div>
                         </div>
                    @endforeach
            </div>
        @endif
    </div>
@stop