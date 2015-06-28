<?php 
	require_once 'config/config.php';
	require_once 'library/connect.php';	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Your BioClock</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="javascript/script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="wrapper">

<form method="POST" action="login.php">
Username:<br>`
<input type="text" name="username">
<br>
Password:<br>
<input type="password" name="password"><br><br>
<INPUT type="submit">
</form>

	<canvas id="canvas" width="500" height="500">

<?php
session_start();

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$request_username = (empty($_POST['username'])) ? '' : $_POST['username'];
$request_password = (empty($_POST['password'])) ? '' : $_POST['password'];



	switch ($action) {
	 	case 'login':
	 		include 'login.php';
	 	break;

	 	case 'loginteacher':
	 		include 'login.php';
	 	break;
	 	
	 	default:
	 		# code...
	 		break;
	 } 


// $sql = "SELECT id, name, surname FROM users";
			// $result = $mysqli->query($sql); 





			 

	?>

	</canvas>
	<div id="digiClock">Hier komt een digiklok :o</div>
</div>
</body>
</html>