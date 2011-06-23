<div class="imoveis index">
	<h2><?php __('Imoveis');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Endereço</th>
			<th>Bairro</th>
			<th>Cidade</th>
			<th>Tipo</th>
			<th>Contrato</th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	
	foreach ($imoveis as $imovel):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $imovel['Logradouro']['TipoLogradouro']['descricao'].' '.$imovel['Logradouro']['nome'].', '. $imovel['Imovel']['numero'].' '.$imovel['Imovel']['complemento']?>
		</td>
		<td><?php echo $imovel['Logradouro']['Bairro']['nome']; ?>&nbsp;</td>
		<td><?php echo $imovel['Logradouro']['Bairro']['Cidade']['nome']; ?>&nbsp;</td>
		<td>
			<?php echo $imovel['Tipo']['descricao'];?>
		</td>
		<td><?php echo $imovel['Imovel']['tipo_contrato']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $imovel['Imovel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $imovel['Imovel']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $imovel['Imovel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $imovel['Imovel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Imovel', true), array('action' => 'add')); ?></li>
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
