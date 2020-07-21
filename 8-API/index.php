<?php
    require "twitterapioauth/autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;
    
    $CONSUMER_KEY = "KjiOSj8kfJcGUpLxhtTabTZIl";
    
    $CONSUMER_SECRET = "47cbNdOLDu1BPpDvx0kxXfZZAMFDgJxaM9vIfFqUNDdgQRmjWY";
    
    $access_token = "889042703115091969-JueInipOKMmJkB7BKCWfeWvK2rUXfnp";
    
    $access_token_secret = "uJEn8iybGuLHrvpUa8V8BeBROTpqik6MSpaZSzjSjSzeN";
    
    $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");
    //print_r($content);
    //$statues = $connection->post("statuses/update", ["status" => "I sent this tweet using twitter api."]);
    
    $statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
    //print_r($statuses);
    foreach($statuses as $tweet){
        if($tweet->favorite_count >= 2){
            /*echo $tweet->favorite_count;
            echo $tweet->text;*/
            $status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
            echo $status->html;
            echo "<br>";
        }    
    }

?>