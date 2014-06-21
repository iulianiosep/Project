

<div class="users form">
<h1>TOP Players</h1>

<table>
    <thead>
		<tr>
			<th>Place</th>
			<th>Username  </th>
			<th>Score</th>

		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++; ?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
		
			<td><?php echo $count; ?></td>
			<td>
		
				<?php echo $this->Html->link($user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?>
				
			

			</td>
			<td style="text-align: center;"><?php echo $user['User']['score']; ?></td>
		
	
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>

<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo '&nbsp'; ?>
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
</div>				
