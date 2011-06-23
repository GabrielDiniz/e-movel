<div class="alugueis form">
<?php echo $this->Form->create('Aluguel');?>
	<fieldset>
		<legend><?php __('Add Aluguel'); ?></legend>
	<?php
		echo $this->Form->input('imovel_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('data_inicio');
		echo $this->Form->input('data_final');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alugueis', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>