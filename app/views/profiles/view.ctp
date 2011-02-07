<div class="profile">
    <div class="pic">
        <?php echo $this->Gravatar->image($profile['Profile']['email'],
                                              array(
                                                'default'=> 'monsterid',
                                                'rating' => 'pg',
                                                'ext' => 'true',
                                                'size' => 180
                                              )
                                          )
       ?>
    </div>
    <div class="data">
        <div class="prompt">Real Name:</div>
        <div class="var"><?php echo $profile['Profile']['first_name']." ".$profile['Profile']['last_name']; ?></div>
        <div class="prompt">School:</div>
        <div class="var"><?php echo $profile['Profile']['school']; ?></div>
        <div class="prompt">Email:</div>
        <div class="var"><?php echo $profile['Profile']['email']; ?></div>
    </div>
</div>
<div class="feed">
        <div class="feed_title"><?php echo $profile['Profile']['first_name']." ".$profile['Profile']['last_name']; ?>'s News Feed</div>
        <div class="feed_item">
            <p>There will be votes, submissions, forum topics, etc. here</p>
        </div>
</div>    
