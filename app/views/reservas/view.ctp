<div class="reservas view">
<h2><?php  __('Reserva');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reserva['Reserva']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imovel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reserva['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $reserva['Imovel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reserva['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Reserva'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reserva['Reserva']['data_reserva']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ordem'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reserva['Reserva']['ordem']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Situacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reserva['Reserva']['situacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserva', true), array('action' => 'edit', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Reserva', true), array('action' => 'delete', $reserva['Reserva']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
