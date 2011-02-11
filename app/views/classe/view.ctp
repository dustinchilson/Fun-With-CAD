<table width="75%" align="left">
    <tr>
        <td width="18%" rowspan=3>
            <div class="top_class">
                <?php 
                    echo $this->Html->image('http://www.reidsupply.com/images/class/'
                                    .$classe['Classe']['file_name'],
                                    array(
                                        'alt'   => 'Part Number: '.$classe['Classe']['id'],
                                        'textalign' => 'center', 
                                        'width' => '100px',
                                        'height' => '100px'
                                    ));
                ?>
            </div>
        </td>
        <td width="15%">Name: </td>
        <td><?php echo $classe['Classe']['desc']; ?></td>
    </tr>
    <?php if ($classe['Classe']['parent_id'] != null) { ?>
        <tr>
            <td>Parent Class: </td>
            <td><?php echo $this->Html->link($classe['Classe']['parent_id'], 
                                             '/classe/view/'.$classe['Classe']['parent_id']); 
                ?>
            </td>
        </tr>
    <?php }; ?>
    <tr>
        <td>Decription: </td>
        <td><?php echo $classe['Classe']['long_desc']; ?></td>
    </tr>
    <tr>    
</table>
<p><?php echo $this->Html->link('Go back', 'javascript:history.go(-1)');?></p>

<?php if ($classe['Parts'] != NULL) { ?>
    <table cellpadding="0" cellspacing="0">
            <tr>
                    <th>Part Num</th>
                    <th>Part Desc</th>
            </tr>
        <?php
        foreach ($classe['Parts'] as $parts):?>
            <tr>
                <td><?php echo $this->Html->link($parts['id'], '/part/view/'.$parts['id']); ?></td>
                <td><?php echo $parts['desc']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php }elseif ($classe['subClass'] != null) { ?>
        <div class="subClasses">
            <?php foreach ($classe['subClass'] as $subClass):?>
                <div class="subClass">
                    <div class="subClassName">
                        <?php echo $subClass['desc']; ?>
                    </div>
                    <div class="subClassPic">
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
<?php //pr($classe); ?>
