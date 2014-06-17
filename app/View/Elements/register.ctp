<div id="add">

<!-- <img src="img/register.jpg" height="50" width="260"> -->
<center>
 <?php 
print $this->Html->link(
    $this->Html->image('register.png'), 'http://localhost/WeGame/add', array('escape' => false, 'title' =>'New user')
);?> 
</center>
</div>