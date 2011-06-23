<div class="valorAlugueis form">
<?php echo $this->Form->create('ValorAluguel');?>
	<fieldset>
		<legend><?php __('Add Valor Aluguel'); ?></legend>
	<?php
		echo $this->Form->input('imovel_id');
		echo $this->Form->input('data_inicio');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Valor Alugueis', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
	</ul>
</div>