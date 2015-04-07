<?php
return array(
	'nav' => array(
		'description' => 'This is where you navigate around the site. It will look slightly different if you use a smartphone, tablet, or computer, but the choices are still the same. The menu will remember your last visisted conference, therefore you will have more choices once you visit one. The globe let you switch between English and Norwegian language (the conference program may still only be available in one language). If you are on a mobile device, you might have to scroll when expanding the language menu.'
	),
	'newsfeed' => array (
		'description' => 'Here you will find messages from the conference administration. It will contain both common messages and some targeted messages (to see targeted messages requires an account).',
		'post' => array(
			'title' => 'A demo message',
			'body' => 'This could be some very exicting news.'
		)
	),
	'schedule' => array(
		'description' => array(
			'1' => 'There are four types of events that may appear in the conference program.',
			'2' => 'All events have location and a possible description which can be seen by clicking on ',
			'3' => 'If you are signed in to your account, you also have the possibility to add the events to',
			'4' => 'If the event is cancelled, you will see a red cross and text. If you want, you may share on Facebook, Twitter and Google+. If you wish to rate a event, click on any event. There you will find the possibility to give a 1-5 score and a optional comment.',
			'5' => array(
				'1' => ' You can search in events by free text or filter by day.',
				'2' => 'Look for',
				'3' => 'and try it yourself on the name, or any word from the text in the events under.'
			)
		),

		'events' => array(
			'generaldescription' =>  'This description text is short, but it could be much longer.',
			'location' => 'Location comes here',
			'professional' => array(
				'title' => 'Professional events',
				'category' => 'professional'
			),
			'social' => array(
				'title' => 'Social events',
				'category' => 'social'
			),
			'break' => array(
				'title' => 'Break events',
				'category' => 'break'
			),
			'other' => array(
				'title' => 'Events that are neither professional, social or a break',
				'category' => 'other'
			),
		)
	),
	'mschedule' => array(
		'description' => 'gives you a view of those events that you have added to your own schedule. This requires that you create and use an account.'
	)

);
