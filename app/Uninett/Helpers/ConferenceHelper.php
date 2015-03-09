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

	public static function timestampToBeingEnds($begins, $ends)
	{
		$begins = Carbon::createFromTimestamp(strtotime($begins));
		$ends = Carbon::createFromTimestamp(strtotime($ends));

		$format = 'H:i:s';

		return $begins->format($format) . " - " . $ends->format($format);
	}
}