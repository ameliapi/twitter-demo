

<img class="avatar" src="<?php echo $tweet->user->image; ?>" alt=""><br/>
<?php echo $tweet->user->name; ?><br/>
@<?php echo $tweet->user->handle; ?><br/><br/>

<?php echo $tweet->content; ?><br/>
            <?php date_default_timezone_set("MST"); 
      echo $tweet->time -> format("Y-m-d h:i:sa"); ?><br/><br/>
<?php echo $tweet->commentCount; ?>
<?php echo $tweet->retweetCount; ?>
<?php echo $tweet->likes; ?>

