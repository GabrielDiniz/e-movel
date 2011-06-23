<div class="caracteristicas view">
<h2><?php  __('Caracteristica');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristica['Caracteristica']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $caracteristica['Caracteristica']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Caracteristica', true), array('action' => 'edit', $caracteristica['Caracteristica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Caracteristica', true), array('action' => 'delete', $caracteristica['Caracteristica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $caracteristica['Caracteristica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristica', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos', true), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo', true), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Imoveis');?></h3>
	<?php if (!empty($caracteristica['Imovel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tipo Id'); ?></th>
		<th><?php __('Logradouro Id'); ?></th>
		<th><?php __('Proprietario Id'); ?></th>
		<th><?php __('Numero'); ?></th>
		<th><?php __('Tipo Contrato'); ?></th>
		<th><?php __('Complemento'); ?></th>
		<th><?php __('Observacao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($caracteristica['Imovel'] as $imovel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $imovel['id'];?></td>
			<td><?php echo $imovel['tipo_id'];?></td>
			<td><?php echo $imovel['logradouro_id'];?></td>
			<td><?php echo $imovel['proprietario_id'];?></td>
			<td><?php echo $imovel['numero'];?></td>
			<td><?php echo $imovel['tipo_contrato'];?></td>
			<td><?php echo $imovel['complemento'];?></td>
			<td><?php echo $imovel['observacao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'imoveis', 'action' => 'view', $imovel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'imoveis', 'action' => 'edit', $imovel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'imoveis', 'action' => 'delete', $imovel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $imovel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tipos');?></h3>
	<?php if (!empty($caracteristica['Tipo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($caracteristica['Tipo'] as $tipo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tipo['id'];?></td>
			<td><?php echo $tipo['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tipos', 'action' => 'view', $tipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tipos', 'action' => 'edit', $tipo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tipos', 'action' => 'delete', $tipo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipo', true), array('controller' => 'tipos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
