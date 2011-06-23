<div class="logradouros index">
	<h2><?php __('Logradouros');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Tipo','tipo_logradouro_id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('bairro_id');?></th>
			<th>Cidade</th>
			<th><?php echo $this->Paginator->sort('CEP','cep');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	//pr($logradouros);
	$i = 0;
	foreach ($logradouros as $logradouro):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $logradouro['TipoLogradouro']['descricao']?>
		</td>
		<td><?php echo $logradouro['Logradouro']['nome']; ?>&nbsp;</td>
		<td>
			<?php echo $logradouro['Bairro']['nome']?>
		</td>
		<td><?php echo $logradouro['Bairro']['Cidade']['nome']; ?>&nbsp;</td>
		<td><?php echo $logradouro['Logradouro']['cep']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $logradouro['Logradouro']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $logradouro['Logradouro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $logradouro['Logradouro']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bairros', true), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro', true), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Logradouros', true), array('controller' => 'tipo_logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Logradouro', true), array('controller' => 'tipo_logradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>