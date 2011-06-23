<div class="pessoaFisicas view">
<h2><?php  __('Pessoa Fisica');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaFisica['PessoaFisica']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pessoaFisica['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoaFisica['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaFisica['PessoaFisica']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cpf'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaFisica['PessoaFisica']['cpf']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rg'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaFisica['PessoaFisica']['rg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __(' Nascimento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoaFisica['PessoaFisica'][' nascimento']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pessoa Fisica', true), array('action' => 'edit', $pessoaFisica['PessoaFisica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pessoa Fisica', true), array('action' => 'delete', $pessoaFisica['PessoaFisica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pessoaFisica['PessoaFisica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoa Fisicas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa Fisica', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
