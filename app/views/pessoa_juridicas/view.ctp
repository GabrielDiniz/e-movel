<div class="pessoaJuridicas view">
<h2><?php  __('Pessoa Juridica');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaJuridica['PessoaJuridica']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pessoaJuridica['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoaJuridica['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Razao Social'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaJuridica['PessoaJuridica']['razao_social']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome Fantasia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaJuridica['PessoaJuridica']['nome_fantasia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cnpj'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaJuridica['PessoaJuridica']['cnpj']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pessoa Juridica', true), array('action' => 'edit', $pessoaJuridica['PessoaJuridica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pessoa Juridica', true), array('action' => 'delete', $pessoaJuridica['PessoaJuridica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pessoaJuridica['PessoaJuridica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Juridicas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Juridica', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
