<?php

require('connect.php');

//take form field inputs from login screen
	$selection = $_POST['race'];	
			switch ($selection) {
				case 'human':
				$race = "human";
				$food = 25000;
				$gold = 25000;
				$lumber = 35000;
				$magic_dust = 15000;
				$diamonds = 1000;
				$iron_ore = 20000;
				$grassland_barren = 50;
				$mountain_barren = 50;
				$forest_barren = 50;
				$highland_barren = 50;
				$swamp_barren = 50;
				$tundra_barren = 50;
				$total_land = $grassland_barren + $mountain_barren + $forest_barren + $highland_barren + $swamp_barren + $tundra_barren;
				$troop1name = "footman";
				$troop2name = "pikeman";
				$troop3name = "longbowman";
				$troop4name = "knight";
				$troop5name = "battlemage";
				$troop6name = "agent";
				$troop7name = "worker";
				$troop1 = 150;
				$troop2 = 150;
				$troop3 = 10;
				$troop4 = 10;
				$troop5 = 10;
				$troop6 = 10;
				$troop7 = 800;
				$troop1attack = 3.0;
				$troop2attack = 0;
				$troop3attack = 3.0;
				$troop4attack = 7.0;
				$troop5attack = 3.0;
				$troop6attack = 0;
				$troop7attack = 0;
				  $troop1defense = 0;
		          $troop2defense = 3.0;
		          $troop3defense = 6.7;
		          $troop4defense = 4.0;
		          $troop5defense = 2.0;
		          $troop6defense = 0;
		          $troop7defense = 0;
		          $troop1return = 12;
		          $troop2return = 0;
		          $troop3return = 12;
		          $troop4return = 10;
		          $troop5return = 12;
		          $troop6return = 0;
		          $troop7return = 0;
		          $troop1train = 9;
		          $troop2train = 9;
		          $troop3train = 12;
		          $troop4train = 12;
		          $troop5train = 9;
		          $troop6train = 9;
		          $troop7train = 0;
		          $troop1casualties = 100;
		          $troop2casualties = 100;
		          $troop3casualties = 100;
		          $troop4casualties = 100;
		          $troop5casualties = 100;
		          $troop6casualties = 0;
		          $troop7casualties = 0;
		          $troop1mages = 0;
		          $troop2mages = 0;
		          $troop3mages = 0;
		          $troop4mages = 0;
		          $troop5mages = 1.0;
		          $troop6mages = 0;
		          $troop7mages = 0;
		          $troop1spies = 0;
		          $troop2spies = 0;
		          $troop3spies = 0;
		          $troop4spies = 0;
		          $troop5spies = 0;
		          $troop6spies = 1.0;
		          $troop7spies = 0;
				$farm = 0;
				$courthouse = 0;
				$alchemy = 0;
				$academy = 0;
				$gold_mine = 0;
				$iron_mine = 0;
				$home = 0;
				$sawmill = 0;
				$diamond_mine = 0;
				$guild_quarter = 0;
				$tavern = 0;
				$tower = 0;
				$frost_temple = 0;
				$slave_pit = 0;
				$spire = 0;
				$user = mysqli_real_escape_string($connection, $_POST['username']);
				$pass = mysqli_real_escape_string($connection, $_POST['password']);
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				break;

				case 'shinobi':
				$race = "shinobi";
				$food = 25000;
				$gold = 25000;
				$lumber = 35000;
				$magic_dust = 15000;
				$diamonds = 1000;
				$iron_ore = 20000;
				$grassland_barren = 50;
				$mountain_barren = 50;
				$forest_barren = 50;
				$highland_barren = 50;
				$swamp_barren = 50;
				$tundra_barren = 50;
				$total_land = $grassland_barren + $mountain_barren + $forest_barren + $highland_barren + $swamp_barren + $tundra_barren;
				$troop1name = "Rokkaku Adept";
				$troop2name = "Ronin";
				$troop3name = "Crystal Assassin";
				$troop4name = "Crescent Knight";
				$troop5name = "Shadowsylph";
				$troop6name = "Arcane Flutist";
				$troop7name = "Trainee";
				$troop1 = 150;
				$troop2 = 150;
				$troop3 = 10;
				$troop4 = 10;
				$troop5 = 10;
				$troop6 = 10;
				$troop7 = 800;
				$troop1attack = 4;
				$troop2attack = 2;
				$troop3attack = 5;
				$troop4attack = 6;
				$troop5attack = 0;
				$troop6attack = 0;
				$troop7attack = 0;
				  $troop1defense = 1;
		          $troop2defense = 3;
		          $troop3defense = 2;
		          $troop4defense = 7;
		          $troop5defense = 3;
		          $troop6defense = 0;
		          $troop7defense = 0;
		          $troop1return = 10;
		          $troop2return = 12;
		          $troop3return = 10;
		          $troop4return = 10;
		          $troop5return = 0;
		          $troop6return = 0;
		          $troop7return = 0;
		          $troop1train = 9;
		          $troop2train = 12;
		          $troop3train = 12;
		          $troop4train = 12;
		          $troop5train = 0;
		          $troop6train = 9;
		          $troop7train = 0;
		          $troop1casualties = 80;
		          $troop2casualties = 80;
		          $troop3casualties = 100;
		          $troop4casualties = 90;
		          $troop5casualties = 60;
		          $troop6casualties = 0;
		          $troop7casualties = 0;
		          $troop1mages = 0;
		          $troop2mages = 0;
		          $troop3mages = 0;
		          $troop4mages = 0;
		          $troop5mages = 0;
		          $troop6mages = 0.8;
		          $troop7mages = 0;
		          $troop1spies = 0.05;
		          $troop2spies = 0.05;
		          $troop3spies = 0.1;
		          $troop4spies = 0.1;
		          $troop5spies = 0;
		          $troop6spies = 0;
		          $troop7spies = 0;
				$farm = 0;
				$courthouse = 0;
				$alchemy = 0;
				$academy = 0;
				$gold_mine = 0;
				$iron_mine = 0;
				$home = 0;
				$sawmill = 0;
				$diamond_mine = 0;
				$guild_quarter = 0;
				$tavern = 0;
				$tower = 0;
				$frost_temple = 0;
				$slave_pit = 0;
				$spire = 0;
				$user = mysqli_real_escape_string($connection, $_POST['username']);
				$pass = mysqli_real_escape_string($connection, $_POST['password']);
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				break;

				case 'vampire':
				$race = "vampire";
				$food = 25000;
				$gold = 25000;
				$lumber = 35000;
				$magic_dust = 15000;
				$diamonds = 1000;
				$iron_ore = 20000;
				$grassland_barren = 50;
				$mountain_barren = 50;
				$forest_barren = 50;
				$highland_barren = 50;
				$swamp_barren = 50;
				$tundra_barren = 50;
				$total_land = $grassland_barren + $mountain_barren + $forest_barren + $highland_barren + $swamp_barren + $tundra_barren;
				$troop1name = "Vampire Bat";
				$troop2name = "Dhampire";
				$troop3name = "Daywalker";
				$troop4name = "Vampire Bat";
				$troop5name = "Lich";
				$troop6name = "Hidden Mist";
				$troop7name = "The Kissed";
				$troop1 = 150;
				$troop2 = 150;
				$troop3 = 10;
				$troop4 = 10;
				$troop5 = 10;
				$troop6 = 10;
				$troop7 = 800;
				$troop1attack = 3;
				$troop2attack = 3;
				$troop3attack = 5;
				$troop4attack = 6;
				$troop5attack = 0;
				$troop6attack = 0;
				$troop7attack = 0;
				  $troop1defense = 1.5;
		          $troop2defense = 6;
		          $troop3defense = 5;
		          $troop4defense = 2;
		          $troop5defense = 2;
		          $troop6defense = 0;
		          $troop7defense = 0;
		          $troop1return = 10;
		          $troop2return = 10;
		          $troop3return = 10;
		          $troop4return = 10;
		          $troop5return = 0;
		          $troop6return = 0;
		          $troop7return = 0;
		          $troop1train = 9;
		          $troop2train = 12;
		          $troop3train = 12;
		          $troop4train = 12;
		          $troop5train = 12;
		          $troop6train = 12;
		          $troop7train = 0;
		          $troop1casualties = 125;
		          $troop2casualties = 75;
		          $troop3casualties = 75;
		          $troop4casualties = 65;
		          $troop5casualties = 0;
		          $troop6casualties = 0;
		          $troop7casualties = 0;
		          $troop1mages = 0;
		          $troop2mages = 0;
		          $troop3mages = 0;
		          $troop4mages = 0;
		          $troop5mages = 1;
		          $troop6mages = 0;
		          $troop7mages = 0;
		          $troop1spies = 0;
		          $troop2spies = 0;
		          $troop3spies = 0;
		          $troop4spies = 0;;
		          $troop7spies = 0;
				$farm = 0;
				$courthouse = 0;
				$alchemy = 0;
				$academy = 0;
				$gold_mine = 0;
				$iron_mine = 0;
				$home = 0;
				$sawmill = 0;
				$diamond_mine = 0;
				$guild_quarter = 0;
				$tavern = 0;
				$tower = 0;
				$frost_temple = 0;
				$slave_pit = 0;
				$spire = 0;
				$user = mysqli_real_escape_string($connection, $_POST['username']);
				$pass = mysqli_real_escape_string($connection, $_POST['password']);
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				break;

				case 'flameweaver':
				$race = "flameweaver";
				$food = 25000;
				$gold = 25000;
				$lumber = 35000;
				$magic_dust = 15000;
				$diamonds = 1000;
				$iron_ore = 20000;
				$grassland_barren = 50;
				$mountain_barren = 50;
				$forest_barren = 50;
				$highland_barren = 50;
				$swamp_barren = 50;
				$tundra_barren = 50;
				$total_land = $grassland_barren + $mountain_barren + $forest_barren + $highland_barren + $swamp_barren + $tundra_barren;
				$troop1name = "Flame Invoker";
				$troop2name = "Flame Acolyte";
				$troop3name = "Phoenix";
				$troop4name = "Magmasur";
				$troop5name = "Master Blaster";
				$troop6name = "Operative";
				$troop7name = "Nerdo";
				$troop1 = 150;
				$troop2 = 150;
				$troop3 = 10;
				$troop4 = 10;
				$troop5 = 10;
				$troop6 = 10;
				$troop7 = 800;
				$troop1attack = 3;
				$troop2attack = 0;
				$troop3attack = 6;
				$troop4attack = 4;
				$troop5attack = 0;
				$troop6attack = 0;
				$troop7attack = 0;
				  $troop1defense = 0;
		          $troop2defense = 3;
		          $troop3defense = 3;
		          $troop4defense = 8;
		          $troop5defense = 0;
		          $troop6defense = 0;
		          $troop7defense = 0;
		          $troop1return = 12;
		          $troop2return = 0;
		          $troop3return = 12;
		          $troop4return = 12;
		          $troop5return = 0;
		          $troop6return = 0;
		          $troop7return = 0;
		          $troop1train = 9;
		          $troop2train = 9;
		          $troop3train = 12;
		          $troop4train = 12;
		          $troop5train = 9;
		          $troop6train = 9;
		          $troop7train = 0;
		          $troop1casualties = 100;
		          $troop2casualties = 100;
		          $troop3casualties = 200;
		          $troop4casualties = 100;
		          $troop5casualties = 0;
		          $troop6casualties = 0;
		          $troop7casualties = 0;
		          $troop1mages = 0;
		          $troop2mages = 0;
		          $troop3mages = 0;
		          $troop4mages = 0;
		          $troop5mages = 1;
		          $troop6mages = 0;
		          $troop7mages = 0;
		          $troop1spies = 0;
		          $troop2spies = 0;
		          $troop3spies = 0;
		          $troop4spies = 0;
		          $troop5spies = 0;
		          $troop6spies = 1;
		          $troop7spies = 0;
				$farm = 0;
				$courthouse = 0;
				$alchemy = 0;
				$academy = 0;
				$gold_mine = 0;
				$iron_mine = 0;
				$home = 0;
				$sawmill = 0;
				$diamond_mine = 0;
				$guild_quarter = 0;
				$tavern = 0;
				$tower = 0;
				$frost_temple = 0;
				$slave_pit = 0;
				$spire = 0;
				$user = mysqli_real_escape_string($connection, $_POST['username']);
				$pass = mysqli_real_escape_string($connection, $_POST['password']);
				$email = mysqli_real_escape_string($connection, $_POST['email']);
				break;
			}
			
				$emailcheck = "SELECT * FROM users WHERE email = '$email'";
				$result = mysqli_query($connection, $emailcheck);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					die ("Email is already in use. Try again");

				}


				//see if username exists
				$sql = "SELECT * FROM users WHERE username = '$user'";
				$result = mysqli_query($connection, $sql);
				$resultCheck = mysqli_num_rows($result);
				//if the username is in there already, then take them back to login
				if ($resultCheck > 0) {
					die ("Username is taken. Try again");
				}
				//hash the password
				else {

					$hashedpwd = password_hash($pass, PASSWORD_DEFAULT);

					//new queires to insert into all diff tables

					$user_query = "INSERT INTO users (username, password, email) VALUES ('$user', '$hashedpwd', '$email');";
					$run_user_query = mysqli_query($connection, $user_query);

					$user_info_query = "INSERT INTO userinfo (race, food, gold, lumber, magic_dust, diamonds, iron_ore) VALUES ('$race', '$food', '$gold', '$lumber', '$magic_dust', '$diamonds', '$iron_ore');";
					$run_user_info_query = mysqli_query($connection, $user_info_query);

					$military_query = "INSERT INTO military (troop1name, troop2name, troop3name, troop4name, troop5name, troop6name, troop7name, troop1count, troop2count, troop3count, troop4count, troop5count, troop6count, troop7count, troop1attack, troop2attack, troop3attack, troop4attack, troop5attack, troop6attack, troop7attack, troop1defense, troop2defense, troop3defense, troop4defense, troop5defense, troop6defense, troop7defense, troop1return, troop2return, troop3return, troop4return, troop5return, troop6return, troop7return, troop1train, troop2train, troop3train, troop4train, troop5train, troop6train, troop7train, troop1casualties, troop2casualties, troop3casualties, troop4casualties, troop5casualties, troop6casualties, troop7casualties, troop1mages, troop2mages, troop3mages, troop4mages, troop5mages, troop6mages, troop7mages, troop1spies, troop2spies, troop3spies, troop4spies, troop5spies, troop6spies, troop7spies) VALUES ('$troop1name', '$troop2name', '$troop3name', '$troop4name', '$troop5name', '$troop6name', '$troop7name', '$troop1', '$troop2', '$troop3', '$troop4', '$troop5', '$troop6', '$troop7', '$troop1attack', '$troop2attack', '$troop3attack', '$troop4attack', '$troop5attack', '$troop6attack', '$troop7attack', '$troop1defense', '$troop2defense', '$troop3defense', '$troop4defense', '$troop5defense', '$troop6defense', '$troop7defense', '$troop1return','$troop2return', '$troop3return', '$troop4return', '$troop5return', '$troop6return', '$troop7return', '$troop1train', '$troop2train', '$troop3train', '$troop4train', '$troop5train', '$troop6train', '$troop7train', '$troop1casualties', '$troop2casualties', '$troop3casualties', '$troop4casualties', '$troop5casualties', '$troop6casualties', '$troop7casualties', '$troop1mages', '$troop2mages', '$troop3mages', '$troop4mages', '$troop5mages', '$troop6mages', '$troop7mages', '$troop1spies', '$troop2spies', '$troop3spies', '$troop4spies', '$troop5spies', '$troop6spies', '$troop7spies');";
					$run_military_query = mysqli_query($connection, $military_query);

					$land_query = "INSERT INTO land (total_land, grassland_barren, mountain_barren, forest_barren, highland_barren, swamp_barren, tundra_barren) VALUES ('$total_land', '$grassland_barren', '$mountain_barren', '$forest_barren', '$highland_barren', '$swamp_barren', '$tundra_barren');";
					$run_land_query = mysqli_query($connection, $land_query);

					$construction_query = "INSERT INTO construction (farm, courthouse, alchemy, academy, gold_mine, iron_mine, home, sawmill, diamond_mine, guild_quarter, tavern, tower, frost_temple, slave_pit, spire) VALUES ('$farm', '$courthouse', '$alchemy', '$academy', '$gold_mine', '$iron_mine', '$home', '$sawmill', '$diamond_mine', '$guild_quarter', '$tavern', '$tower', '$frost_temple', '$slave_pit', '$spire');";
					$run_construction_query = mysqli_query($connection, $construction_query);

					if ($run_user_query  = true && $run_user_info_query = true && $run_military_query = true && $run_land_query = true && $run_construction_query = true){
						header('Location:index.html');

					} else {echo "somethin aint right fam";}


				}
?>



<!DOCTYPE html>

<!-- KYLLLLLEEEEEEEE heres my html that looks like a regular .html file except its below that php script -->
<html>

<head>
	<!-- LINK TO STYLESHEET RIGHT HERE ITS THE SAME THING BUT MY HTML IS UNDER PHP. YOU CAN ALSO USE PHP INSIDE OF THIS HTML -->
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<title>Account Creation</title>

	<style>
		#back {width: 200px; margin-left: auto; margin-right: auto;}
		#head {width: 400px; margin-left: auto; margin-right: auto; text-align: center; font-family: Russo One;}
		#back button {width: 200px; height: 50px; border: solid black 1px; margin-right: auto; margin-left: auto;}
	</style>
</head>

<body>

<div id="head"><h1>User Created! - <?php echo $user ?></h1></div>

<a href="index.html"><div id="back"><button>Sign In</button></div></a>

</body>

</html>