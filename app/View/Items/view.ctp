<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Item  I D'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Item_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Item_Description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Received  Date'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Item_Received_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Value'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Item_Value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item  Disposition'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Item_Disposition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Library  I D'); ?></dt>
		<dd>
			<?php echo h($item['Item']['Library_ID']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['Item_ID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['Item_ID']), array(), __('Are you sure you want to delete # %s?', $item['Item']['Item_ID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
	</ul>
</div>
