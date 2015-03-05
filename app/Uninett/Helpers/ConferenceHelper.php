<?php
use Carbon\Carbon;

class ConferenceHelper {

	public static function timeStampToHuman($timestamp)
	{
		$now = Carbon::now();

		$timestamp = Carbon::createFromTimestamp(strtotime($timestamp));

		if($now->gt($timestamp))
		return "Started " . $timestamp->diffForHumans();

		return  "Starts " . $timestamp->diffForHumans();
	}
}