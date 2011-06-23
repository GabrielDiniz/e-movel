<div class="vendas view">
<h2><?php  __('Venda');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $venda['Venda']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imovel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($venda['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $venda['Imovel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cliente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($venda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venda['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Venda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $venda['Venda']['data_venda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $venda['Venda']['valor']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venda', true), array('action' => 'edit', $venda['Venda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Venda', true), array('action' => 'delete', $venda['Venda']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $venda['Venda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
