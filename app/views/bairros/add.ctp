<div class="bairros form">
<?php echo $this->Form->create('Bairro');?>
	<fieldset>
		<legend><?php __('Add Bairro'); ?></legend>
	<?php
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bairros', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logradouros', true), array('controller' => 'logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add')); ?> </li>
	</ul>
</div>