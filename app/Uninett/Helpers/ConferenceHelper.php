<?php
use Carbon\Carbon;

class ConferenceHelper {

	public static function timeStampToHuman($timestamp)
	{
		$now = Carbon::now();

		$timestamp = Carbon::createFromTimestamp(strtotime($timestamp));

		return $timestamp->diffForHumans();
		/*if($now->gt($timestamp))
		return "Started " . $timestamp->diffForHumans();

		return  "Starts " . $timestamp->diffForHumans();*/
	}

	public static function timestampToBeingEnds($begins, $ends, $format = 'H:i:s')
	{
		$begins = Carbon::createFromTimestamp(strtotime($begins));
		$ends = Carbon::createFromTimestamp(strtotime($ends));

		return $begins->format($format) . " - " . $ends->format($format);
	}

	public static function formatTimestamp($timestamp, $format = 'H:i:s')
	{
		$time = Carbon::createFromTimestamp(strtotime($timestamp));

		return $time->format($format);
	}

	public static function getShortDescription($description, $words = 5){
		$array = explode(' ', $description);

		$sentence = "";

		for($i=0; $i < $words; $i++)
			$sentence = $sentence . ' ' . $array[$i];

		return $sentence;
	}

	/**
	 * @param $recipients
	 * @param int $length
	 */
	public static function formatChatRecipients($recipients, $length = 5) {
		$string = "";
		$currentLength = 0;

		foreach($recipients['group_recipients'] as $recipient) {
			$string = $string . $recipient['name'] . ", ";
			$currentLength += 1;
			if ($currentLength === $length){
				break;
			}
		}

		foreach($recipients['user_recipients'] as $recipient) {
			$string = $string . $recipient['email'] . ", ";
			$currentLength += 1;

			if ($currentLength === $length){
				break;
			}
		}
		return substr($string, 0, strlen($string) -2);
	}

	public static function timestampToCarbon($timestamp)
	{
		return Carbon::createFromTimestamp(strtotime($timestamp));
	}
}