<div class="visitas form">
<?php echo $this->Form->create('Visita');?>
	<fieldset>
		<legend><?php __('Add Visita'); ?></legend>
	<?php
		echo $this->Form->input('imovel_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('data_visita');
		echo $this->Form->input('data_agendamento');
		echo $this->Form->input('confirmacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Visitas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>