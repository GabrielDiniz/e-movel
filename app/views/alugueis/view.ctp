<div class="alugueis view">
<h2><?php  __('Aluguel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aluguel['Aluguel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imovel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($aluguel['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $aluguel['Imovel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($aluguel['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $aluguel['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aluguel['Aluguel']['data_inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Final'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $aluguel['Aluguel']['data_final']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aluguel', true), array('action' => 'edit', $aluguel['Aluguel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Aluguel', true), array('action' => 'delete', $aluguel['Aluguel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $aluguel['Aluguel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alugueis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluguel', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
