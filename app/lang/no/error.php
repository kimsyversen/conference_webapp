<?php

return array(
	'400' => 'Det ble sendt en spørring som serveren ikke forstår. Si i fra til administrator om du opplever dette.',
	'401' => 'Ugyldig brukernavn eller passord.',
	'422' => '', //Kan være flere meldinger fra api
	'404' => '', //TODO: Fiks
	'423' => 'Du må aktivere brukerkontoen din. Vennligst sjekk din epost',
	'4xx' => 'Det skjedde en feil som ikke har blitt tolket. Si i fra til administrator om du opplever dette. Feilkode: ',


	'501' => 'Serveren ble spurt om funksjonalitet som ikke er implementert. Feilkode ',
	//This is the only error we got on server-error
	'server-error' => 'Kan ikke koble til server. Feilkode ',
	//This is the only error we got on server-error
	'curl-error' => 'Kan ikke koble til server.',
	'runtime-error' => 'Kunne ikke forstå svaret fra server. Si i fra til administrator om du opplever dette.".',


	'with-message' => 'med meldingen',

	'not-specified' => 'Unnskyld. Noe gikk galt.'
);