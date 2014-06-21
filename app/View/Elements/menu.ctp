<ul id="menu">


	<li class="dashboard">
		<a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'index'))?>"><span class="Home"></span>Home</a>
	</li>

	<li class="guide">
		<!-- <a href="#"><span>transfer icon</span> Rank</a>  -->
		<a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'rank'))?>"><span class="transfer icon"></span>Rank</a>


	</li>

	<li class="westernUnion">
		<a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'multiplayer'))?>" class="modify-height"><span>westernUnion icon</span>Challenge</a>
	</li>

	<li class="mymoney">
		<a href="<?php echo Router::url(array('controller'=>'users', 'action'=>'doc'))?>" class="modify-height"><span>investments icon</span>Documentation</a>
	</li>

	
	<li class="automatic">
		<a href="<?php echo Router::url(array('controller'=>'posts', 'action'=>'index'))?>"><span class="Home"></span>News</a>
	</li>	
	
	
	
	

	
	
	

</ul>