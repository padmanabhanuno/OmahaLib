<div class="credentials index">
	<h2><?php echo __('Credentials'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('Username'); ?></th>
			<th><?php echo $this->Paginator->sort('Password'); ?></th>
			<th><?php echo $this->Paginator->sort('secQuestion'); ?></th>
			<th><?php echo $this->Paginator->sort('secAnswer'); ?></th>
			<th><?php echo $this->Paginator->sort('Library_ID'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($credentials as $credential): ?>
	<tr>
		<td><?php echo h($credential['Credential']['Username']); ?>&nbsp;</td>
		<td><?php echo h($credential['Credential']['Password']); ?>&nbsp;</td>
		<td><?php echo h($credential['Credential']['secQuestion']); ?>&nbsp;</td>
		<td><?php echo h($credential['Credential']['secAnswer']); ?>&nbsp;</td>
		<td><?php echo h($credential['Credential']['Library_ID']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('New Credential'), array('action' => 'add')); ?></li>
	</ul>
</div>
