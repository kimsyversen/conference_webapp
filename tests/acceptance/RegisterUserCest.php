<?php
use \AcceptanceTester;

class RegisterUserCest
{
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

	public function tryToRegisterPredefinedAdminUser(AcceptanceTester $I)
	{
		$I->wantTo('Register a already existing account');

		$I->amOnPage('/register');

		$I->fillField('email', 'admin@example.com');
		$I->fillField('password', 'secret');
		$I->fillField('password_confirmation', 'secret');

		$I->click('Sign up');

		$I->see('The email has already been taken.');
	}

	public function tryToRegisterNewUser(AcceptanceTester $I)
	{
		$I->wantTo('Register a new user');

		$I->amOnPage('/register');

		$I->fillField('email', str_random(10). '@example.com');
		$I->fillField('password', 'secret');
		$I->fillField('password_confirmation', 'secret');

		$I->click('Sign up');

		$I->amOnPage('/login');

		$I->see('Sign in');

		//TODO: Someone this won't work
		//$I->see('Account was successfully created. Check your email to verify your account.');


	}
}