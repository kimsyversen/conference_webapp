<?php
use \AcceptanceTester;

class LoginUserCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

	public function tryToLogInPredefinedAdminUser(AcceptanceTester $I)
	{
		$I->am('guest');
		$I->wantTo('Log in adminuser');

		$I->loginUser();

		$I->amOnPage('/conferences');

		$I->see('You are now logged in');
	}

	public function tryToLogInNonExistingUser(AcceptanceTester $I)
	{
		$I->am('guest');
		$I->wantTo('Log in nonexisting user');

		$I->amOnPage('/login');

		$email =  str_random(10) . '@example.com';
		$password = '123asd123asd';

		$I->loginUser($email, $password);

		$I->click('Sign in');

		$I->see('Wrong credentials!');
	}
}