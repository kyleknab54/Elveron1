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
	
	<div class="explore-land"><form method="post" action="http://localhost:8888/elveron/construction_calc.php">
		<h1>Construction and Buildings</h1>
		<p>Each building will cost you "variable" Gold and "variable" Lumber. You can afford to construct "variable" buildings. You can also <a href="destroy">destroy</a> unwanted buildings. If you want an advanced description of your kingdoms structures, consult your <a href="buildings-manager">Buildings Manager</a>, or read about <a href="buildings-and-population">Buildings and Population</a> in the guide.</p> 
		<table class="explore-land-table">
      <tr>
    			<td>Grassland (<?php echo $grassland_barren;?> barren acres)</td>
    			<td>Mountain (<?php echo $mountain_barren;?> barren acres)</td>
  			</tr>
    </table>
    <table class="explore-land-table">
      <tr>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
        </tr>
  			<tr>
  				<td id="explore-land-list-label">Farm</td>
    			<td id="explore-land-list"><?php echo $farm;?></td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="farm" placeholder="0" min="1" max="<?php echo $grassland_barren;?>">
   				</td>
          <td id="explore-land-list-label">Gold Mine</td>
          <td id="explore-land-list"><?php echo $gold_mine;?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="gold-mine" placeholder="0" min="1"max="<?php echo $mountain_barren;?>">
          </td>
   			</tr>
   			<tr>
          <td id="explore-land-list-label">Courthouse</td>
          <td id="explore-land-list"><?php echo $courthouse;?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="courthouse" placeholder="0" min="1" max="<?php echo $grassland_barren;?>">
          </td>
          <td id="explore-land-list-label">Iron Mine</td>
          <td id="explore-land-list"><?php echo $iron_mine;?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="iron-mine" placeholder="0" min="1" max="<?php echo $mountain_barren;?>">
          </td>
        </tr>
   			<tr>
          <td id="explore-land-list-label">Alchemy</td>
          <td id="explore-land-list"><?php echo $alchemy?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="alchemy" placeholder="0" min="1" max="<?php echo $grassland_barren;?>">
          </td>
          <td id="explore-land-list-label">Home</td>
          <td id="explore-land-list"><?php echo $home?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="home" placeholder="0" min="1" max="<?php echo $mountain_barren;?>">
          </td>
        </tr>
   			<tr>
          <td id="explore-land-list-label">Academy</td>
          <td id="explore-land-list"><?php echo $academy?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="academy" placeholder="0" min="1" max="<?php echo $grassland_barren;?>">
        </tr>
      </table>
   		<tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
      <table class="explore-land-table">
      <tr>
          <td>Forest (<?php echo $forest_barren;?> barren acres)</td>
          <td>Highland (<?php echo $highland_barren;?> barren acres)</td>
        </tr>
    </table>
    <table class="explore-land-table">
      <tr>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Sawmill</td>
          <td id="explore-land-list"><?php echo $sawmill?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="sawmill" placeholder="0" min="1" max="<?php echo $forest_barren;?>">
          </td>
          <td id="explore-land-list-label">Diamond Mine</td>
          <td id="explore-land-list"><?php echo $diamond_mine?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="diamond-mine" placeholder="0" min="1" max="<?php echo $highland_barren;?>">
          </td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-label">Guild Quarter</td>
          <td id="explore-land-list"><?php echo $guild_quarter?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="guild-quarter" placeholder="0" min="1" max="<?php echo $highland_barren;?>">
          </td>
        </tr>
          <tr>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-label">Tavern</td>
          <td id="explore-land-list"><?php echo $tavern?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="tavern" placeholder="0" min="1" max="<?php echo $highland_barren;?>">
          </td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <table class="explore-land-table">
      <tr>
          <td>Swamp (<?php echo $swamp_barren;?> barren acres)</td>
          <td>Tundra (<?php echo $tundra_barren;?> barren acres)</td>
        </tr>
    </table>
    <table class="explore-land-table">
      <tr>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
          <td>Name</td>
          <td>Owned</td>
          <td>Build</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Tower</td>
          <td id="explore-land-list"><?php echo $tower?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="tower" placeholder="0" min="1" max="<?php echo $swamp_barren;?>">
          </td>
          <td id="explore-land-list-label">Frost Temple</td>
          <td id="explore-land-list"><?php echo $frost_temple?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="frost-temple" placeholder="0" min="1" max="<?php echo $tundra_barren;?>">
          </td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-label">Slave Pit</td>
          <td id="explore-land-list"><?php echo $slave_pit?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="slave-pit" placeholder="0" min="1" max="<?php echo $tundra_barren;?>">
          </td>
        </tr>
          <tr>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-spacer">z</td>
          <td id="explore-land-list-label">Spire</td>
          <td id="explore-land-list"><?php echo $spire?></td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="Spire" placeholder="0" min="1" max="<?php echo $tundra_barren;?>">
          </td>
        </tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  		</table>
  		<h2><input id="explore-button" type="submit" value="Construct"></h2>
  	</form>
	</div>

</body>


</html>