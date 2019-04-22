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

<div class="explore-land">
		<h1>Kingdom Managers</h1>
		<p>Click a link below to view the manager information.</p> 
		<table class="explore-land-table">
			<tr>
    			<td class="main-manager">Main</td>
    			<td class="land-manager">Land</td>
    			<td class="building-manager">Building</td>
   				<td class="military-manager">Military</td>
   				<td class="magic-manager">Magic</td>
   				<td class="heros-manager">Heros</td>
   				<td class="bonuses-manager">Bonuses</td>
   				<td class="statistics-manager">Statistics</td>
  			</tr>
  		</table>

	<div class="manager" id="main-manager">
    <h1>Production Manager</h1>
    <table class="explore-land-table">
      <tr>
          <td>Name</td>
          <td>Production/ hr</td>
          <td>Consumption/ hr</td>
          <td>Decay/ hr</td>
          <td>Change/ hr</td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Gold</td>
          <td id="explore-land-list"><?php echo $gold_hour;?></td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list"><?php echo $gold_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Lumber</td>
          <td id="explore-land-list"><?php echo $lumber_hour;?></td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list"><?php echo $lumber_decay;?></td>
          <td id="explore-land-list"><?php echo $lumber_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Iron Ore</td>
          <td id="explore-land-list"><?php echo $iron_hour;?></td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list"><?php echo $iron_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Diamonds</td>
          <td id="explore-land-list"><?php echo $diamonds_hour;?></td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list"><?php echo $diamonds_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Magic Dust</td>
          <td id="explore-land-list"><?php echo $magic_dust_hour;?></td>
          <td id="explore-land-list">0</td>
          <td id="explore-land-list"><?php echo $magic_dust_decay;?></td>
          <td id="explore-land-list"><?php echo $magic_dust_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
        <tr>
          <td id="explore-land-list-label">Food</td>
          <td id="explore-land-list"><?php echo $food_hour;?></td>
          <td id="explore-land-list"><?php echo $food_consumption;?></td>
          <td id="explore-land-list"><?php echo $food_decay;?></td>
          <td id="explore-land-list"><?php echo $food_hour_change;?></td>
        </tr>
        <tr>
          <td id="explore-land-list-spacer">z</td>
        </tr>
      </table>
  

  </div>
	<div class="manager" id="land-manager">land</div>
	<div class="manager" id="building-manager">building</div>
	<div class="manager" id="military-manager">military</div>
	<div class="manager" id="magic-manager">magic</div>
	<div class="manager" id="heros-manager">heros</div>
	<div class="manager" id="bonuses-manager">bonuses</div>
	<div class="manager" id="statistics-manager">box</div>

	</div>	

<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	$( document ).ready(function() {

    $('.main-manager').click(function() {
    	$('#main-manager').toggle();
    })

     $('.land-manager').click(function() {
    	$('#land-manager').toggle();
    })

     $('.building-manager').click(function() {
    	$('#building-manager').toggle();
    })

     $('.military-manager').click(function() {
    	$('#military-manager').toggle();
    })

    $('.magic-manager').click(function() {
    	$('#magic-manager').toggle();
    })

     $('.heros-manager').click(function() {
    	$('#heros-manager').toggle();
    })

     $('.bonuses-manager').click(function() {
    	$('#bonuses-manager').toggle();
    })

     $('.statistics-manager').click(function() {
    	$('#statistics-manager').toggle();
    })

   

});
  </script>
</body>


