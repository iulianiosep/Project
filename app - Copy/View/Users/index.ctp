



<div id="game">


<div id="p1">
			<!--<a href="http://google.ro"><img src="img/oracle.png"  alt="asd"></a> -->
			<?php print $this->Html->link(
    $this->Html->image('oracle.png'), 'http://localhost/WeGame/oracle', array('escape' => false, 'title' =>'Oracle')
);

?>
	</div>
	
	<div id="p2">
	<?php print $this->Html->link(
    $this->Html->image('ibm.png'), 'http://localhost/WeGame/ibm', array('escape' => false, 'title' =>'IBM')
);

?>
			
	</div>
	
	<div id="p3">
			<?php print $this->Html->link(
    $this->Html->image('microsoft.png'), 'http://localhost/WeGame/microsoft', array('escape' => false, 'title' =>'Microsoft')
);

?>
	</div>
	
	<div id="p4">
			<?php print $this->Html->link(
    $this->Html->image('google.png'), 'http://localhost/WeGame/google', array('escape' => false, 'title' =>'Google')
);

?>
	</div>
</div>








<!-- End Save for Web Slices -->
</body>
</html>