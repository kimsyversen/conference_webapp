<?php
namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class AcceptanceHelper extends \Codeception\Module
{

	/**
	 * Remember to run codecept build after adding your own methods!
	 */


	public function loginUser($username = 'admin@example.com', $password = 'secret')
	{
		$I = $this->getModule('Laravel4');

		$I->amOnPage('/login');

		$I->fillField('username', $username);
		$I->fillField('password', $password);

		$I->click('Sign in');
	}

	public function navigateToScheduleForTheFirstConference(){
		$I = $this->getModule('Laravel4');

		$I->amOnPage('/conferences');


		//Check that the link actually exists
		$I->seeLink('Home', '/conferences');

		//Navigate from /conferences to /conferences/1
		$I->amOnPage('/conferences/1');

	}

}
