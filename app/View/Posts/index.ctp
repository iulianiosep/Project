<!-- File: /app/View/Posts/index.ctp -->

<h1>NEWS!</h1>
<!-- <?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?> -->
<table>
<tr>
<th></th>
<th>Title</th>
<th>Created</th>
</tr>


<?php foreach ($posts as $post): ?>
<tr>
<td><?php echo $post['Post']['id']; ?></td>
<td><?php echo $this->Html->link($post['Post']['title'],array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>

<td><?php echo $post['Post']['created']; ?></td>
</tr>
<?php endforeach; ?>


<?php 
    echo $form->create("Post",array('action' => 'search'));
    echo $form->input("q", array('label' => 'Search for'));
    echo $form->end("Search");
?> 

</table>

