<div class="proprietarios index">
	<h2><?php __('Proprietarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($proprietarios as $proprietario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $proprietario['Proprietario']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proprietario['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $proprietario['Pessoa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $proprietario['Proprietario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $proprietario['Proprietario']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $proprietario['Proprietario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $proprietario['Proprietario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Proprietario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
	</ul>
</div>