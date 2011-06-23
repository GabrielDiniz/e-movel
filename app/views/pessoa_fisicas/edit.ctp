<div class="pessoaFisicas form">
<?php echo $this->Form->create('PessoaFisica');?>
	<fieldset>
		<legend><?php __('Edit Pessoa Fisica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input(' nascimento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PessoaFisica.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PessoaFisica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoa Fisicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>