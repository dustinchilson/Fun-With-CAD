<div class="uploads form">
<?php echo $this->Form->create('Upload', array ('type' => 'file'));?>
	<fieldset>
 		<legend><?php __('Add Upload'); ?></legend>
	    <?php
		    echo $this->Form->input('name');
		    echo $this->Form->input('license');
		    echo $this->Form->input('file', array ('type' => 'file'));
            echo $this->Form->end(__('Submit', true));
        ?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('action' => 'index'));?></li>
	</ul>
</div>
