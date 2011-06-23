<div class="pessoaJuridicas index">
	<h2><?php __('Pessoa Juridicas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id');?></th>
			<th><?php echo $this->Paginator->sort('razao_social');?></th>
			<th><?php echo $this->Paginator->sort('nome_fantasia');?></th>
			<th><?php echo $this->Paginator->sort('cnpj');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pessoaJuridicas as $pessoaJuridica):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pessoaJuridica['PessoaJuridica']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoaJuridica['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoaJuridica['Pessoa']['id'])); ?>
		</td>
		<td><?php echo $pessoaJuridica['PessoaJuridica']['razao_social']; ?>&nbsp;</td>
		<td><?php echo $pessoaJuridica['PessoaJuridica']['nome_fantasia']; ?>&nbsp;</td>
		<td><?php echo $pessoaJuridica['PessoaJuridica']['cnpj']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pessoaJuridica['PessoaJuridica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pessoaJuridica['PessoaJuridica']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pessoaJuridica['PessoaJuridica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pessoaJuridica['PessoaJuridica']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pessoa Juridica', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas', true), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa', true), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>