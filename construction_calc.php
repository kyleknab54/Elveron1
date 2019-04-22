<?php
session_start();
require_once('connect.php');

$farm = mysqli_real_escape_string($connection, $_POST['farm']);
$sql = "UPDATE construction SET farm = farm + $farm WHERE userid = '{$_SESSION['userid']}'";
$run = mysqli_query($connection, $sql);


$courthouse = mysqli_real_escape_string($connection, $_POST['courthouse']);
$sql2 = "UPDATE construction SET courthouse = courthouse + $courthouse WHERE userid = '{$_SESSION['userid']}'";
$run2 = mysqli_query($connection, $sql2);


$alchemy = mysqli_real_escape_string($connection, $_POST['alchemy']);
$sql3 = "UPDATE construction SET alchemy = alchemy + $alchemy WHERE userid = '{$_SESSION['userid']}'";
$run3 = mysqli_query($connection, $sql3);


$academy = mysqli_real_escape_string($connection, $_POST['academy']);
$sql4 = "UPDATE construction SET academy = academy + $academy WHERE userid = '{$_SESSION['userid']}'";
$run4 = mysqli_query($connection, $sql4);


$gold_mine = mysqli_real_escape_string($connection, $_POST['gold-mine']);
$sql5 = "UPDATE construction SET gold_mine = gold_mine + $gold_mine WHERE userid = '{$_SESSION['userid']}'";
$run5 = mysqli_query($connection, $sql5);


$iron_mine = mysqli_real_escape_string($connection, $_POST['iron-mine']);
$sql6 = "UPDATE construction SET iron_mine = iron_mine + $iron_mine WHERE userid = '{$_SESSION['userid']}'";
$run6 = mysqli_query($connection, $sql6);


$home = mysqli_real_escape_string($connection, $_POST['home']);
$sql7 = "UPDATE construction SET home = home + $home WHERE userid = '{$_SESSION['userid']}'";
$run7 = mysqli_query($connection, $sql7);


$sawmill = mysqli_real_escape_string($connection, $_POST['sawmill']);
$sql8 = "UPDATE construction SET sawmill = sawmill + $sawmill WHERE userid = '{$_SESSION['userid']}'";
$run8 = mysqli_query($connection, $sql8);


$diamond_mine = mysqli_real_escape_string($connection, $_POST['diamond-mine']);
$sql9 = "UPDATE construction SET diamond_mine = diamond_mine + $diamond_mine WHERE userid = '{$_SESSION['userid']}'";
$run9 = mysqli_query($connection, $sql9);


$guild_quarter = mysqli_real_escape_string($connection, $_POST['guild-quarter']);
$sql10 = "UPDATE construction SET guild_quarter = guild_quarter + $guild_quarter WHERE userid = '{$_SESSION['userid']}'";
$run10 = mysqli_query($connection, $sql10);


$tavern = mysqli_real_escape_string($connection, $_POST['tavern']);
$sql11 = "UPDATE construction SET tavern = tavern + $tavern WHERE userid = '{$_SESSION['userid']}'";
$run11 = mysqli_query($connection, $sql11);


$tower = mysqli_real_escape_string($connection, $_POST['tower']);
$sql12 = "UPDATE construction SET tower = tower + $tower WHERE userid = '{$_SESSION['userid']}'";
$run12 = mysqli_query($connection, $sql12);


$frost_temple = mysqli_real_escape_string($connection, $_POST['frost-temple']);
$sql13 = "UPDATE construction SET frost_temple = frost_temple + $frost_temple WHERE userid = '{$_SESSION['userid']}'";
$run13 = mysqli_query($connection, $sql13);


$slave_pit = mysqli_real_escape_string($connection, $_POST['slave-pit']);
$sql14 = "UPDATE construction SET slave_pit = slave_pit + $slave_pit WHERE userid = '{$_SESSION['userid']}'";
$run14 = mysqli_query($connection, $sql14);


$spire = mysqli_real_escape_string($connection, $_POST['Spire']);
$sql15 = "UPDATE construction SET spire = spire + $spire WHERE userid = '{$_SESSION['userid']}'";
$run15 = mysqli_query($connection, $sql15);


if ($run = true && $run2 = true && $run3 = true && $run4 = true && $run5 = true && $run6 = true && $run7 = true && $run8 = true && $run9 = true && $run10 = true && $run11 = true && $run12 = true && $run13 = true && $run14 = true && $run15 = true){
header('Location: construction.php');
}

?>