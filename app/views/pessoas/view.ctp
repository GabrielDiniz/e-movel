<div class="pessoas view">
<h2><?php  __('Pessoa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoa['Pessoa']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Logradouro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pessoa['Logradouro']['nome'], array('controller' => 'logradouros', 'action' => 'view', $pessoa['Logradouro']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoa['Pessoa']['numero']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Complemento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pessoa['Pessoa']['complemento']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pessoa', true), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Pessoa', true), array('action' => 'delete', $pessoa['Pessoa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pessoa['Pessoa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php __('Related Clientes');?></h3>
	<?php if (!empty($pessoa['Cliente'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Cliente']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Cliente']['pessoa_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Cliente', true), array('controller' => 'clientes', 'action' => 'edit', $pessoa['Cliente']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Pessoa Fisicas');?></h3>
	<?php if (!empty($pessoa['PessoaFisica'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica']['pessoa_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica']['nome'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cpf');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica']['cpf'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rg');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica']['rg'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __(' Nascimento');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaFisica'][' nascimento'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Pessoa Fisica', true), array('controller' => 'pessoa_fisicas', 'action' => 'edit', $pessoa['PessoaFisica']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Pessoa Juridicas');?></h3>
	<?php if (!empty($pessoa['PessoaJuridica'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaJuridica']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaJuridica']['pessoa_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Razao Social');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaJuridica']['razao_social'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome Fantasia');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaJuridica']['nome_fantasia'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cnpj');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['PessoaJuridica']['cnpj'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Pessoa Juridica', true), array('controller' => 'pessoa_juridicas', 'action' => 'edit', $pessoa['PessoaJuridica']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Proprietarios');?></h3>
	<?php if (!empty($pessoa['Proprietario'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Proprietario']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Proprietario']['pessoa_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Proprietario', true), array('controller' => 'proprietarios', 'action' => 'edit', $pessoa['Proprietario']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($pessoa['Usuario'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Usuario']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pessoa Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Usuario']['pessoa_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grupo Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Usuario']['grupo_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Login');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Usuario']['login'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Senha');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $pessoa['Usuario']['senha'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Usuario', true), array('controller' => 'usuarios', 'action' => 'edit', $pessoa['Usuario']['id'])); ?></li>
			</ul>
		</div>
	</div>
	