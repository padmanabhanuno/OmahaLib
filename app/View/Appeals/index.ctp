<div class="appeals index">
	<h2><?php echo __('Appeals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Appeal_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_Description'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_Start_Time_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_End_Time_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('Appeal_Type'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($appeals as $appeal): ?>
	<tr>
		<td><?php echo h($appeal['Appeal']['Appeal_ID']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Appeal_Description']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Appeal_Start_Time_Date']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Appeal_End_Time_Date']); ?>&nbsp;</td>
		<td><?php echo h($appeal['Appeal']['Appeal_Type']); ?>&nbsp;</td>
		<td class="actions">

		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Appeal'), array('action' => 'add')); ?></li>
	</ul>
</div>
