<?php
require_once 'twitteroauth/twitteroauth.php';
$twitterConnection = new TwitterOAuth(
'XXX',	// Consumer Key
'XXX',   	// Consumer secret
'XXX',       // Access token
'XXX'    	// Access token secret
);

$twitterData = $twitterConnection->get(
	'statuses/user_timeline',
	 array(
		 'screen_name'     => 'TWITTERUSERNAMEHERE',
		 'count'           => 1,
		 'exclude_replies' => false
	)
);

foreach($twitterData as $tweets)
{
     $tweet = $tweets;
}

echo $tweet->text;
?>
