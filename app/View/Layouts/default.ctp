



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ro">


<head>
	<?php echo $this->Html->charset(); ?>
	<title>WeGame</title>


	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('css');


	print $this->Html->script('quizbuilder-jquery');
	print $this->Html->script('quizflip');
	
	

	?>
</head>


<body>
	<div id="header">
	

	</div>

	<!-- end header -->

	<div id="wrapper" class="container">
		
		<div id="masthead">
			<div id="logo">
				
				
				
			</div>


			





		</div>
		
		<div id="content" class="clr">
			<div id="side">
				

				


				
				
				<?php
				if($this->Session->read('Auth.User.username') == "Administrator"){

				echo $this->element('admin_panel');


			
			}

			else{


				 echo $this->element('menu'); 

			}
				?>
				<?php 

				if($this->Session->check('Auth.User')){

					echo $this->element('profile');
				

					

				}
				else{

					echo $this->element('login');
					echo $this->element('register');	
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





	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?php echo $this->fetch('scriptBottom'); ?>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>