
<?php
session_start()
require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="elveron-style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
	

<!--Code below contains the sidebar and topbar template-->
	<div class="container-sidebar">
		<image class="sidebar-logo" src="sidebar-logo-elveron.jpg"></image>
		<div class="sidebar-nav">
			<a href="http://localhost:8888/elveron/main.php"> Main</a>
			<br>
			<a href="http://localhost:8888/elveron/options.php">Options</a>
			<br>
			<a href="http://localhost:8888/elveron/managers.php">Managers</a>
			<br>
			<a href="http://localhost:8888/elveron/Guide.php">Guide</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/explore-land.php">Explore Land</a>
			<br>
			<a href="http://localhost:8888/elveron/rezone-land.php">Rezone Land</a>
			<br>
			<a href="http://localhost:8888/elveron/construction.php">Construction</a>
			<br>
			<a href="http://localhost:8888/elveron/improvements.php">Improvements</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/magic.php">Magic</a>
			<br>
			<a href="http://localhost:8888/elveron/spy-operations.php">Spy Operations</a>
			<br>
			<a href="http://localhost:8888/elveron/train-military.php">Train Military</a>
			<br>
			<a href="http://localhost:8888/elveron/attack.php">Attack!</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/realm.php">Realm</a>
			<br>
			<a href="http://localhost:8888/elveron/government.php">Government</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/ruler-actions.php">Ruler Actions</a>
			<br>
			<a href="http://localhost:8888/elveron/use-skill-points.php">Use Skill Points</a>
			<br>
			<a href="http://localhost:8888/elveron/ruler-inventory.php">Ruler Inventory</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/relic-quests.php">Relic Quests</a>
			<br>
			<a href="http://localhost:8888/elveron/bazaar.php">Bazaar</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/messages.php">Messages</a>
			<br>
			<a href="http://localhost:8888/elveron/realm-council.php">Realm Council</a>
			<br>
			<a href="http://localhost:8888/elveron/global-council.php">Global Council</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron/newspaper.php">Newspaper</a>
			<br>
			<a href="http://localhost:8888/elveron/rankings.php">Rankings</a>
			<br>
			<br>
			<a href="http://localhost:8888/elveron">Log Out</a>

		</div>
	</div>

	<div class="resources-topbar">
		<table class="topbar-table">
			<tr>
    			<td>Peasants</td>
    			<td id="user-resources">500</td>
    			<td>Lumber</td>
    			<td id="user-resources">500</td>
    			<td>Magic Dust</td>
    			<td id="user-resources">500</td>
    			<td>Corruption</td>
    			<td id="user-resources">500</td>
    			<td>Level</td>
    			<td id="user-resources">500</td>
  			</tr>
  			<tr>
    			<td>Worker</td>
    			<td id="user-resources"><?php echo $troop7;?></td>
    			<td>Iron Ore</td>
    			<td id="user-resources">500</td>
    			<td>Diamonds</td>
    			<td id="user-resources">500</td>
    			<td>Land</td>
    			<td id="user-resources">500</td>
    			<td>Turns</td>
    			<td id="user-resources">500</td>
  			</tr>
  			<tr>
    			<td>Gold</td>
    			<td id="user-resources">750</td>
    			<td>Food</td>
    			<td id="user-resources">500</td>
    			<td>Runes</td>
    			<td id="user-resources">500</td>
    			<td>Networth</td>
    			<td id="user-resources">500</td>
    			<td>Expierience</td>
    			<td id="user-resources">500</td>
  			</tr>
		</table>
	</div>
	<div class="main">
		<h1>MAGAAAAAAAA</h1>
	</div>

</body>
</html>