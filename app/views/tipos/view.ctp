<div class="tipos view">
<h2><?php  __('Tipo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipo['Tipo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipo['Tipo']['descricao']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo', true), array('action' => 'edit', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipo', true), array('action' => 'delete', $tipo['Tipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('controller' => 'caracteristicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristica', true), array('controller' => 'caracteristicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Imoveis');?></h3>
	<?php if (!empty($tipo['Imovel'])):?>
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
		foreach ($tipo['Imovel'] as $imovel):
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
	<h3><?php __('Related Caracteristicas');?></h3>
	<?php if (!empty($tipo['Caracteristica'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Descricao'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipo['Caracteristica'] as $caracteristica):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $caracteristica['id'];?></td>
			<td><?php echo $caracteristica['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'caracteristicas', 'action' => 'view', $caracteristica['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'caracteristicas', 'action' => 'edit', $caracteristica['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'caracteristicas', 'action' => 'delete', $caracteristica['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $caracteristica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Caracteristica', true), array('controller' => 'caracteristicas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
