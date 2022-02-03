<?php
// Open the connection to the database
require "connect.php";
// Start a session
session_start();
// Store the username and password inputs as variables
$username = $_REQUEST['username'];
$password1 = $_REQUEST['password'];
$password2 = $_REQUEST['password-verify'];

// If password and password-verify don't match, send error
if ($password1 !== $password2) {
  // Send form back to new account page with error message
  echo '<form action="create_account.php" method="post" name="errorForm">';
  echo '<input name="error" value="The passwords do not match. Please try again.">';
  echo '<input name="fill-username" value="' . $username . '">';
  echo '</form>';
  echo '<script>';
  echo 'document.forms["errorForm"].submit();';
  echo '</script>';
  exit;
}

// If username already exists in database, send error
$sql = "select username from users where username = '$username'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  $user_check = $row['username'];
}
if ($user_check === $username) {
  // Send form back to new account page with error message
  echo '<form action="create_account.php" method="post" name="errorForm">';
  echo '<input name="error" value="This username is already taken. Please choose another username.">';
  echo '<input name="fill-username" value="' . $username . '">';
  echo '</form>';
  echo '<script>';
  echo 'document.forms["errorForm"].submit();';
  echo '</script>';
  exit;
}

// If the username and password pass the tests, create the user in the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password1')";
// Verify insertion was successful
if ($connect->query($sql) === TRUE) {
  // Set session variables
  $_SESSION['user'] = $username;
  // Find new user's userId
  $sql = "select * from users where username = '$username'";
  $result = $connect->query($sql);
  while ($row = $result->fetch_assoc()){
    $id = $row['userId'];
  }
  $_SESSION['userId'] = $id;
  header("location:browse.php");
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}
// Close the database connection
$connect->close();
 ?>
