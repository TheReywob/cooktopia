<?php
   // Open connection to the database
   require "connect.php";
   // Start a session
   session_start();
   // Set session user as signed in username (if no one is signed in, leave blank)
   $user_check = $_SESSION['user'];
   // Get matching username from users table in database
   $sql = "select username from users where username = '$user_check'";
   $result = $connect->query($sql);
   while ($row = $result->fetch_assoc()){
     $login_session = $row['username'];
   }
   // If user not signed in, redirect to sign in page
   if(!isset($_SESSION['user'])){
     header("location:sign-in_form.php");
     exit;
   }
?>
