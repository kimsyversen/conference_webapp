<?php
App::missing(function($exception)
{
    return View::make('errors.not_found');
});