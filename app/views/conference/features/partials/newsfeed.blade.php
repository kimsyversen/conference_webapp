@include('conference.partials.page-header', ['text' => Lang::get('menu.newsfeed')])

<?php $message_created_at = \Carbon\Carbon::now(); ?>
<p  class="text-muted description">
    {{ Lang::get('features.newsfeed.description') }}
</p>

@include('conference.partials.message', [
                   'classes' => 'newspost-conference',
                   'title' => Lang::get('features.newsfeed.post.title'),
                   'time' =>  $message_created_at ,
                   'body' => Lang::get('features.newsfeed.post.body')
                   ])