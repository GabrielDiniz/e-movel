<div class="imoveis form">
<?php echo $this->Form->create('Imovel');?>
	<fieldset>
		<legend><?php __('Edit Imovel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('logradouro_id');
		echo $this->Form->input('proprietario_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('tipo_contrato');
		echo $this->Form->input('complemento');
		echo $this->Form->input('observacao');
		echo $this->Form->input('Caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Imovel.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Imovel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('action' => 'index'));?></li>
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