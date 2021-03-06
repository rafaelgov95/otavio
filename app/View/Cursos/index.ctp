<div class="cursos index">
	<h2><?php echo __('Cursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cursoDescricao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cursos as $curso): ?>
	<tr>
		<td><?php echo h($curso['Curso']['id']); ?>&nbsp;</td>
		<td><?php echo h($curso['Curso']['cursoDescricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curso['Curso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curso['Curso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curso['Curso']['id']), array(), __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplinas'), array('controller' => 'disciplinas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina'), array('controller' => 'disciplinas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planos'), array('controller' => 'planos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano'), array('controller' => 'planos', 'action' => 'add')); ?> </li>
	</ul>
</div>
