<div class="bairros view">
<h2><?php  __('Bairro');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bairro['Bairro']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($bairro['Cidade']['nome'], array('controller' => 'cidades', 'action' => 'view', $bairro['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bairro['Bairro']['nome']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bairro', true), array('action' => 'edit', $bairro['Bairro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Bairro', true), array('action' => 'delete', $bairro['Bairro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bairro['Bairro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logradouros', true), array('controller' => 'logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Logradouros');?></h3>
	<?php if (!empty($bairro['Logradouro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Bairro Id'); ?></th>
		<th><?php __('Tipo Logradouro Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Cep'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bairro['Logradouro'] as $logradouro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $logradouro['id'];?></td>
			<td><?php echo $logradouro['bairro_id'];?></td>
			<td><?php echo $logradouro['tipo_logradouro_id'];?></td>
			<td><?php echo $logradouro['nome'];?></td>
			<td><?php echo $logradouro['cep'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'logradouros', 'action' => 'view', $logradouro['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'logradouros', 'action' => 'edit', $logradouro['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'logradouros', 'action' => 'delete', $logradouro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $logradouro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
