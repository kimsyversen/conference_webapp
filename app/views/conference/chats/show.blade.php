@extends('conference.layouts.default')
@section('breadcrumb')
    @include('conference.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('chat') ])
@stop

@section('errors-and-messages')
    @include('conference.partials.errors-and-messages')
@stop

@section('first-time-stuff')
    @include('conference.partials.doFirstTimeStuff')
@stop


@section('content')
    @if(isset($chat['data']) && !empty($chat['data']))
        @include('conference.partials.page-header', ['text' => Lang::get('messages.show.title')])

           @foreach($chat['data']['messages'] as $message)
                   @include('conference.partials.chatMessage', [
                       'uri' => $chat['data']['link'],
                       'title' =>  $message['user']['email'],
                       'time' => $message['created_at']['date'],
                       'user' => $message['user']['email'],
                       'message' => $message['message']
                    ])
        @endforeach
    @endif
@stop