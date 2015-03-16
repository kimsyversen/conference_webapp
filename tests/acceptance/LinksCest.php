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

	public function canSeeCorrectLinksWhenVisitingForTheFirstTime(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if i am at main page');

		$I->amOnPage('/conferences');

		$this->canNotSeeAuthenticatedLinks($I);

		$this->canSeeLinksWhenGuestAndNotAuthenticated($I);



	}

	public function canSeeCorrectLinksIfAuthenticatingFromMainPage(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if authenticated from main page');

		$I->loginUser();

		$this->canSeeAuthenticatedLinks($I);
	}

	public function canSeeCorrectLinksIfAuthenticated(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if authenticated');

		$I->loginUser();

		$I->navigateToScheduleForTheFirstConference();

		$this->canSeeAuthenticatedAndConferenceLinks($I);
	}

	public function canSeeCorrectLinksIfGuest(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if guest');


		$I->navigateToScheduleForTheFirstConference();

		$this->canSeeConferenceLinksWhenNotAuthenticated($I);
		$this->canSeeLinksWhenGuestAndNotAuthenticated($I);

	}

	private function canSeeLinksWhenGuestAndNotAuthenticated(AcceptanceTester $I)
	{
		$I->seeLink('All conferences', '/conferences');
		$I->seeLink('Login', '/login');
		$I->seeLink('Register', '/register');
	}


	private function canNotSeeAuthenticatedLinks(AcceptanceTester $I)
	{
		//Once a user is authenticated, the user can not see

		$I->dontSeeLink('Conference 1', '/conferences/1');
		$I->dontSeeLink('Schedule', '/conferences/1/schedule');
		$I->dontSeeLink('Personal Schedule', '/conferences/1/schedule');

		$I->dontSeeLink('Profile', '/profile');
		$I->dontSeeLink('Log out', '/logout');
	}


	private function canSeeAuthenticatedLinks(AcceptanceTester $I)
	{
		//Right after authenticating, the user can see
		$I->seeLink('All conferences', '/conferences');
		$I->seeLink('Profile', '/profile');
		$I->seeLink('Log out', '/logout');
	}

	private function canSeeConferenceLinksWhenNotAuthenticated(AcceptanceTester $I)
	{
		//If not authenticated, but on a specific conference, the user can see
		$I->seeLink('Conference 1', '/conferences/1');
		$I->seeLink('Schedule', '/conferences/1/schedule');
	}


	private function canSeeAuthenticatedAndConferenceLinks(AcceptanceTester $I)
	{
		//If authenticated and on a conference, the user can see
		$this->canSeeAuthenticatedLinks($I);
		$I->seeLink('Conference 1', '/conferences/1');
		$I->seeLink('Schedule', '/conferences/1/schedule');
		$I->seeLink('Personal Schedule', '/conferences/1/schedule');
	}
}