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
        <div class="flash"><?php echo $this->Session->flash('auth');?></div>
        <div class="container">
            <div id="header" class="span-24">
                <?php 
                    echo $this->Html->link(
                         $this->Html->image('wireframe_header.png', array('alt'=>'Fun with CAD')),
                                           '../', array('escape'=>false));?>
            </div>
            <div class="span-24">
                <div class="span-4"> 
                    <div class='menu'>
                        <p><?php echo $this->Html->link('Home', '../');?></p>
                        <p><?php echo $this->Html->link('Posts', '/posts');?></p>
                        <p><?php echo $this->Html->link('Profile', '/profile');?></p>
                        <p><?php echo $this->Html->link('Dashboard', '/users/dashboard');?></p>
                        <!--<p><?php echo $this->Html->link('STUB_Gallery', '/gallery');?></p>-->
                    </div>    
                </div>
                <div class="span-16">
                    <div class="content">
                        <?php echo $content_for_layout ?>
                    </div> 
                </div>
                <div class="span-4 last" style="background-color: #ccc;">
                    <p><?php echo $this->Html->link('Login', '/users/login');?></p>
                    <p><?php echo $this->Html->link('Logout', '/users/logout');?></p>
                </div>
            </div>
            <div id="footer" class"span-24">
                <div class="cakepower">
                    <?php echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
                                        'http://www.cakephp.org/',
                        array('target' => '_blank', 'escape' => false)
                        );
                    ?>
                </div>
                <div class="copyright">
                    &copy;Reid Enterprises - 2011 -  All Rights Reserved
                </div>
            </div>
        </div>
    </body>
</html>
