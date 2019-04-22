<?php
session_start();
require_once('connect.php');
require_once('user_info.php');
?>

<!DOCTYPE html>
<html>
<head>
  	<link href="https://fonts.googleapis.com/css?family=Russo+On|Cormorant+Garamond|Taviraj" rel="stylesheet">

	<link href="elveron-style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
	<?php require_once('menu.php'); ?>
<?php require_once('topbar.php'); ?>
	
	<div class="explore-land"><form method="post" action="http://localhost:8888/elveron/train-military-calc.php">
		<h1>Train Military</h1>
		<p>All troops require one Trainee in addition to the specefied resources (exceptions might exist for some races), except for Trainees which require one peasant each. You cannot train more Trainees if you have below 1000 peasants. You can also throw your military units into the <a href="sacrificial-pit">sacrificial</a> pit to please the gods if you so wish. You can find a more detailed description of your military and their whereabouts in the <a href="military-manager">Military Manager</a>. If you need help, visit the <a href="military-guide">Military Guide</a>.</p> 
		<table class="explore-land-table">
			<tr>
    			<td>Name</td>
    			<td>Trained</td>
    			<td>In Training</td>
   				<td>Cost Per Unit</td>
   				<td>Max Trainable</td>
   				<td>Train</td>
  			</tr>
  			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop1name;?><div class="popup"> Attack: <?php echo $troop1attack;?><br/> Defense: <?php echo $troop1defense; ?><br/> Return Time: <?php echo $troop1return; ?><br/> Train Time: <?php echo $troop1train; ?><br/> Casualties: <?php echo $troop1casualties; ?><br/> Mage Power: <?php echo $troop1mages; ?><br/> Spy Power: <?php echo $troop1spies; ?></div></td>
    			<td id="explore-land-list"><?php echo $troop1; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop1" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop2name;?><div class="popup"> Attack: <?php echo $troop2attack;?><br/> Defense: <?php echo $troop2defense; ?><br/> Return Time: <?php echo $troop2return; ?><br/> Train Time: <?php echo $troop2train; ?><br/> Casualties: <?php echo $troop2casualties; ?><br/> Mage Power: <?php echo $troop2mages; ?><br/> Spy Power: <?php echo $troop2spies; ?></div></td>
    			<td id="explore-land-list"><?php echo $troop2; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop2" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop3name; ?></td>
    			<td id="explore-land-list"><?php echo $troop3; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop3" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop4name; ?></td>
    			<td id="explore-land-list"><?php echo $troop4; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop4" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop5name; ?></td>
    			<td id="explore-land-list"><?php echo $troop5; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop5" placeholder="0" min="1">
   				</td>
   			</tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  			<tr>
  				<td id="explore-land-list-label"><?php echo $troop6name; ?></td>
    			<td id="explore-land-list"><?php echo $troop6; ?></td>
    			<td id="explore-land-list">50</td>
    			<td id="explore-land-list">100g/30ir</td>
    			<td id="explore-land-list">50</td>
   				<td id="explore-land-list">
   					<input id="explore-form" type="number" name="troop6" placeholder="0" min="1">
   				</td>
   			</tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label"><?php echo $troop7name; ?></td>
          <td id="explore-land-list"><?php echo $troop7; ?></td>
          <td id="explore-land-list">50</td>
          <td id="explore-land-list">100g/30ir</td>
          <td id="explore-land-list">50</td>
          <td id="explore-land-list">
            <input id="explore-form" type="number" name="troop7" placeholder="0" min="1">
          </td>
        </tr>
   			<tr>
  				<td id="explore-land-list-spacer">z</td>
   			</tr>
  		</table>
  		<h2><input id="explore-button" type="submit" value="Train Troops"></h2>
  	</form>
	</div>

  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $( document ).ready(function() {

    $('#explore-land-list-label').hover(function() {
      $('.popup').toggle();
    })

  })

  </script>

</body>


</html>