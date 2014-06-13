



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ro">


<head>
	<?php echo $this->Html->charset(); ?>
	<title>WeGame</title>


	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('css');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');

	?>
</head>


<body>
	<div id="header">


	</div>

	<!-- end header -->

	<div id="wrapper" class="container">
		
		<div id="masthead">
			<div id="logo">
				
				<!--    <img src="..img/logo.png" alt="Raiffeisen Bank" height="40" width="150"> -->
				
			</div>


			





		</div>
		
		<div id="content" class="clr">
			<div id="side">
				

				


				<?php echo $this->element('menu'); ?>
				

				<?php 

				if($this->Session->check('Auth.User')){
					echo $this->element('profile');;		
				}
				else{

					echo $this->element('login');
				}
				?>
				


				<div id="starters-guide-video" class="show-video-dialog">
					<?php echo $this->element('demo_game'); ?>	
				</div>
				

			</div><!-- end side -->
			
			<div class="modified-height" style="height: 419px;" id="main">
				<?php echo $this->fetch('content'); ?> 
			</div><!-- end main -->
			


		</div><!-- end content -->
		


		

		
		<div id="footer" class="clr">
			


			<?php echo $this->element('footer'); ?>



			
			
		</div>

	</div><!-- end wrapper -->






</body></html>