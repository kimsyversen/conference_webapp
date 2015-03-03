<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(


        'Conference-api' => array(
            'client_id'     => '1',
            'client_secret' => 'asdf',
            'scope'         => array(),
        ),		

	)

);