@include('conference.partials.page-header', ['text' => Lang::get('menu.schedule')])
<p class="text-muted description">
    There are four types of events that may appear in the conference program.
    All events have location and a possible description which can be seen by clicking on "{{ Lang::get('button.more') }}".
    If the event is cancelled, you will see a red cross and text.

    If you want, you may share on Facebook, Twitter and Google+.
</p>

<p class="text-muted description">
    You can search in events by free text or filter by day.
    Look for <span id="show-options-link" style="color:black">{{ Lang::get('event.filter.title')  }}<span class="glyphicon glyphicon-menu-down" style="color:black" aria-hidden="true" > </span></span> and try it yourself.
    Try in on the name of the events under.
</p>


@include('conference.partials.options.filter-options')


<?php  $currentUrl = URL::full()  ?>

<?php $professional = array(
        'links' => array(
                'session' => array(
                        'uri' => '/'. $currentUrl
                )
        ),
        'id' => 9999999,
        'title' => 'Professional events',
        'description' => 'This description text is short, but it could be much longer.',
        'location' => 'Location',
        'category' => 'professional',
        'confirmed' => false,
        'start_date' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'end_date' => array(
                "date" =>  "2015-03-25 10:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'last_modified' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        )
); ?>

@include('conference.events.event', ['session' => $professional, 'schedule_type' => 'session'])


<?php $social = array(
        'links' => array(
                'session' => array(
                        'uri' => '/'. $currentUrl
                )
        ),
        'id' => 9999999,
        'title' => 'Social events',
        'description' => 'This description text is short, but it could be much longer.',
        'location' => 'Location',
        'category' => 'social',
        'confirmed' => true,
        'start_date' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'end_date' => array(
                "date" =>  "2015-03-25 10:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'last_modified' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        )
); ?>

@include('conference.events.event', ['session' => $social, 'schedule_type' => 'session'])


<?php $break = array(
        'links' => array(
                'session' => array(
                        'uri' => '/'. $currentUrl
                )
        ),
        'id' => 9999999,
        'title' => 'Break events',
        'description' => 'This description text is short, but it could be much longer.',
        'location' => 'Location',
        'category' => 'break',
        'confirmed' => true,
        'start_date' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'end_date' => array(
                "date" =>  "2015-03-25 10:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'last_modified' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        )
); ?>

@include('conference.events.event', ['session' => $break, 'schedule_type' => 'session'])



<?php $other = array(
        'links' => array(
                'session' => array(
                        'uri' => '/'. $currentUrl
                )
        ),
        'id' => 9999999,
        'title' => 'Events that are neither professional, social or a break',
        'description' => 'This description text is short, but it could be much longer.',
        'location' => 'Location',
        'category' => 'other',
        'confirmed' => true,
        'start_date' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'end_date' => array(
                "date" =>  "2015-03-25 10:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        ),
        'last_modified' => array(
                "date" =>  "2015-03-25 09:30:00.000000",
                "timezone_type" =>  3,
                "timezone" =>  "UTC"
        )
); ?>

@include('conference.events.event', ['session' => $other, 'schedule_type' => 'session'])



