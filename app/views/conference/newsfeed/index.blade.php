@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('newsfeed') ])
        @include('conference.layouts.partials.errors-and-messages')


        @include('conference.layouts.partials.page-header', ['text' => 'Newsfeed'])

        @if(isset($data) && !empty($data))
            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-10 item">

                    @foreach($data['data'] as $map)
                        {( $map }}
                    @endforeach
                </div>

            </div>
        @endif
    </div>
    @include('conference.partials.goto-top')
@stop