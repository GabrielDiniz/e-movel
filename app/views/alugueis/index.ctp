<div class="alugueis index">
	<h2><?php __('Alugueis');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('imovel_id');?></th>
			<th><?php echo $this->Paginator->sort('cliente_id');?></th>
			<th><?php echo $this->Paginator->sort('data_inicio');?></th>
			<th><?php echo $this->Paginator->sort('data_final');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($alugueis as $aluguel):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $aluguel['Aluguel']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aluguel['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $aluguel['Imovel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($aluguel['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $aluguel['Cliente']['id'])); ?>
		</td>
		<td><?php echo $aluguel['Aluguel']['data_inicio']; ?>&nbsp;</td>
		<td><?php echo $aluguel['Aluguel']['data_final']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $aluguel['Aluguel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $aluguel['Aluguel']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $aluguel['Aluguel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aluguel['Aluguel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aluguel', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>