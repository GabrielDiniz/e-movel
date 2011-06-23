<div class="tipos form">
<?php echo $this->Form->create('Tipo');?>
	<fieldset>
		<legend><?php __('Add Tipo'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('Caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('controller' => 'caracteristicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristica', true), array('controller' => 'caracteristicas', 'action' => 'add')); ?> </li>
	</ul>
</div>