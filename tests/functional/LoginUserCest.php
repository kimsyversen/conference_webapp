<?php
use \FunctionalTester;

class LoginUserCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

	public function tryToLogInPredefinedAdminUser(FunctionalTester $I)
	{
		$I->wantTo('Log in adminuser');
		$I->amOnPage('/login');

		$I->fillField('username', 'admin@example.com');
		$I->fillField('password', 'secret');

		$I->click('Sign in');
		$I->see('You are now logged in.');
	}

	public function tryToLogInNonExistingUser(FunctionalTester $I)
	{
		$I->wantTo('Log in nonexisting user');
		$I->amOnPage('/login');
		$random_string = str_random(10);
		$I->fillField('email', $random_string . '@example.com');
		$I->fillField('password', 'secrasdasdasdet');

		$I->click('Sign in');
		$I->see('Wrong credentials!');
	}
}