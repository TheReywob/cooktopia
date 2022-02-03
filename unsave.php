<?php
require "check_login.php";
// Fetch the ID number of the recipe the user clicked on
$recipe_id = key($_POST['submit']);
// Open the connection to the database
require "connect.php";
// Create variable for currently signed in user's userID
$user = $_SESSION['userId'];

$sql = "delete from saved_recipes where recipeId='$recipe_id' and userId='$user'";
if ($connect->query($sql) === TRUE) {
  header("Location: saved_recipes.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

// Close the database connection
$connect->close();
 ?>
