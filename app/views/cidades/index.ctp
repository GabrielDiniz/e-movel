<div class="cidades index">
	<h2><?php __('Cidades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cidades as $cidade):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($cidade['Estado']['sigla'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['id'])); ?>
		</td>
		<td><?php echo $cidade['Cidade']['nome']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $cidade['Cidade']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $cidade['Cidade']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cidade['Cidade']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cidade', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros', true), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro', true), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
	</ul>
</div>