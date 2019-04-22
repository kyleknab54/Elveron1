<?php
require_once('connect.php');

$sql = "SELECT * FROM users WHERE userid = '{$_SESSION['userid']}'";
$result = mysqli_query($connection, $sql); 
if (mysqli_num_rows($result) < 1){
     echo "didnt find what youre looking for cunt";
    } else{
      while ($row = mysqli_fetch_assoc($result)){
         $username = $row['username'];
         $email = $row['email'];
      }
    }
    $sql2 = "SELECT * FROM userinfo WHERE userid = '{$_SESSION['userid']}'";
$result2 = mysqli_query($connection, $sql2); 
if (mysqli_num_rows($result2) < 1){
     echo "didnt find what youre looking for cunt";
    } else{
      while ($row = mysqli_fetch_assoc($result2)){
        $race = $row['race'];
        $food = $row['food'];
        $gold = $row['gold'];
        $lumber = $row['lumber'];
        $magic_dust = $row['magic_dust'];
        $diamonds = $row['diamonds'];
        $iron_ore = $row['iron_ore'];

      }
    }
    $sql3 = "SELECT * FROM military WHERE userid = '{$_SESSION['userid']}'";
$result3 = mysqli_query($connection, $sql3); 
if (mysqli_num_rows($result3) < 1){
     echo "didnt find what youre looking for cunt";
    } else{
      while ($row = mysqli_fetch_assoc($result3)){
          $troop1name = $row['troop1name'];
          $troop2name = $row['troop2name'];
          $troop3name = $row['troop3name'];
          $troop4name = $row['troop4name'];
          $troop5name = $row['troop5name'];
          $troop6name = $row['troop6name'];
          $troop7name = $row['troop7name'];
          $troop1 = $row['troop1count'];
          $troop2 = $row['troop2count'];
          $troop3 = $row['troop3count'];
          $troop4 = $row['troop4count'];
          $troop5 = $row['troop5count'];
          $troop6 = $row['troop6count'];
          $troop7 = $row['troop7count'];
          $troop1attack = $row['troop1attack'];
          $troop2attack = $row['troop2attack'];
          $troop3attack = $row['troop3attack'];
          $troop4attack = $row['troop4attack'];
          $troop5attack = $row['troop5attack'];
          $troop6attack = $row['troop6attack'];
          $troop7attack = $row['troop7attack'];
          $troop1defense = $row['troop1defense'];
          $troop2defense = $row['troop2defense'];
          $troop3defense = $row['troop3defense'];
          $troop4defense = $row['troop4defense'];
          $troop5defense = $row['troop5defense'];
          $troop6defense = $row['troop6defense'];
          $troop7defense = $row['troop7defense'];
          $troop1return = $row['troop1return'];
          $troop2return = $row['troop2return'];
          $troop3return = $row['troop3return'];
          $troop4return = $row['troop4return'];
          $troop5return = $row['troop5return'];
          $troop6return = $row['troop6return'];
          $troop7return = $row['troop7return'];
          $troop1train = $row['troop1train'];
          $troop2train = $row['troop2train'];
          $troop3train = $row['troop3train'];
          $troop4train = $row['troop4train'];
          $troop5train = $row['troop5train'];
          $troop6train = $row['troop6train'];
          $troop7train = $row['troop7train'];
          $troop1casualties = $row['troop1casualties'];
          $troop2casualties = $row['troop2casualties'];
          $troop3casualties = $row['troop3casualties'];
          $troop4casualties = $row['troop4casualties'];
          $troop5casualties = $row['troop5casualties'];
          $troop6casualties = $row['troop6casualties'];
          $troop7casualties = $row['troop7casualties'];
          $troop1mages = $row['troop1mages'];
          $troop2mages = $row['troop2mages'];
          $troop3mages = $row['troop3mages'];
          $troop4mages = $row['troop4mages'];
          $troop5mages = $row['troop5mages'];
          $troop6mages = $row['troop6mages'];
          $troop7mages = $row['troop7mages'];
          $troop1spies = $row['troop1spies'];
          $troop2spies = $row['troop2spies'];
          $troop3spies = $row['troop3spies'];
          $troop4spies = $row['troop4spies'];
          $troop5spies = $row['troop5spies'];
          $troop6spies = $row['troop6spies'];
          $troop7spies = $row['troop7spies'];
      }
    }

        $sql5 = "SELECT * FROM construction WHERE userid = '{$_SESSION['userid']}'";
