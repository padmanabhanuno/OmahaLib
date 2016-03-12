<div class="donors view">
<h2><?php echo __('Donor'); ?></h2>
	<dl>
		<dt><?php echo __('Donor  I D'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor F Name'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_fName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor L Name'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_lName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Organization'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Organization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Street  Address'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Street_Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  City'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  State'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_State']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Zip'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Email'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Phone'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor  Notes'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Donor_Notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  I D'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Appeal_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  I D'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mem  I D'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['Mem_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Donor'), array('action' => 'edit', $donor['Donor']['Donor_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Donor'), array('action' => 'delete', $donor['Donor']['Donor_ID']), array(), __('Are you sure you want to delete # %s?', $donor['Donor']['Donor_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
