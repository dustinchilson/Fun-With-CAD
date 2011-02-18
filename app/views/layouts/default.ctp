<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title_for_layout?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <?php echo $scripts_for_layout; ?>
        <?php echo $this->Html->css('jquery.fancybox-1.3.4')?> 
        <?php echo $this->Html->css('blueprint/screen')?> 
        <?php echo $this->Html->css('fwc')?> 
        <!--[if lt IE 8]><?php echo $this->Html->css('bluepint/ie'); ?><![endif]-->
        <?php echo $this->Html->script(
            'https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js'); ?>
        <?php echo $this->Html->script('fancybox/jquery.fancybox-1.3.4.pack'); ?>
        <?php echo $this->Html->script('fancybox/jquery.easing-1.3.pack'); ?>
        <?php echo $this->Html->script('fancybox/jquery.mousewheel-3.0.4.pack'); ?>
        <!-- Setup for FancyBox -->
        <!-- {{{ -->
        <script type="text/javascript">
            $(document).ready(function() {

                /* Apply fancybox to multiple items */
                $("a.iframe").fancybox({
                    'width'              :  800,
                    'height'             :  600,
                    'transitionIn'  	 :	'elastic',
                    'transitionOut'	     :	'elastic',
                    'speedIn'		     :	300, 
                    'speedOut'		     :	150, 
                    'overlayShow'	     :	true,
                    'titleShow'          :  true,
                    'titlePostiton'      :  'over',
                    'type'               :  'iframe',
                    'scrolling'          :  'no',
                    'hideOnContentClick' :  true,
                    'showCloseButton'    :  true,
                    'enableEscapeButton' :  true,
                    'autoScale'          :  true
                });
                
            });
        </script>
        <!-- }}} -->
    </head>
    <body>
        <div class="container">
            <div id="header" class="span-24">
                <?php 
                    echo $this->Html->link(
                            $this->Html->image('wireframe_header.png', 
                                array(
                                    'alt'=>'Fun with CAD', 
                                    'width' => '950px', 
                                    'height' => '80px'
                                )
                            ),'/', 
                            array('escape'=>false));
                ?>
            </div>
            <div class="span-24">
                <div class="span-4"> 
                    <div class='left_menu'>
                        <p><?php echo $this->Html->link('Home', '/');?></p>
                        <p><?php echo $this->Html->link('News', '/posts');?></p>
                        <p><?php echo $this->Html->link('Part Gallery', '/classe/view/10018592'); ?></p>
                        <!--<p><?php echo $this->Html->link('Gallery', '/gallery');?></p>-->
                    </div>    
                </div>
                <div class="span-16">
                    <div class="content">
                        <div class='breadCrumbs'>
                            <?php echo $this->Html->getCrumbs(' > ','Home'); ?>
                        </div>
                        <?php echo $content_for_layout ?>

                        <div class="copyright">
                            &copy;Reid Entities - 2011 -  All Rights Reserved
                        </div>
                        <div class="cakepower">
                            <?php echo $this->Html->link(
                                       $this->Html->image('cake.power.gif', 
                                            array(
                                                'alt'=> __('CakePHP: the rapid development php framework', true), 
                                                'border' => '0', 
                                                'width' => '98px', 
                                                'height' => '13px'
                                            )
                                        ),
                                        'http://www.cakephp.org/',
                                        array(
                                            'target' => '_blank', 
                                            'escape' => false
                                        )
                                    );
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
