<div class="pessoaJuridicas form">
<?php echo $this->Form->create('PessoaJuridica');?>
	<fieldset>
		<legend><?php __('Edit Pessoa Juridica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('razao_social');
		echo $this->Form->input('nome_fantasia');
		echo $this->Form->input('cnpj');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PessoaJuridica.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PessoaJuridica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoa Juridicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>