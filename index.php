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



	
<?php
session_start();

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$request_username = (empty($_POST['username'])) ? '' : $_POST['username'];
$request_password = (empty($_POST['password'])) ? '' : $_POST['password'];



	switch ($action) {
	 	// case 'login':
	 	// 	include 'login.php';
	 	// break;

	 	case 'loginteacher':
	 		include 'login.php';
	 	break;

	 	case ($action == 'login'):
	if (isset($_SESSION['username']))
		{
			echo '<h1>Welkom '.$_SESSION['username'].'</h1>';
			include 'teacher.php';			
	}
	// if (isset($_SESSION['username']))
	// 	{
	// 		echo '<h1>Welkom '.$_SESSION['username'].'</h1>';
	// 		// echo "<hr>";
	// 		// echo '<a href=?action=logout> uitloggen</a>';
	// 	}


	else{
		include 'loginform.php';
	}
	 	
	 	default:
	 		# code...
	 		break;
	 } 

?>


	<canvas id="canvas" width="500" height="500">


	</canvas>
	<div id="digiClock">Hier komt een digiklok :o</div>
</div>
</body>
</html>