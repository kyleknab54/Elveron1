<?php
session_start();
require_once('connect.php');

$grassland_barren = mysqli_real_escape_string($connection, $_POST['grassland_barren']);
$sql = "UPDATE land SET grassland_barren = grassland_barren + $grassland_barren WHERE userid = '{$_SESSION['userid']}'";
$run = mysqli_query($connection, $sql);


$mountain_barren = mysqli_real_escape_string($connection, $_POST['mountain_barren']);
$sql2 = "UPDATE land SET mountain_barren = mountain_barren + $mountain_barren WHERE userid = '{$_SESSION['userid']}'";
$run2 = mysqli_query($connection, $sql2);


$forest_barren = mysqli_real_escape_string($connection, $_POST['forest_barren']);
$sql3 = "UPDATE land SET forest_barren = forest_barren + $forest_barren WHERE userid = '{$_SESSION['userid']}'";
$run3 = mysqli_query($connection, $sql3);


$highland_barren = mysqli_real_escape_string($connection, $_POST['highland_barren']);
$sql4 = "UPDATE land SET highland_barren = highland_barren + $highland_barren WHERE userid = '{$_SESSION['userid']}'";
$run4 = mysqli_query($connection, $sql4);


$swamp_barren = mysqli_real_escape_string($connection, $_POST['swamp_barren']);
$sql5 = "UPDATE land SET swamp_barren = swamp_barren + $swamp_barren WHERE userid = '{$_SESSION['userid']}'";
$run5 = mysqli_query($connection, $sql5);


$tundra_barren = mysqli_real_escape_string($connection, $_POST['tundra_barren']);
$sql6 = "UPDATE land SET tundra_barren = tundra_barren + $tundra_barren WHERE userid = '{$_SESSION['userid']}'";
$run6 = mysqli_query($connection, $sql6);

if ($run = true && $run2 = true && $run3 = true && $run4 = true && $run5 = true && $run6 = true){
header('Location: explore-land.php');
}

?>
