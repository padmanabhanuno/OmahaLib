<div class="credentials view">
<h2><?php echo __('Credential'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($credential['Credential']['Username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($credential['Credential']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sec Question'); ?></dt>
		<dd>
			<?php echo h($credential['Credential']['secQuestion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sec Answer'); ?></dt>
		<dd>
			<?php echo h($credential['Credential']['secAnswer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  I D'); ?></dt>
		<dd>
			<?php echo h($credential['Credential']['Library_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credential'), array('action' => 'edit', $credential['Credential']['yes'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credential'), array('action' => 'delete', $credential['Credential']['yes']), array(), __('Are you sure you want to delete # %s?', $credential['Credential']['yes'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Credentials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credential'), array('action' => 'add')); ?> </li>
	</ul>
</div>
