<?php
session_start();
require_once('connect.php');

$troop1 = mysqli_real_escape_string($connection, $_POST['troop1']);
$sql = "UPDATE military SET troop1count = troop1count + $troop1 WHERE userid = '{$_SESSION['userid']}'";
$run = mysqli_query($connection, $sql);


$troop2 = mysqli_real_escape_string($connection, $_POST['troop2']);
$sql2 = "UPDATE military SET troop2count = troop2count + $troop2 WHERE userid = '{$_SESSION['userid']}'";
$run2 = mysqli_query($connection, $sql2);


$troop3 = mysqli_real_escape_string($connection, $_POST['troop3']);
$sql3 = "UPDATE military SET troop3count = troop3count + $troop3 WHERE userid = '{$_SESSION['userid']}'";
$run3 = mysqli_query($connection, $sql3);


$troop4 = mysqli_real_escape_string($connection, $_POST['troop4']);
$sql4 = "UPDATE military SET troop4count = troop4count + $troop4 WHERE userid = '{$_SESSION['userid']}'";
$run4 = mysqli_query($connection, $sql4);


$troop5 = mysqli_real_escape_string($connection, $_POST['troop5']);
$sql5 = "UPDATE military SET troop5count = troop5count + $troop5 WHERE userid = '{$_SESSION['userid']}'";
$run5 = mysqli_query($connection, $sql5);


$troop6 = mysqli_real_escape_string($connection, $_POST['troop6']);
$sql6 = "UPDATE military SET troop6count = troop6count + $troop6 WHERE userid = '{$_SESSION['userid']}'";
$run6 = mysqli_query($connection, $sql6);

$troop7 = mysqli_real_escape_string($connection, $_POST['troop7']);
$sql7 = "UPDATE military SET troop7count = troop7count + $troop7 WHERE userid = '{$_SESSION['userid']}'";
$run7 = mysqli_query($connection, $sql7);

if ($run = true && $run2 = true && $run3 = true && $run4 = true && $run5 = true && $run6 = true && $run7 = true){
header('Location: train-military.php');
}

?>