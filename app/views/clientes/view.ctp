<div class="clientes view">
<h2><?php  __('Cliente');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cliente['Cliente']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cliente['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $cliente['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente', true), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cliente', true), array('action' => 'delete', $cliente['Cliente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alugueis', true), array('controller' => 'alugueis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluguel', true), array('controller' => 'alugueis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas', true), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva', true), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas', true), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda', true), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visitas', true), array('controller' => 'visitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visita', true), array('controller' => 'visitas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Alugueis');?></h3>
	<?php if (!empty($cliente['Aluguel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Imovel Id'); ?></th>
		<th><?php __('Cliente Id'); ?></th>
		<th><?php __('Data Inicio'); ?></th>
		<th><?php __('Data Final'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Aluguel'] as $aluguel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $aluguel['id'];?></td>
			<td><?php echo $aluguel['imovel_id'];?></td>
			<td><?php echo $aluguel['cliente_id'];?></td>
			<td><?php echo $aluguel['data_inicio'];?></td>
			<td><?php echo $aluguel['data_final'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'alugueis', 'action' => 'view', $aluguel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'alugueis', 'action' => 'edit', $aluguel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'alugueis', 'action' => 'delete', $aluguel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aluguel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aluguel', true), array('controller' => 'alugueis', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Reservas');?></h3>
	<?php if (!empty($cliente['Reserva'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Imovel Id'); ?></th>
		<th><?php __('Cliente Id'); ?></th>
		<th><?php __('Data Reserva'); ?></th>
		<th><?php __('Ordem'); ?></th>
		<th><?php __('Situacao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Reserva'] as $reserva):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reserva['id'];?></td>
			<td><?php echo $reserva['imovel_id'];?></td>
			<td><?php echo $reserva['cliente_id'];?></td>
			<td><?php echo $reserva['data_reserva'];?></td>
			<td><?php echo $reserva['ordem'];?></td>
			<td><?php echo $reserva['situacao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reservas', 'action' => 'view', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reservas', 'action' => 'edit', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reservas', 'action' => 'delete', $reserva['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reserva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reserva', true), array('controller' => 'reservas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Vendas');?></h3>
	<?php if (!empty($cliente['Venda'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Imovel Id'); ?></th>
		<th><?php __('Cliente Id'); ?></th>
		<th><?php __('Data Venda'); ?></th>
		<th><?php __('Valor'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Venda'] as $venda):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $venda['id'];?></td>
			<td><?php echo $venda['imovel_id'];?></td>
			<td><?php echo $venda['cliente_id'];?></td>
			<td><?php echo $venda['data_venda'];?></td>
			<td><?php echo $venda['valor'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'vendas', 'action' => 'view', $venda['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'vendas', 'action' => 'edit', $venda['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'vendas', 'action' => 'delete', $venda['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $venda['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venda', true), array('controller' => 'vendas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Visitas');?></h3>
	<?php if (!empty($cliente['Visita'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Imovel Id'); ?></th>
		<th><?php __('Cliente Id'); ?></th>
		<th><?php __('Data Visita'); ?></th>
		<th><?php __('Data Agendamento'); ?></th>
		<th><?php __('Confirmacao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cliente['Visita'] as $visita):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $visita['id'];?></td>
			<td><?php echo $visita['imovel_id'];?></td>
			<td><?php echo $visita['cliente_id'];?></td>
			<td><?php echo $visita['data_visita'];?></td>
			<td><?php echo $visita['data_agendamento'];?></td>
			<td><?php echo $visita['confirmacao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'visitas', 'action' => 'view', $visita['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'visitas', 'action' => 'edit', $visita['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'visitas', 'action' => 'delete', $visita['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $visita['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Visita', true), array('controller' => 'visitas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
