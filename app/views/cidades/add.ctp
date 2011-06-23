<div class="cidades form">
<?php echo $this->Form->create('Cidade');?>
	<fieldset>
		<legend><?php __('Add Cidade'); ?></legend>
	<?php
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cidades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros', true), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro', true), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
	</ul>
</div>