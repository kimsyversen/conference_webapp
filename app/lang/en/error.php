<?php

return array(
	'400' => 'Bad request',
	'401' => 'Wrong credentials.',
	'422' => '', //Kan være flere meldinger fra api
	'404' => '', //TODO: Fiks
	'423' => 'You must active your account. Please check your email.',
	'4xx' => 'A not implemented error interpretation occured. Code: ',

	'501' => 'Serveren was asked about providing non-implemented functionality. Errorcode ',

	//This is the only error we got on server-error
	'server-error' => 'Cannot connect to server. Errorcode ',
	//This is the only error we got on server-error
	'curl-error' => 'It seems like the application cannot reach the server.',
	'runtime-error' => 'Could not parse the response from API".',

	'with-message' => 'with message',

	'not-specified' => 'Sorry. Something went wrong.'
);