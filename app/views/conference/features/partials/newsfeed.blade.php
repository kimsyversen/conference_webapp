@include('conference.partials.page-header', ['text' => 'The newsfeed'])

<?php $message_created_at = \Carbon\Carbon::now(); ?>

@include('conference.partials.message', [
                   'classes' => 'newspost-conference',
                   'title' => 'A demo message',
                   'time' =>  $message_created_at ,
                   'body' => 'Here you will find messages from the conference administration. It will contain both common messages and some that may only be ment for specific groups.'
                   ])