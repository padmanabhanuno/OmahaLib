<div class="donors form">
<?php echo $this->Form->create('Donor'); ?>
	<fieldset>
		<legend><?php echo __('Add Donor'); ?></legend>
	<?php
		echo $this->Form->input('Donor_fName');
		echo $this->Form->input('Donor_lName');
		echo $this->Form->input('Donor_Organization');
		echo $this->Form->input('Donor_Street_Address');
		echo $this->Form->input('Donor_City');
		echo $this->Form->input('Donor_State');
		echo $this->Form->input('Donor_Zip');
		echo $this->Form->input('Donor_Email');
		echo $this->Form->input('Donor_Phone');
		echo $this->Form->input('Donor_Notes');
		echo $this->Form->input('Appeal_ID');
		echo $this->Form->input('Item_ID');
		echo $this->Form->input('Mem_ID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?></li>
	</ul>
</div>
