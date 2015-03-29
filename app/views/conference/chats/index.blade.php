@extends('conference.layouts.default')
    @section('breadcrumb')
        @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('chats') ])
    @stop

    @section('errors-and-messages')
        @include('conference.layouts.partials.errors-and-messages')
    @stop

    @section('first-time-stuff')
        @include('conference.partials.doFirstTimeStuff')
    @stop

@section('content')
    @if(isset($data) && !empty($data))
        @include('conference.layouts.partials.page-header', ['text' => 'Chats'])

        @foreach($data['data'] as $chat)

            @include('conference.partials.chatGroup', [
                'uri' => $chat['link'],
                'title' => !isset($chat['name']) ? $chat['name'] : ConferenceHelper::formatChatRecipients($chat),
                'last_message' => $chat['last_message']['message'],
                'last_message_by' => $chat['last_message']['user']['email'],
                'last_message_date' => $chat['last_message']['created_at']['date'],
            ])
        @endforeach
    @endif
@stop


