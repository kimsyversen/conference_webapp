@include('conference.partials.page-header', ['text' => 'The newsfeed'])

<?php $message_created_at = \Carbon\Carbon::now(); ?>
<p  class="text-muted description">
    This is where you navigate around the site. It will look different if you are browsing from a mobile device, but the choices are still the same.
    The menu will remember your last visisted conference, therefore you will have more choices once you visit one.
    The settings-cog will be red if you are logged out and green if you are logged into your account.
    The globe let you switch between English and Norwegian language (the conference program may still only be available in one language).
</p>

@include('conference.partials.message', [
                   'classes' => 'newspost-conference',
                   'title' => 'A demo message',
                   'time' =>  $message_created_at ,
                   'body' => 'Here you will find messages from the conference administration. It will contain both common messages and some that may only be ment for specific groups.'
                   ])