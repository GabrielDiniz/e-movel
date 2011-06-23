<div class="caracteristicas form">
<?php echo $this->Form->create('Caracteristica');?>
	<fieldset>
		<legend><?php __('Edit Caracteristica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Imovel');
		echo $this->Form->input('Tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Caracteristica.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Caracteristica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos', true), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo', true), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>