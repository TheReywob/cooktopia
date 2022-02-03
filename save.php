<?php
require "check_login.php";
// Fetch the ID number of the recipe the user clicked on
$recipe_id = key($_POST['submit']);
// Open the connection to the database
require "connect.php";
// Create variable for currently signed in user's userID
$user = $_SESSION['userId'];

// Insert the chosen recipe into saved_recipes
$sql = "INSERT INTO saved_recipes (userId, recipeId) VALUES ('$user', '$recipe_id')";
// Verify insertion was successful
if ($connect->query($sql) === TRUE) {
  header("Location: saved_recipes.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

// Close the database connection
$connect->close();
 ?>
