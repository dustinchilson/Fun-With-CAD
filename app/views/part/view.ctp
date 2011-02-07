<table width="75%">
    <tr>
        <td colspan=2>
            <div align="center">
                <?php 
                    echo $this->Html->image('http://www.reidsupply.com/images/products/300/'
                                    .$part['Part']['file_name'],
                                    array(
                                        'alt'   => 'Part Number: '.$part['Part']['id'],
                                        'textalign' => 'center'
                                    ));
                ?>
            </div>
            <div style="display:none;"><?php pr($part); ?></div> 
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>ID:</td>
        <td><?php echo $part['Part']['id']; ?></td>
    </tr>
    <tr>
        <td>Name: </td>
        <td><?php echo $part['Part']['name']; ?></td>
    </tr>
    <tr>
        <td>Decription: </td>
        <td><?php echo $part['Part']['desc']; ?></td>
    </tr>
    <tr>
        <td>Classification: </td>
        <td><?php echo $this->Html->link($part['Class']['desc'], '/classe/view/'.$part['Part']['class_id']);?></td>
    </tr>
    <tr>
        <td>Group: </td>
        <td><?php echo $part['Group']['desc'];?></td>
    </tr>
</table>
<p><?php echo $this->Html->link('Go back to index', 'javascript:history.go(-1)');?></p>
