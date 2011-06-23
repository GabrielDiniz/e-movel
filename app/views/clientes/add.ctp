<div class="clientes form">
<?php echo $this->Form->create('Cliente');?>
	<fieldset>
		<legend><?php __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('pessoa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alugueis', true), array('controller' => 'alugueis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluguel', true), array('controller' => 'alugueis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas', true), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva', true), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendas', true), array('controller' => 'vendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venda', true), array('controller' => 'vendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visitas', true), array('controller' => 'visitas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visita', true), array('controller' => 'visitas', 'action' => 'add')); ?> </li>
	</ul>
</div>