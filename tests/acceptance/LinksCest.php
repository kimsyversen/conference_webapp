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

		$I->wantTo('Can see login page');

		$I->amOnPage('/login');
		$I->see('Login');
	}

	public function canNavigateToRegister(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('can see registration page');

		$I->amOnPage('/register');

		$I->see('Register a new account');
	}

	public function canNotSeeLogoutLink(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('Log out');

		$I->amOnPage('/conferences');

		$I->dontSee('Logout');
	}

	public function can_see_correct_links_when_visiting_first_time(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if i am at main page');

		$I->amOnPage('/conferences');

		$this->is_not_authenticated_and_on_main_page($I);

	}

	public function can_see_correct_links_when_visiting_conference_first_time(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if i am at main page');

		$I->amOnPage('/conferences/1');

		$this->is_not_authenticated_and_on_conference($I);

	}

	public function can_see_correct_links_when_authenticating_from_main_page(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if authenticated from main page');

		$I->loginUser();

		$this->is_authenticated_and_on_main_page($I);
	}

	public function can_see_correct_links_when_authenticating_after_visiting_a_conference(AcceptanceTester $I){
		$I->am('guest');

		$I->wantTo('See if all correct links are available if authenticated');

		$I->navigateToScheduleForTheFirstConference();

		$I->loginUser();

		$this->is_authenticated_and_on_conference($I);
	}


	private function is_authenticated_and_on_conference(AcceptanceTester $I)
	{
		$this->is_authenticated_and_on_main_page($I);

		$I->seeLink('Home', '/conferences');
		$I->seeLink('Schedule', '/conferences/1/schedule');
		$I->seeLink('Maps', '/conferences/1/maps');
		$I->seeLink('My schedule', '/conferences/1/schedule');
		$I->seeLink('Newsfeed', '/conferences/1/newsfeed');
	}

	private function is_not_authenticated_and_on_main_page(AcceptanceTester $I)
	{
		$I->seeLink('Home', '/conferences');

		$I->seeLink('I need help with this application', '/features');
		$I->seeLink('Application guidelines', '/guidelines');

		$I->dontSeeLink('Profile', '/profile');
		$I->dontSeeLink('Logout', '/logout');
	}

	private function is_not_authenticated_and_on_conference(AcceptanceTester $I)
	{
		$I->seeLink('Home', '/conferences');

		$I->seeLink('Schedule', '/conferences/1/schedule');
		$I->seeLink('Maps', '/conferences/1/maps');

		$I->seeLink('I need help with this application', '/features');
		$I->seeLink('Application guidelines', '/guidelines');

		$I->dontSeeLink('Logout', '/logout');
		$I->dontSeeLink('My schedule', '/conferences/1/schedule');
	}

	private function is_authenticated_and_on_main_page(AcceptanceTester $I)
	{
		$I->seeLink('Home', '/conferences');

		$I->seeLink('Logout', '/logout');

		$I->seeLink('About the application', '/about');
		$I->seeLink('I need help with this application', '/features');
		$I->seeLink('Application guidelines', '/guidelines');

		$I->dontSeeLink('Login', '/login');
	}
}