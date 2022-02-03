<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CookTopia | Upload New Recipe</title>
  <style></style>
</head>
<body>

<h1>Upload New Recipe</h1>

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
$recipe_name = $_REQUEST['name'];
$recipe_description = $_REQUEST['description'];
$recipe_ingredients = $_REQUEST['ingredients'];
$recipe_instructions = $_REQUEST['instructions'];
$recipe_categoryid = $_REQUEST['category'];
$recipe_skillLevel = $_REQUEST['skillLevel'];


/// Begin upload user submitted image into images/recipe_images
$alreadyExist = 1;
$uploadOk = 1;
$uploadSuccess = 0;
// Check to make sure random number does not already exist in the database
// Loop until alreadyExist is returned false for every filename in database
while ($alreadyExist == 1){
  // Generate random number (between 1000 and 999999) for file name
  $fileNumber = rand(1000, 999999);
  $sql = "select * from recipes";
  $result = $connect->query($sql);
  while ($row = $result->fetch_assoc()){
    if ($fileNumber == substr($row['eImage'], 0, -3)) {
      // If filename already exists, set alreadyExist to true
      $alreadyExist = 1;
    } else {
      // If filename does not exist already, set alreadyExist to false
      $alreadyExist = 0;
    }
  }
}

// Specify target directory to save image
$target_dir = "images/recipe_images/";
// Store the file extension (in lowercase)
$imageFileType = strtolower(pathinfo(basename($_FILES["userImage"]["name"]),PATHINFO_EXTENSION));
// Create the filename of the image (Example: 62515.pdf)
$fileName = $fileNumber . "." . $imageFileType;
// Specify the path of the file to be uploaded
$target_file = $target_dir . $fileName;

// Only allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "heif") {
  $uploadError = "Only JPG, JPEG, PNG, HEIF & GIF files are allowed to be uploaded.";
  $uploadOk = 0;
}

// If the user did not upload an image, set uploadOk to true (the sample image will be used instead)
if ($_FILES['userImage']['name']=='') {
  $uploadOk = 1;
}

// Make sure uploadOk is set to true before uploading
if ($uploadOk == 0) {
// If everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["userImage"]["tmp_name"], $target_file)) {
    // If file is uploaded successfully, set uploadSuccess to true
    $uploadSuccess = 1;
  } else if ($_FILES['userImage']['name']=='') {
    // If the user did not upload a file, set uploadSuccess to true (the sample image will be used instead)
    $uploadSuccess = 1;
  } else {
    $uploadSuccess = 0;
    $uploadError = "There was an error uploading your image.";
  }
}
/// End upload user submitted image into images/recipe_images


// If the user's image was uploaded successfully, continue with inserting the recipe into the database
if ($uploadSuccess == 1) {
  // Insert values into database using INSERT query
  $sql = "INSERT INTO recipes (eTitle, userId, anon, eDescription, eIngredients, eInstructions, eCategoryId, eSkillLevel, eImage) VALUES ('$recipe_name', '$author', '$anonymousBool', '$recipe_description', '$recipe_ingredients', '$recipe_instructions', '$recipe_categoryid', '$recipe_skillLevel', '$fileName')";
  // Verify insertion was successful
  if ($connect->query($sql) === TRUE) {
    header("Location: my_recipes.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
} else {
  // If the user's image did NOT upload successfully, print the error message
  echo $uploadError;
}
// Close the database connection
$connect->close();

?>


</body>
</html>
