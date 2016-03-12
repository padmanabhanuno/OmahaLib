<div class="appeals form">
<?php echo $this->Form->create('Appeal'); ?>
	<fieldset>
		<legend><?php echo __('Edit Appeal'); ?></legend>
	<?php
		echo $this->Form->input('Appeal_ID');
		echo $this->Form->input('Appeal_Description');
		echo $this->Form->input('Appeal_Start_Time_Date');
		echo $this->Form->input('Appeal_End_Time_Date');
		echo $this->Form->input('Appeal_Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appeal.yes')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Appeal.yes'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appeals'), array('action' => 'index')); ?></li>
	</ul>
</div>
