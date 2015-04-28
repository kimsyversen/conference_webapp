@extends('conference.layouts.default')
@section('content')
        @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('newsfeed') ])
        @include('conference.partials.errors-and-messages')
        @include('conference.partials.page-header', ['text' => Lang::get('menu.newsfeed')])
        @include('conference.partials.doFirstTimeStuff')

        @if(isset($data['data']['newsposts']) && !empty($data['data']['newsposts']))
            <div class="row">
                <div class="col-sm-1 col-md-2"></div>
                <div class="col-sm-10 col-md-8">
                    @foreach($data['data']['newsposts'] as $post)
                        @include('conference.partials.message', [
                            'classes' => 'newspost-conference',
                            'title' => $post['title'],
                            'time' => $post['created_at'] ,
                            'body' => $post['body']
                            ])
                    @endforeach
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-sm-1 col-md-2"></div>
                <div class="col-sm-10 col-md-8">
                    <p class="lead text-center">{{ Lang::get('newsfeed.empty') }}</p>
                </div>
            </div>
        @endif
@stop