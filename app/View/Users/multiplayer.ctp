<div id="multiplayer">

<center>
	<img border="0" src="img/logo-2.png" >
<h2>Find your opponent</h2>
<p> defeat him and be the best !</p>
</center>

<p> Opponent Username: </p>
<input type="text" id="Fname" name="Name" placeholder="Opponent name"/> <br>
<p>Choose build: </p>
<input list="build" placeholder="Build" name="listinput"/>
			<datalist id="build">
  				<option value="Oracle">
  				<option value="Google">
 				<option value="IBM">
  				<option value="Micorsoft">
			</datalist> </br>
<p>Choose Floor: </p>

<input list="levels" placeholder="Floor" name="listinput"/>
			<datalist id="levels">
  				<option value="Floor 1">
  				<option value="Floor 2">
 				<option value="Floor 3">
			</datalist> </br></br>

			<?php echo $this->Form->end(__('Invite')); ?>

</div>