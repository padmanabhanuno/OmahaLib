<div class="appeals view">
<h2><?php echo __('Appeal'); ?></h2>
	<dl>
		<dt><?php echo __('Appeal  I D'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  Description'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  Start  Time  Date'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_Start_Time_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  End  Time  Date'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_End_Time_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appeal  Type'); ?></dt>
		<dd>
			<?php echo h($appeal['Appeal']['Appeal_Type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appeal'), array('action' => 'edit', $appeal['Appeal']['yes'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appeal'), array('action' => 'delete', $appeal['Appeal']['yes']), array(), __('Are you sure you want to delete # %s?', $appeal['Appeal']['yes'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appeals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appeal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
