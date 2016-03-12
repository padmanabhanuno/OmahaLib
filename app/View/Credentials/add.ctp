<div class="credentials form">
<?php echo $this->Form->create('Credential'); ?>
	<fieldset>
		<legend><?php echo __('Add Credential'); ?></legend>
	<?php
		echo $this->Form->input('Username');
		echo $this->Form->input('Password');
		echo $this->Form->input('secQuestion');
		echo $this->Form->input('secAnswer');
		echo $this->Form->input('Library_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Credentials'), array('action' => 'index')); ?></li>
	</ul>
</div>
