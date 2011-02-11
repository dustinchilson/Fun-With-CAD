<table width="75%">
    <tr>
        <td colspan=2>
            <div align="center">
                <?php 
                    echo $this->Html->image('http://www.reidsupply.com/images/products/300/'
                                    .$part['Part']['file_name'],
                                    array(
                                        'alt'   => 'Part Number: '.$part['Part']['id'],
                                        'textalign' => 'center',
                                        'width' => 300,
                                        'height' => 300
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
        <td colspan=2>
            <?php echo $this->Html->
                link('3d CAD Preview!', 'http://www.reidsupply.com/wucontrol/RemoteCad.aspx?id='
                    .$part['Part']['id'],
                    //.'?KeepThis=true&TB_iframe=true&height=400&width=600&model=true', 
                    array(
                        'class' => 'iframe',
                        'title' => $part['Part']['name'].' - '.$part['Part']['id'].' - '.'3d View!'
                    )
                ); ?>
        </td>
    </tr>
    <tr>
        <td colspan=2>
            <?php echo $this->Html->
                link('Buy one!', 'http://www.reidsupply.com/Detail.aspx?itm='
                .$part['Part']['id'],
                    array(
                        'target' => '_blank'
                    )
                ); ?>
        </td>
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
        <td>Classification: </td>
        <td><?php echo $this->Html->link($part['Class']['desc'], '/classe/view/'.$part['Part']['class_id']);?></td>
    </tr>   
    <tr>
        <td>Decription: </td>
        <td>
            <?php echo $part['Part']['desc']; ?>
            <br/>
            <?php echo $part['Group']['desc'];?>
        </td>
    </tr>

</table>
<p><?php echo $this->Html->link('Go back to index', 'javascript:history.go(-1)');?></p>
