@include('conference.partials.page-header', ['text' => Lang::get('menu.schedule')])
<p class="text-muted description">
    {{Lang::get('features.schedule.description.1') }}
    {{Lang::get('features.schedule.description.2') }} "{{ Lang::get('button.more') }}".  {{ Lang::get('menu.personal_schedule')  }}. {{Lang::get('features.schedule.description.3') }}
    {{Lang::get('features.schedule.description.4') }}
</p>

<p class="text-muted description">
    {{Lang::get('features.schedule.description.5.1') }}
    {{Lang::get('features.schedule.description.5.2') }} <span id="show-options-link" style="color:black">{{ Lang::get('event.filter.title')  }}<span class="glyphicon glyphicon-menu-down" style="color:black" aria-hidden="true" > </span></span> {{Lang::get('features.schedule.description.5.3') }}
</p>


@include('conference.partials.options.filter-options')

@include('conference.partials.options.filter-options-count')

<?php  $currentUrl = URL::full()  ?>

<?php $professional = array(
        'links' => array(
                'session' => array(
                        'uri' => '/'. $currentUrl
                )
        ),
        'id' => 9999999,
        'title' => 'Professional events',
        'description' =>  Lang::get('features.schedule.events.generaldescription'),
        'location' => Lang::get('features.schedule.events.location'),
        'category' => Lang::get('features.schedule.events.professional.category'),
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
        'title' => Lang::get('features.schedule.events.social.title'),
        'description' => Lang::get('features.schedule.events.generaldescription'),
        'location' => Lang::get('features.schedule.events.location'),
        'category' => Lang::get('features.schedule.events.social.category'),
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
        'title' => Lang::get('features.schedule.events.break.title'),
        'description' => Lang::get('features.schedule.events.generaldescription'),
        'location' => Lang::get('features.schedule.events.location'),
        'category' => Lang::get('features.schedule.events.break.category'),
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
        'title' => Lang::get('features.schedule.events.other.title'),
        'description' => Lang::get('features.schedule.events.generaldescription'),
        'location' => Lang::get('features.schedule.events.location'),
        'category' => Lang::get('features.schedule.events.other.category'),
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



