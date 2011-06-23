<div class="caracteristicasImoveis form">
<?php echo $this->Form->create('CaracteristicasImovel');?>
	<fieldset>
		<legend><?php __('Edit Caracteristicas Imovel'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('imovel_id');
		echo $this->Form->input('caracteristica_id');
		echo $this->Form->input('numero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CaracteristicasImovel.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CaracteristicasImovel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Caracteristicas Imoveis', true), array('action' => 'index'));?></li>
	</ul>
</div>