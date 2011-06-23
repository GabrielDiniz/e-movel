<div class="tipos form">
<?php echo $this->Form->create('Tipo');?>
	<fieldset>
		<legend><?php __('Edit Tipo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('Caracteristica');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tipo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Caracteristicas', true), array('controller' => 'caracteristicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Caracteristica', true), array('controller' => 'caracteristicas', 'action' => 'add')); ?> </li>
	</ul>
</div>