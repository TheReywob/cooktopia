<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CookTopia | Edit Recipe</title>
  <style></style>
</head>
<body>

<h1>Edit Recipe</h1>

<?php
// Open the connection to the database
require "connect.php";
session_start();
// Create variable for currently signed in user
$current_user = $_SESSION['user'];
// Get user's userId
$sql = "select userId from users where username = '$current_user'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  $author = $row['userId'];
}

// Check if 'upload anonymously' option was selected
if ($_REQUEST['anonymousOption'] === 'anon'){
  // If user wants to remain anonymous, set anonymousBool to true
  $anonymousBool = 1;
} else {
  // If user does not want to remain anonymous, set anonymousBool to false
  $anonymousBool = 0;
  }

// Store the values from the form (user inputs)
$recipeId = $_REQUEST['recipeId'];
$recipe_name = $_REQUEST['name'];
$recipe_description = $_REQUEST['description'];
$recipe_ingredients = $_REQUEST['ingredients'];
$recipe_instructions = $_REQUEST['instructions'];
$recipe_categoryid = $_REQUEST['category'];
$recipe_skillLevel = $_REQUEST['skillLevel'];


  // Update values into database using UPDATE query
  $sql = "UPDATE recipes SET eTitle='$recipe_name', eDescription='$recipe_description', eIngredients='$recipe_ingredients', eInstructions='$recipe_instructions', eCategoryId='$recipe_categoryid', eSkillLevel='$recipe_skillLevel', anon='$anonymousBool' WHERE eId=$recipeId";
  // Verify update was successful
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
