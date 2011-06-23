<div class="proprietarios form">
<?php echo $this->Form->create('Proprietario');?>
	<fieldset>
		<legend><?php __('Edit Proprietario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Proprietario.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Proprietario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proprietarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
	</ul>
</div>