<?php
use \AcceptanceTester;

class RegisterUserCest
{
    public function _before(AcceptanceTester $I)
    {
	    App::setLocale('en');
    }

    public function _after(AcceptanceTester $I)
    {
    }

	public function tryToRegisterPredefinedAdminUser(AcceptanceTester $I)
	{
		$I->wantTo('Register a already existing account');

		$I->amOnPage('/register');



		$I->submitForm('#registrationForm', array(
			'email' => 'admin@example.com',
			'password' => 'secret',
			'password_confirmation' => 'secret'
		), 'submitButton');


		$I->see('The email has already been taken.');
	}

	public function tryToRegisterNewUser(AcceptanceTester $I)
	{
		$I->wantTo('Register a new user');

		$I->amOnPage('/register');

		$I->submitForm('#registrationForm', array(
			'email' => str_random(10). '@example.com',
			'password' => 'secret',
			'password_confirmation' => 'secret'
		), 'submitButton');

		$I->amOnPage('/login');

		$I->see('Account was successfully created. You must check your email and activate your account. Allow a few minutes for it to arrive in your inbox.');
	}
}