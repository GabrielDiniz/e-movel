<div class="vendas index">
	<h2><?php __('Vendas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('imovel_id');?></th>
			<th><?php echo $this->Paginator->sort('cliente_id');?></th>
			<th><?php echo $this->Paginator->sort('data_venda');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vendas as $venda):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $venda['Venda']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venda['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $venda['Imovel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($venda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venda['Cliente']['id'])); ?>
		</td>
		<td><?php echo $venda['Venda']['data_venda']; ?>&nbsp;</td>
		<td><?php echo $venda['Venda']['valor']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $venda['Venda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $venda['Venda']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $venda['Venda']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $venda['Venda']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Venda', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>