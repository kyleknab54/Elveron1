<?php
session_start();

//connect to mysql database
require 'connect.php';
	
	//take form field inputs from login screen
	$user = mysqli_real_escape_string($connection, $_POST['username']);
	$pass = mysqli_real_escape_string($connection, $_POST['password']);


		//check if user exists in database
		$sql = "SELECT * FROM users WHERE username = '$user'";
		$result = mysqli_query($connection, $sql);
		//if the # of matches for that user is found is less than 1, then the user dont exist
		if (mysqli_num_rows($result) < 1){
			header('Location: index.html?USERNAME=INVALID');
		}
		//if the # of matches found is 1, then the username is in there, unhash password and check if value matches next
		else{
			if ($row = mysqli_fetch_assoc($result)){

				//checks if password matches
				$hashedpwd = password_verify($pass, $row['password']);
				if ($hashedpwd == false) {
					header('Location: index.html?PASSWORD=INVALID');
					//if username and password match, sign in the user
				} elseif($hashedpwd == true) {
					$_SESSION['userid'] = $row['userid'];
					$user = $row['username'];

					
				}
			}
		}

   require_once('user_info.php');

	


?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Russo+One|Taviraj" rel="stylesheet">
	<link href="elveron-style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
<?php require_once('menu.php'); ?>
<?php require_once('topbar.php'); ?>
</body>


</html>