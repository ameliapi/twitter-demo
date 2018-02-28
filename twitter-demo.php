<link rel="stylesheet" type="text/css" href="style.css"/>

<?php

    require_once("class/user.php");
    require_once("class/tweet.php");

    $user1 = new User();

    $user1 -> name = 'Donald Trump';
    $user1 -> handle = 'realDonaldTrum';
    $user1 -> image = 'https://pbs.twimg.com/profile_images/859982100904148992/hv5soju7_bigger.jpg';
    $user1 -> dateJoined = date_create();


    $user2 = new User();

    $user2 -> name = 'Barack Obama';
    $user2 -> handle = 'BarackObama';
    $user2 -> image = 'https://pbs.twimg.com/profile_images/822547732376207360/5g0FC8XX_bigger.jpg';
    $user2 -> dateJoined = date_create()->modify('-1 year');
    

    $tweet1 = new Tweet();

    $tweet1->user = $user1;
    $tweet1->time = date_create()->modify('-1 hour');
    $tweet1->content = "45 year low on illegal border crossings this year. Ice and Border Patrol Agents are doing a great job for our Country. MS-13 thugs being hit hard.";
    $tweet1->commentCount = "9300";
    $tweet1->retweetCount = "10000";
    $tweet1->likes = "49000";


    $tweet2 = new Tweet();

    $tweet2->user = $user2;
    $tweet2->time = date_create()->modify('-3 hour');
    $tweet2->content = "Why is A.G. Jeffs Sessions asking the Inspector General to investigate potentially massive FISA abuse. Will take forever, has no prosecutorial power and already late with reports on Comey etc. Isn’t the I.G. an Obama guy? Why not use Justice Department lawyers? DISGRACEFUL!";
    $tweet2->commentCount = "23000";
    $tweet2->retweetCount = "12000";
    $tweet2->likes = "39000";

    $users = [$user1, $user2];
    $tweets = [$tweet1, $tweet2];

?>

<div class="container">
    <h2>Users</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li class="user">
                <img class="avatar" src="<?php echo $user->image ?>" alt=""><br/>
                <?php echo $user->name ?><br/>
                @<?php echo $user->handle ?><br/>
            </li>
        <?php endforeach; ?>
    </ul>


    <h2> Tweets </h2>
    <ul>

    <?php foreach ($tweets as $tweet): ?>
        <li class="tweet">
            <?php include("view/display-view.php"); ?>
        </li>
    <?php endforeach; ?>
    </ul>
</div>