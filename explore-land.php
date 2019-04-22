<?php
session_start();
require_once('connect.php');
require_once('user_info.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Russo+One|Cormorant+Garamond|Taviraj" rel="stylesheet">

	<link href="elveron-style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
	
<?php require_once('menu.php'); ?>
<?php require_once('topbar.php'); ?>
	
	
	<div class="explore-land"><form method="post" action="http://localhost:8888/elveron/explore-land-calc.php">
		<h1>Explore Land</h1>
		<p>Exploration starts at a cost of "variabe" gold and 2 pesants per acre. You can afford to explore "variable" acres (estimate). You can only choose which land types to explore the first 120 hours, after that your exploration gain will be random. If you wish, you can check your <a href="land-manager">Land Manager</a> to get a more detailed description of your lands. If you need help, visit the <a href="exploration-guide">Exploration Guide</a> page. You can also take your land bonus now by clicking <a href="land-bonus">Here</a>.<br><a style="color: red">If you explore in protection then you will need a defense of at least 3* your land size before you leave protection, otherwise your kingdom will be restarted.</p> 
		<table class="explore-land-table">
			<tr>
    			<td>Name</td>
    			<td>Owned</td>
    			<td>Incoming</td>
   				<td>Explore for:</td>
  			</tr>
  			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Grassland</td>
    			<td id="explore-land-list"><?php echo $grassland_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="grassland_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Mountain</td>
    			<td id="explore-land-list"><?php echo $mountain_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="mountain_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Forest</td>
    			<td id="explore-land-list"><?php echo $forest_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="forest_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Highland</td>
    			<td id="explore-land-list"><?php echo $highland_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="highland_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Swamp</td>
    			<td id="explore-land-list"><?php echo $swamp_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="swamp_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label">Tundra</td>
    			<td id="explore-land-list"><?php echo $tundra_barren;?></td>
    			<td id="explore-land-list">0</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="tundra_barren" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  		</table>
  		<h2><input id="explore-button" type="submit" value="explore!"></h2>
  	</form>
	</div>

</body>


</html>