<?php
use \FunctionalTester;

class RegisterUserCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }


	public function tryToRegisterPredefinedAdminUser(FunctionalTester $I)
	{
		$I->wantTo('Register a already existing account');

		$I->amOnPage('/register');

		$I->fillField('username', 'admin@example.com');
		$I->fillField('password', 'secret');
		$I->fillField('password_confirmation', 'secret');

		$I->click('Sign up');
		$I->see('The username has already been taken.');
		$I->see('The email has already been taken.');
	}

	public function tryToRegisterNewUser(FunctionalTester $I)
	{
		$I->wantTo('Register a already existing account');

		$I->amOnPage('/register');

		$random_string = str_random(10);
		$I->fillField('username', $random_string . '@example.com');
		$I->fillField('password', 'secret');
		$I->fillField('password_confirmation', 'secret');

		$I->click('Sign up');
		$I->see('Account was successfully created. Check your email to verify your account');
	}
}