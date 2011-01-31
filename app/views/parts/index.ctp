<div class="span-15">
<div class="users index">
	<h2><?php __('Part List');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Item Num');?></th>
			<th><?php echo $this->Paginator->sort('Item Short Desc');?></th>
			<th><?php echo $this->Paginator->sort('Item Photo');?></th>
			<th><?php echo $this->Paginator->sort('Class Name');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($parts as $part):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $part['Part']['id']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['desc']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['file_name']; ?>&nbsp;</td>
		<td><?php echo $part['class']['id']; ?>&nbsp;</td>
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
</div>
