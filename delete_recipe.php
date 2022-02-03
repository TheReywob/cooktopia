<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CookTopia | My Recipes</title>
  <style></style>
</head>
<body>

<h1>Upload New Recipe</h1>

<?php
// Open the connection to the database
require "connect.php";
session_start();

// Fetch the ID number of the recipe the user clicked on
$id = key($_POST['submit']);

$sql = "delete from recipes where eId=$id";
if ($connect->query($sql) === TRUE) {
  header("Location: my_recipes.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

// Close the database connection
$connect->close();

?>


</body>
</html>
