<div class="reservas index">
	<h2><?php __('Reservas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('imovel_id');?></th>
			<th><?php echo $this->Paginator->sort('cliente_id');?></th>
			<th><?php echo $this->Paginator->sort('data_reserva');?></th>
			<th><?php echo $this->Paginator->sort('ordem');?></th>
			<th><?php echo $this->Paginator->sort('situacao');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reservas as $reserva):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $reserva['Reserva']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reserva['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $reserva['Imovel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reserva['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['id'])); ?>
		</td>
		<td><?php echo $reserva['Reserva']['data_reserva']; ?>&nbsp;</td>
		<td><?php echo $reserva['Reserva']['ordem']; ?>&nbsp;</td>
		<td><?php echo $reserva['Reserva']['situacao']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $reserva['Reserva']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reserva['Reserva']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reserva', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>