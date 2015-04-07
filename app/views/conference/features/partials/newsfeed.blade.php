@include('conference.partials.page-header', ['text' => Lang::get('menu.newsfeed')])

<?php $message_created_at = \Carbon\Carbon::now(); ?>
<p  class="text-muted description">
    Here you will find messages from the conference administration. It will contain both common messages and some targeted messages (to see targeted messages requires an account) .
</p>

@include('conference.partials.message', [
                   'classes' => 'newspost-conference',
                   'title' => 'A demo message',
                   'time' =>  $message_created_at ,
                   'body' => 'No exciting news yet.'
                   ])