<div class="imoveis view">
<h2><?php  __('Imovel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $imovel['Imovel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($imovel['Tipo']['descricao'], array('controller' => 'tipos', 'action' => 'view', $imovel['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Logradouro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($imovel['Logradouro']['nome'], array('controller' => 'logradouros', 'action' => 'view', $imovel['Logradouro']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Proprietario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($imovel['Proprietario']['id'], array('controller' => 'proprietarios', 'action' => 'view', $imovel['Proprietario']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $imovel['Imovel']['numero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Contrato'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $imovel['Imovel']['tipo_contrato']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Complemento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $imovel['Imovel']['complemento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observacao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $imovel['Imovel']['observacao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imovel', true), array('action' => 'edit', $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Imovel', true), array('action' => 'delete', $imovel['Imovel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos', true), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo', true), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logradouros', true), array('controller' => 'logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proprietarios', true), array('controller' => 'proprietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proprietario', true), array('controller' => 'proprietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alugueis', true), array('controller' => 'alugueis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluguel', true), array('controller' => 'alugueis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas', true), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva', true), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Valor Alugueis', true), array('controller' => 'valor_alugueis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valor Aluguel', true), array('controller' => 'valor_alugueis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas', true), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda', true), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visitas', true), array('controller' => 'visitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visita', true), array('controller' => 'visitas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('controller' => 'caracteristicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristica', true), array('controller' => 'caracteristicas', 'action' => 'add')); ?> </li>
	</ul>
</div>