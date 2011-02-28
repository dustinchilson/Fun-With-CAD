<?php if ($classe['Classe']['parent_id'] != null or $classe['Parts'] != null) { 
    //
    // This Section Creates the breadcrumbs for the  
    // top of the page.
    //
    // uberClass is a variable from the controller
    // pulling data from the database.
    //
    // breadCrumb is a variable from the controller
    // hard coded to show the home catagory within
    // the breadcrumb heiarcy.
    //
    // uberClass Index is the Parent's Parent's Parent
    // superSuperClass index is the Parent's Parent
    // superClass is Classe's parent.
    //
    $this->Html->addCrumb($breadCrumb, $breadCrumbLink); 
    if ($uberClass[0]['uberClass']['id'] != null and
        $uberClass[0]['uberClass']['id'] != 10018592 and // make sure it isnt the main catagory
        $uberClass[0]['uberClass']['id'] >= 1100000) { // none of the top level catagories
            $this->Html->addCrumb(
                $uberClass[0]['uberClass']['desc'], '/classe/view/'.
                $uberClass[0]['uberClass']['id']);

    }
    if ($uberClass[0]['superSuperClass']['id'] != null and 
        $uberClass[0]['superSuperClass']['id'] != 10018592) { // make sure it isnt the main catagory
            $this->Html->addCrumb(
            $uberClass[0]['superSuperClass']['desc'], '/classe/view/'.
            $uberClass[0]['superSuperClass']['id']);
    }
    if ($classe['superClass']['id'] != 10018592) { // make sure it isnt the main catagory
        $this->Html->addCrumb($classe['superClass']['desc'], '/classe/view/'.$classe['superClass']['id']);
    };
    $this->Html->addCrumb($classe['Classe']['desc'], '/classe/view/'.$classe['Classe']['id']);
?>
    
    <div class="topClasses">
        <div class="topClass">
            <div class='className'><?php echo $classe['Classe']['desc']; ?></div>
            <div id="classPic">
            <?php 
                echo $this->Html->image('http://www.reidsupply.com/images/class/'
                                .$classe['Classe']['file_name'],
                                array(
                                    'alt'   => 'Part Number} '.$classe['Classe']['id'],
                                    'textalign' => 'center', 
                                    'width' => '100px',
                                    'height' => '100px'
                                ));
            ?>
            </div>
        </div>
        <div class='classDesc'>
            <?php echo $classe['Classe']['long_desc']; ?>
        </div>
    </div>
<?php }; ?>

<?php if ($classe['Parts'] != NULL) { ?>
    <div class='parts'>
        <?php foreach ($classe['Parts'] as $parts):?>
            <div class="subClass">
                <div class="className">
                    <?php echo $parts['desc']; ?>
                </div>
                <div class="classPic">
                    <?php
                        echo $this->Html->link(
                            $this->Html->image(
                                'http://www.reidsupply.com/images/products/300/'.$parts['file_name'],
                                array (
                                    'alt' => 'Part Number'. $parts['id'],
                                    'textalign' => 'center',
                                    'width' => '100px',
                                    'height' => '100px'
                                )
                            ),
                            '/part/view/'.$parts['id'],
                            array (
                                'class' => 'iframe',
                                'title' => $parts['name'].' - '.$parts['id'],
                                'escape' => false
                            ));
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php }elseif ($classe['subClass'] != null) { ?>
        <div class="subClasses">
            <?php foreach ($classe['subClass'] as $subClass):?>
                <div class="subClass">
                    <div class="className">
                        <?php echo $subClass['desc']; ?>
                    </div>
                    <div class="classPic">
                        <?php echo $this->Html->link(
                                       $this->Html->image('http://www.reidsupply.com/images/class/'
                                              .$subClass['file_name'],
                                              array(
                                              'alt'   => 'Part Number: '.$subClass['id'],
                                              'textalign' => 'center',
                                              'width' => '100px',
                                              'height' => '100px'
                                              )
                                        ),
                                   '/classe/view/'.$subClass['id'], 
                                   array(
                                       'escape' => false
                                   )
                               );
                        ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php } else { ?>
<p>
    Sorry no SubClasses or Parts in this catagory. If you would like to see Reid Supply's Selection, please visit 
    <?php echo $this->Html->link('Here', 
                      'http://www.reidsupply.com/Results.aspx?pid='.$classe['Classe']['id'], 
                      array (
                        'target' => '_blank'
                      ));
    ?>
    <?php 
        // logs when there are no parts in the selected catagory            
        CakeLog::write('Missing_parts', 'No Parts in this Catagory.....'.$classe['Classe']['id']); 
    ?>
</p>
<?php }; ?>
<?php //pr($uberClass); ?>
<?php //pr($classe); ?>
