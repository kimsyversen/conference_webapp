<?php
use \AcceptanceTester;

class LinksCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

	public function canNavigateToLoginPage(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('Navigate to login page');

		$I->amOnPage('/conferences');

		$I->click('Login');

		$I->amOnPage('/login');
	}

	public function canNavigateToRegister(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('Navigate to registration page');

		$I->amOnPage('/conferences');

		$I->click('Register');

		$I->amOnPage('/register');
	}

	public function canNotSeeLogoutLink(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('Log out');

		$I->amOnPage('/conferences');

		$I->dontSee('Logout');
	}

	public function canSeeCorrectLinksIfAuthenticated(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if authenticated');

		$I->loginUser();

		$I->navigateToScheduleForTheFirstConference();

		//Links in navigation bar
		$I->seeLink('Conference 1', '/conferences/1');
		$I->seeLink('All Conferences', '/conferences');
		$I->seeLink('Schedule', '/conferences/1/schedule');

		$I->seeLink('Personal Schedule', '/conferences/1/schedule');
		$I->seeLink('Profile', '/conferences/1/users/profile');
		$I->seeLink('Log out', '/logout');
	}

	public function canSeeCorrectLinksIfGuest(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if guest');

		$I->navigateToScheduleForTheFirstConference();

		//Links in navigation bar
		$I->seeLink('Conference 1', '/conferences/1');
		$I->seeLink('All Conferences', '/conferences');
		$I->seeLink('Schedule', '/conferences/1/schedule');

		$I->seeLink('Login', '/login');
		$I->seeLink('Register', '/register');

		$I->dontSeeLink('Personal Schedule', '/conferences/1/schedule');
		$I->dontSeeLink('Profile', '/conferences/1/users/profile');
		$I->dontSeeLink('Log out', '/logout');

	}

}