@extends('conference.layouts.default')
@section('content')
    @include('conference.layouts.partials.breadcrumb', ['breadcrumb' => Breadcrumbs::render('conferences') ])
    @include('conference.layouts.partials.errors-and-messages')

    @if(isset($data) && !empty($data))
        @include('conference.layouts.partials.page-header', ['text' => 'Chats'])

        @foreach($data['data'] as $chat)

            @include('conference.components.chatGroup', [
                'uri' => $chat['link'],
                'title' => !isset($chat['name']) ? $chat['name'] : ConferenceHelper::formatChatRecipients($chat),
                'last_message' => $chat['last_message']['message'],
                'last_message_by' => $chat['last_message']['user']['email'],
                'last_message_date' => $chat['last_message']['created_at']['date'],
            ])
        @endforeach
    @endif
@stop


