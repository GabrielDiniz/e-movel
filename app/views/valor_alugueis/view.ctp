<div class="valorAlugueis view">
<h2><?php  __('Valor Aluguel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valorAluguel['ValorAluguel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imovel'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valorAluguel['Imovel']['id'], array('controller' => 'imoveis', 'action' => 'view', $valorAluguel['Imovel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valorAluguel['ValorAluguel']['data_inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valorAluguel['ValorAluguel']['valor']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Valor Aluguel', true), array('action' => 'edit', $valorAluguel['ValorAluguel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Valor Aluguel', true), array('action' => 'delete', $valorAluguel['ValorAluguel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $valorAluguel['ValorAluguel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Valor Alugueis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valor Aluguel', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
	</ul>
</div>
