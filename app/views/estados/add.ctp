<div class="estados form">
<?php echo $this->Form->create('Estado');?>
	<fieldset>
		<legend><?php __('Add Estado'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('sigla');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cidades', true), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade', true), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>