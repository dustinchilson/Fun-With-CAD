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
                    'titleShow'          :  false,
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
        <?php echo $content_for_layout ?>
    </body>
</html>

