<div class="uploads index">
	<h2><?php __('Uploads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('license');?></th>
			<th><?php echo $this->Paginator->sort('basename');?></th>
			<th><?php echo $this->Paginator->sort('dirname');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($uploads as $upload):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link($upload['Upload']['id'], '/uploads/view/'.$upload['Upload']['id']); ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['name']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['created']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['modified']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['license']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['basename']; ?>&nbsp;</td>
		<td><?php echo $upload['Upload']['dirname']; ?>&nbsp;</td>
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Upload', true), array('action' => 'add')); ?></li>
	</ul>
</div>
