<?php
// Open the connection to the database
require "connect.php";
// Start a session
session_start();
// Store the username and password inputs as variables
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// Find 'username' in database and store password as variable
$sql = "select * from users where username = '$username'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  $password_check = $row['password'];
  $id = $row['userId'];
}
// Check that password matches the username in the database
if ($password_check === $password) {
  // Password matches username - log user in
  // Set session variables
  $_SESSION['user'] = $username;
  $_SESSION['userId'] = $id;
  header("location:browse.php");
} else {
  // Password does NOT match username - back to sign-in page
  // Send form back to new account page with error message
  echo '<form action="sign-in_form.php" method="post" name="errorForm">';
  echo '<input name="error" value="Username or password invalid.">';
  echo '<input name="fill-username" value="' . $username . '">';
  echo '</form>';
  echo '<script>document.forms["errorForm"].submit();</script>';
  exit;
}
// Close the database connection
$connect->close();
 ?>
