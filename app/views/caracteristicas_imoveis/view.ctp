<div class="caracteristicasImoveis view">
<h2><?php  __('Caracteristicas Imovel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristicasImovel['CaracteristicasImovel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imovel Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristicasImovel['CaracteristicasImovel']['imovel_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Caracteristica Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristicasImovel['CaracteristicasImovel']['caracteristica_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristicasImovel['CaracteristicasImovel']['numero']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caracteristicas Imovel', true), array('action' => 'edit', $caracteristicasImovel['CaracteristicasImovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Caracteristicas Imovel', true), array('action' => 'delete', $caracteristicasImovel['CaracteristicasImovel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $caracteristicasImovel['CaracteristicasImovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas Imoveis', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristicas Imovel', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
