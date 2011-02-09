<table width="75%">
    <tr>
        <td colspan=2>
            <div align="center">
                <?php 
                    echo $this->Html->image('http://www.reidsupply.com/images/class/'
                                    .$classe['Classe']['file_name'],
                                    array(
                                        'alt'   => 'Part Number: '.$classe['Classe']['id'],
                                        'textalign' => 'center'
                                    ));
                ?>
            </div>
            <div style="display:none;"><?php pr($classe); ?></div> 
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>ID:</td>
        <td><?php echo $classe['Classe']['id']; ?></td>
    </tr>
    <tr>
    <tr>
        <td>Name: </td>
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
    <table cellpadding="0" cellspacing="0">
            <tr>
                    <th>Class Num</th>
                    <th>Class Name</th>
                    <th>Class Desc</th>
            </tr>

        <?php
        foreach ($classe['subClass'] as $subClass):?>
            <tr>
                <td><?php echo $this->Html->link($subClass['id'], '/classe/view/'.$subClass['id']); ?></td>
                <td><?php echo $subClass['desc']; ?></td>
                <td><?php echo $subClass['long_desc']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
<p>
    Sorry no SubClasses or Parts in this catagory. If you would like to see Reid Supply's Selection, please visit 
    <?php echo $this->Html->link('Here', 
                                 'http://www.reidsupply.com/Results.aspx?pid='.$classe['Classe']['id'], 
                                 array (
                                     'target' => '_blank'
                                 )
                );
    ?>
</p>
<?php }; ?>
<?php //pr($classe); ?>
