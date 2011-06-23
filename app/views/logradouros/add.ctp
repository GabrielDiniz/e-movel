<?php
	echo $this->Javascript->codeBlock('$(function()
		{
			$("#LogradouroCidadeId").change( function(event)
					{
						$("#LogradouroBairroId").load("/emovel/bairros/porcidade/"+$("#LogradouroCidadeId option:selected").attr("value"));
					}
				);
		}
	)');
	?>
<div class="logradouros form">
<?php echo $this->Form->create('Logradouro');?>
	<fieldset>
		<legend><?php __('Add Logradouro'); ?></legend>
	<?php
		echo $this->Form->input('cidade_id');
		echo $this->Form->input('bairro_id');
		echo $this->Form->input('tipo_logradouro_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cep');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Logradouros', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Bairros', true), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro', true), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Logradouros', true), array('controller' => 'tipo_logradouros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Logradouro', true), array('controller' => 'tipo_logradouros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis', true), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel', true), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>