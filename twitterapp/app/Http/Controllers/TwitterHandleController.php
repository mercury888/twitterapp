<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twitter;

class TwitterHandleController extends Controller
{
    //
	public function get_tweets_count ($screen_name)
	{
		if ($screen_name == '') {
			return 'Please provide twitter handle/ screen name';
		}
		$twitterUser = Twitter::getUsers(['screen_name' => $screen_name, 'format' => 'array']);
		$tweets = Twitter::getUserTimeline(['screen_name' => $screen_name, 'include_rts' => 0, 'trim_user' => 1, 'count' => 200, 'format' => 'array']);
		$currTimestamp = strtotime(date('Y-m-d h', time()) . ':59:59');
		$currentTimestamp = strtotime(date('Y-m-d h', strtotime('+1 hour', time())) . ':59:59');
		$pastTimestamp = strtotime(date('Y-m-d h', strtotime('-48 hours', time())) . ':00:00');
		$tweetsTimestamp = array();
		$this->getTweetsTimestamp ($tweets, $screen_name, $pastTimestamp, $tweetsTimestamp);
		$hoursRange = range($pastTimestamp, $currentTimestamp, 3600);
		$tweetsByHour = $this->getHourlyTweetsCount($tweetsTimestamp, $hoursRange);
		$response = [
			'from' => date('r', $pastTimestamp),
			'to' => date('r', $currTimestamp),
			'by_hour' => $tweetsByHour
		];
		
		echo '<pre>';
		echo '<hr/>';
		print_r($response);
		echo '<hr/>';
		echo '</pre>';
		exit();		

		return $response;
	}
	
	private function getTweetsTimestamp ($tweets, $screen_name, $lastTimestamp, &$tweetsTime = array()) 
	{
		$lastTweetTimestamp = strtotime(end($tweets)['created_at']);
		$maxID = end($tweets)['id'];
		$isReachedEndTime = false;

		foreach ($tweets as $tweet) {
			if (strtotime($tweet['created_at']) < $lastTimestamp) {
				$isReachedEndTime = true;
				break;
			}
			array_push($tweetsTime, strtotime($tweet['created_at']));
		}
		if (!$isReachedEndTime) {
			$tweets = Twitter::getUserTimeline(['screen_name' => $screen_name, 'include_rts' => 0, 'trim_user' => 1, 'count' => 200, 'max_id' => $maxID, 'format' => 'array']);
			$this->getTweetsTimestamp ($tweets, $screen_name, $lastTimestamp, $tweetsTime);
		} else {
			return true;
		}
	}
	
	private function getHourlyTweetsCount ($tweetsTimestamp, $timesRange) 
	{
		$tweetsByHour = [];
		for ($itr = count($timesRange) - 1; $itr > 0; $itr--) {
			$max = $timesRange[$itr];
			$min = $timesRange[$itr - 1];
			$thisHourTweets = array_filter(
				$tweetsTimestamp,
				function ($tweetTime) use($min, $max) {
					return ($tweetTime > $min && $tweetTime <= $max);
				}
			);
			$tweetsByHour[] = ['time' => date('d/m/Y h:i A', $min) . ' - ' . date('d/m/Y h:i A', $max), 'count' => count($thisHourTweets)];
		}
		return $tweetsByHour;
	}
}
