@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('chat') ])
    @include('conference.layouts.partials.errors-and-messages')

    @if(isset($chat['data']) && !empty($chat['data']))
           @foreach($chat['data']['messages'] as $message)
                   @include('conference.components.chatMessage', [
                       'uri' => $chat['data']['link'],
                       'title' =>  $message['user']['email'],
                       'time' => $message['created_at']['date'],
                       'user' => $message['user']['email'],
                       'message' => $message['message']
                    ])
        @endforeach
    @endif
@stop