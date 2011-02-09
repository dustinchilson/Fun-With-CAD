<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title_for_layout?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <?php echo $scripts_for_layout; ?>
        <?php echo $this->Html->css('blueprint/screen')?> 
        <!--[if lt IE 8]><?php echo $this->Html->css('bluepint/ie'); ?><![endif]-->
    </head>
    <body>
        <div class="container">
            <div id="header" class="span-24">
                <?php 
                    echo $this->Html->link(
                            $this->Html->image('wireframe_header.png', 
                                array('alt'=>'Fun with CAD')),'/', 
                                array('escape'=>false));
                ?>
            </div>
            <div class="span-24">
                <div class="span-3"> 
                    <div class='left_menu'>
                        <p><?php echo $this->Html->link('Home', '/');?></p>
                        <p><?php echo $this->Html->link('News', '/posts');?></p>
                        <p><?php echo $this->Html->link('Parts', '/part'); ?></p>
                        <p><?php echo $this->Html->link('Classes', '/classe'); ?></p>
                        <!--<p><?php //echo $this->Html->link('Gallery', '/gallery');?></p>-->
                    </div>    
                </div>
                <div class="span-17">
                    <div class="content">
                        <div class="flash">
                            <?php echo $this->Session->flash();?>
                        </div>

                        <?php echo $content_for_layout ?>

                        <div class="copyright">
                            &copy;Reid Entities - 2011 -  All Rights Reserved
                        </div>
                        <div class="cakepower">
                            <?php echo $this->Html->link(
                                       $this->Html->image('cake.power.gif', 
                                            array('alt'=> __('CakePHP: the rapid development php framework'
                                                  , true), 'border' => '0')),
                                            'http://www.cakephp.org/',
                                            array('target' => '_blank', 'escape' => false));
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="span-4 last" style="background-color: #ccc;">
                    <div class='right_menu'>
                        <?php 
                            if (authsome::get('id') == NULL or authsome::get('id') == 3) {
                                echo '<p>'.$this->Html->link('Register', '/users/add')
                                          .'</p>';
                                echo '<p>'.$this->Html->link('Login', '/users/login')
                                          .'</p>';
                            }
                            else {
                                echo '<h4>Profile Tools</h4>';
                                    echo '<p>'.$this->Html->link('My Profile', '/profile/view/'
                                              .authsome::get('id'))
                                              .'</p>';
                                    echo '<p>'.$this->Html->link('Edit Profile', '/users/edit/'
                                              .authsome::get('id'))
                                              .'</p>';
                                    echo '<p>'.$this->Html->link('Change Password', '/users/change_password')
                                              .'</p>';
                                    echo '<p>'.$this->Html->link('Logout', '/users/logout')
                                              .'</p>';
                                if (authsome::get('user_group_id') == 1) {
                                    echo '<h4>User Managment</h4>';
                                        echo '<p>'.$this->Html->link('Manage Users', '/users/index')
                                                  .'</p>';
                                        echo '<p>'.$this->Html->link('Add user', '/users/add')
                                                  .'</p>';
                                        echo '<p>'.$this->Html->link('Manage Permissions', 
                                                  '/user_group_permissions/index')
                                                  .'</p>';
                                    echo '<h4>Post Managment</h4>';
                                        echo '<p>'.$this->Html->link('Manage Posts', '/posts/manage')
                                                  .'</p>';
                                        echo '<p>'.$this->Html->link('Add Post', '/posts/add')
                                                  .'</p>';
                                }
                           }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php //pr(authsome::get());?>
        <?php //pr($parts);?>
        <?php //CakeLog::write('debug', '============= Some Page Loaded ============='); ?>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
