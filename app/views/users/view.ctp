<div class="span-15 last">
    <div class="profile">
        <div class="pic">
            <?php echo $this->Gravatar->image($user['User']['email'],
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
            <div class="var"><?php echo $user['User']['First_Name']." ".$user['User']['Last_Name']; ?></div>
            <div class="prompt">School:</div>
            <div class="var"><?php echo $user['User']['school']; ?></div>
            <div class="prompt">Email:</div>
            <div class="var"><?php echo $user['User']['email']; ?></div>
            
            <div class="do"><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </div>
            <div class="do"><?php echo $this->Html->link(__('Delete User', true), 
                                                            array('action' => 'delete', 
                                                                  $user['User']['id']), 
                                                                  null, 
                                                                  sprintf(__('Are you sure you want to delete # %s?', true), 
                                                                  $user['User']['id'])); 
                            ?> 
            </div>
	        <!-- <div class="do"><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </div>-->
            <!-- <div class="do"><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </div>-->
       </div>
    </div>
    <div class="feed">
            <div class="feed_title"><?php echo $user['User']['First_Name']." ".$user['User']['Last_Name']; ?>'s News Feed</div>
            <div class="feed_item">
                <p>There will be votes, submissions, forum topics, etc. here</p>
            </div>
    </div>    
</div>