$result5 = mysqli_query($connection, $sql5); 
if (mysqli_num_rows($result5) < 1){
     echo "didnt find what youre looking for cunt";
    } else{
      while ($row = mysqli_fetch_assoc($result5)){
          $farm = $row['farm'];
          $courthouse = $row['courthouse'];
          $alchemy = $row['alchemy'];
          $academy = $row['academy'];
          $gold_mine = $row['gold_mine'];
          $iron_mine = $row['iron_mine'];
          $home = $row['home'];
          $sawmill = $row['sawmill'];
          $diamond_mine = $row['diamond_mine'];
          $guild_quarter = $row['guild_quarter'];
          $tavern = $row['tavern'];
          $tower = $row['tower'];
          $frost_temple = $row['frost_temple'];
          $slave_pit = $row['slave_pit'];
          $spire = $row['spire'];
      }
    }

    $sql4 = "SELECT * FROM land WHERE userid = '{$_SESSION['userid']}'";
$result4 = mysqli_query($connection, $sql4); 
if (mysqli_num_rows($result4) < 1){
     echo "didnt find what youre looking for cunt";
    } else{
      while ($row = mysqli_fetch_assoc($result4)){
        
        //totals before the barren is calculated
        $grassland = $row['grassland_barren'];
        $mountain = $row['mountain_barren'];
        $forest = $row['forest_barren'];
        $highland = $row['highland_barren'];
        $swamp = $row['swamp_barren'];
        $tundra = $row['tundra_barren'];
        $total_land = $grassland + $mountain + $forest + $highland + $swamp + $tundra;

        //totals after barren is calculated
          $grassland_barren = $row['grassland_barren'] - $farm - $courthouse - $alchemy - $academy;
          $mountain_barren = $row['mountain_barren'] - $gold_mine - $iron_mine - $home;
          $forest_barren = $row['forest_barren'] - $sawmill;
          $highland_barren = $row['highland_barren'] - $diamond_mine - $guild_quarter - $tavern;
          $swamp_barren = $row['swamp_barren'] - $tower;
          $tundra_barren = $row['tundra_barren'] - $frost_temple - $slave_pit - $spire;
          $total_barren = $grassland_barren + $mountain_barren + $forest_barren + $highland_barren + $swamp_barren + $tundra_barren + $farm + $courthouse + $alchemy + $academy + $gold_mine + $iron_mine + $home + $sawmill + $diamond_mine + $guild_quarter + $tavern + $tower + $frost_temple + $slave_pit + $spire;
      }
    }

    $networth = ($troop1 * ($troop1attack + $troop1defense)) + ($troop2 * ($troop2attack + $troop2defense)) + ($troop3 * ($troop3attack + $troop3defense)) + ($troop4 * ($troop4attack + $troop4defense)) + ($troop5 * ($troop5attack + $troop5defense)) + ($troop6 * ($troop6attack + $troop6defense));

    $peasants = ($total_land * 10) + (10 * ($farm + $courthouse + $alchemy + $gold_mine + $iron_mine + $home + $sawmill + $diamond_mine + $guild_quarter + $tavern + $tower + $frost_temple + $slave_pit + $spire)) + ($academy * 15) + ($home * 30);

    $gold_hour = ($peasants * 2.6) + (3.5 * $troop7) + ($gold_mine * 60);
    $gold_hour_change = $gold_hour; //plus corruption//

    $diamonds_hour = $diamond_mine * 10;
    $diamonds_hour_change = $diamonds_hour; //plus corruption//

    $iron_hour = $iron_mine * 110;
    $iron_hour_change = $iron_hour; //plus corruption//

    $magic_dust_hour = $tower * 50;
    $magic_dust_decay = -(0.05 * $magic_dust);
    $magic_dust_hour_change = $magic_dust_hour + $magic_dust_decay;

    $lumber_hour = $sawmill * 115;
    $lumber_decay = -(0.02 * $lumber);
    $lumber_hour_change = $lumber_hour_change + $lumber_decay;

    $food_hour = $farm * 100;
    $food_consumption = -(($peasants + $troop1 + $troop2 + $troop3 + $troop4 + $troop5 + $troop6 + $troop7) * 0.3);
    $food_decay = -($food * 0.02);
    $food_hour_change = $food_hour + $food_consumption + $food_decay; //add coruption to this! and all other hour stuff//


?>

