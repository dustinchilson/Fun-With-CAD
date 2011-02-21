<div class="uploads form">
<?php echo $this->Form->create('Upload');?>
	<fieldset>
 		<legend><?php __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('license');
		echo $this->Form->input('file');
		echo $this->Form->input('basename');
		echo $this->Form->input('dirname');
		echo $this->Form->input('checksum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Upload.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('action' => 'index'));?></li>
	</ul>
</div>