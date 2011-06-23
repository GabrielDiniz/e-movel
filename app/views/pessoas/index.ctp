<div class="pessoas index">
	<h2><?php __('Pessoas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('logradouro_id');?></th>
			<th><?php echo $this->Paginator->sort('numero');?></th>
			<th><?php echo $this->Paginator->sort('complemento');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pessoas as $pessoa):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pessoa['Pessoa']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoa['Logradouro']['nome'], array('controller' => 'logradouros', 'action' => 'view', $pessoa['Logradouro']['id'])); ?>
		</td>
		<td><?php echo $pessoa['Pessoa']['numero']; ?>&nbsp;</td>
		<td><?php echo $pessoa['Pessoa']['complemento']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pessoa['Pessoa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pessoa['Pessoa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Logradouros', true), array('controller' => 'logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Fisicas', true), array('controller' => 'pessoa_fisicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Fisica', true), array('controller' => 'pessoa_fisicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Juridicas', true), array('controller' => 'pessoa_juridicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Juridica', true), array('controller' => 'pessoa_juridicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proprietarios', true), array('controller' => 'proprietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proprietario', true), array('controller' => 'proprietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>