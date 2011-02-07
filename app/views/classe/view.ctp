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
        <td>Name: </td>
        <td><?php echo $classe['Classe']['desc']; ?></td>
    </tr>
    <tr>
        <td>Decription: </td>
        <td><?php echo $classe['Classe']['long_desc']; ?></td>
    </tr>
    <tr>    
</table>
<p><?php echo $this->Html->link('Go back', 'javascript:history.go(-1)');?></p>

 <table cellpadding="0" cellspacing="0">
        <tr>
                <th>Part Num</th>
                <th>Part Desc</th>
        </tr>

    <?php
    $i=0;
    foreach ($classe['Parts'] as $parts):?>
        <tr>
            <td><?php echo $this->Html->link($parts['id'], '/part/view/'.$parts['id']); ?></td>
            <td><?php echo $parts['desc']; ?></td>
        </tr>

    <?php $i++; endforeach; ?>
</table>
<?php //pr($classe); ?>
