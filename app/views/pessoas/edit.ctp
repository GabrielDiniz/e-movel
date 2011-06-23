<div class="pessoas form">
<?php echo $this->Form->create('Pessoa');?>
	<fieldset>
		<legend><?php __('Edit Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('logradouro_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('complemento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Pessoa.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Pessoa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Logradouros', true), array('controller' => 'logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logradouro', true), array('controller' => 'logradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes', true), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente', true), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Fisicas', true), array('controller' => 'pessoa_fisicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Fisica', true), array('controller' => 'pessoa_fisicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Juridicas', true), array('controller' => 'pessoa_juridicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Juridica', true), array('controller' => 'pessoa_juridicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proprietarios', true), array('controller' => 'proprietarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proprietario', true), array('controller' => 'proprietarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>