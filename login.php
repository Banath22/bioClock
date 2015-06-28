<?php 

$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$request_username = (empty($_POST['username'])) ? '' : $_POST['username'];
$request_password = (empty($_POST['password'])) ? '' : $_POST['password'];

if ($request_username != '' && $request_password != '')
  {
   $result = $mysqli->query("SELECT * FROM users WHERE username = '".$request_username."' AND password = '".$request_password."'"); 
   $user_match_count = $result->num_rows;
 
   if ($user_match_count == 1)
   {
    $user_row = $result->fetch_assoc();
    $_SESSION['username'] = $user_row['username'];
    $_SESSION['userid'] = $user_row['id'];
    header('location: teacher.php');

   }
}
// elseif ($request_username != '' && $request_password != '')
//   {
//    $result = $mysqli->query("SELECT * FROM users WHERE username = '".$request_username."' AND password = '".$request_password."'"); 
//    $user_match_count = $result->num_rows;
 
//    if ($user_match_count == 1)
//    {
//     $user_row = $result->fetch_assoc();
//     $_SESSION['username'] = $user_row['username'];
//     $_SESSION['userid'] = $user_row['id'];
//     header('location: teacher.php');
//    }
// }
else {
  echo "failed to login";
}

 ?>