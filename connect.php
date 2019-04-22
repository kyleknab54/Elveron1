<?php
$user = 'root';
$password = 'root';
$db = 'elveron';
$host = 'localhost';
$port = 8889;
$connection = mysqli_connect($host, $user, $password)
or die("<p>Error connecting to database</p>");
$db = "elveron";
mysqli_select_db($connection, $db)
or die ("<p>Error selecting the database " . $db . "</p>");
?>