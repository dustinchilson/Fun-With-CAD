<div>
    <h2><?php __('Classe List');?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('Classe Num');?></th>
            <th><?php echo $this->Paginator->sort('Classe Short Desc');?></th>
            <th><?php echo $this->Paginator->sort('Classe Photo');?></th>
    </tr>
    <?php
    $i = 0;
    foreach ($classes as $classe):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
    ?>
    <tr<?php echo $class;?>>
        <td><?php echo $this->Html->link($classe['Classe']['id'], '/classe/view/'.$classe['Classe']['id']);?></td>
        <td><?php echo $classe['Classe']['desc']; ?>&nbsp;</td>
        <td><?php echo $classe['Classe']['file_name']; ?>&nbsp;</td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
    ));
    ?>	</p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
     | 	<?php echo $this->Paginator->numbers();?>
 |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>
