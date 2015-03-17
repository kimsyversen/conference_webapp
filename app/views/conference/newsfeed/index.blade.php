@extends('conference.layouts.default')
@section('content')
    <div class="container">
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('newsfeed') ])
        @include('conference.layouts.partials.errors-and-messages')
        @include('conference.layouts.partials.page-header', ['text' => 'Newsfeed'])



        @if(isset($data) && !empty($data))
            <div class="row">

                <div class="col-md-6">
                    @foreach($data['data'] as $post)
                        @include('conference.components.message', [
                            'title' => $post['title'],
                            'time' => $post['created_at'] ,
                            'body' => $post['body']
                            ])
                    @endforeach
                </div>
                <div class="col-md-6">
                    @foreach($twitter as $post)
                        @include('conference.components.message', [
                        'title' => 'Post from Twitter',
                        'time' => $post['created_at'] ,
                        'body' => $post['text']
                        ])
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@stop