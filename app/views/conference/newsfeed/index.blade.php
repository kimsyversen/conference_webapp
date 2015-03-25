@extends('conference.layouts.default')
@section('content')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('newsfeed') ])
        @include('conference.layouts.partials.errors-and-messages')
        @include('conference.layouts.partials.page-header', ['text' => 'Newsfeed'])
        @include('conference.layouts.partials.doFirstTimeStuff')

        @if(isset($data) && !empty($data))

            <div class="row">
                <div class="col-sm-1 col-md-2"></div>
                <div class="col-sm-10 col-md-8">
                    @foreach($data['data']['newsposts'] as $post)
                        @include('conference.components.message', [
                            'classes' => 'newspost-conference',
                            'title' => $post['title'],
                            'time' => $post['created_at'] ,
                            'body' => $post['body']
                            ])
                    @endforeach
                </div>
            </div>

{{--                <div class="col-md-6 col-sm-12">
                    @foreach($twitter as $post)

                        @include('conference.components.message', [
                        'classes' => 'newspost-twitter',
                        'title' => 'Post from Twitter',
                        'time' => $post['created_at'] ,
                        'body' => $post['text']
                        ])
                    @endforeach
                </div>
            </div>--}}
        @endif
@stop