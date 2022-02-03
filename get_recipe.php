<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cooktopia | Browse Recipes</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="get_recipe.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">




    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/Cooktopia.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="See Recipe Page">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>

  <!-- Check sign-in status -->
  <?php
  session_start();
  if(isset($_SESSION['user'])){
    $_SESSION['signInOutMessage'] = 'Sign Out (' . $_SESSION['user'] . ')';
    $_SESSION['signInOutLink'] = 'log-out.php';
  } else {
    $_SESSION['signInOutMessage'] = 'Sign In';
    $_SESSION['signInOutLink'] = 'sign-in_form.php';
  }
   ?>

  <body class="u-body">
    <header class="u-border-2 u-border-palette-3-base u-clearfix u-custom-color-1 u-header u-header" id="sec-a6b9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="home.php" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/Cooktopia.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-right u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="#">
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
              </svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                    <rect y="1" width="16" height="2"></rect>
                    <rect y="7" width="16" height="2"></rect>
                    <rect y="13" width="16" height="2"></rect>
                  </symbol>
                </defs>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="home.php" style="padding: 10px 20px;">Home</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="browse.php" style="padding: 10px 20px;">Browse
                  Recipes</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="my_recipes.php" style="padding: 10px 20px;">My Recipes</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="saved_recipes.php" style="padding: 10px 20px;">Saved Recipes</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="new_recipe.php"
                  style="padding: 10px 20px;">Upload New Recipe</a>
              </li>
              <!-- <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="Contact.html" style="padding: 10px 20px;">Contact</a>
              </li> -->
              <li class="u-nav-item"><a class="u-border-2 u-border-active-white u-button-style u-nav-link u-radius-2 u-text-active-white u-text-hover-palette-5-dark-1 u-text-palette-5-light-2" href="<?php echo $_SESSION['signInOutLink']; ?>" style="padding: 10px 20px;"><?php echo $_SESSION['signInOutMessage']; ?></a>
              </li>
            </ul>
          </div>

          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home.php" style="padding: 10px 20px;">Home</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="browse.php" style="padding: 10px 20px;">Browse Recipes</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="my_recipes.php" style="padding: 10px 20px;">My Recipes</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="saved_recipes.php" style="padding: 10px 20px;">Saved Recipes</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="new_recipe.php" style="padding: 10px 20px;">Upload New Recipe</a>
                  </li>
                  <!-- <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
                  </li> -->
                  <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo $_SESSION['signInOutLink']; ?>" style="padding: 10px 20px;"><?php echo $_SESSION['signInOutMessage']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>

    <?php
    // Fetch the ID number of the recipe the user clicked on
    $id = key($_POST['submit']);
    // Open the connection to the database
    require "connect.php";
    // Select all entries from the row with the recipe the user chose (ID number)
    $sql = "select * from recipes where eid=$id";
    $result = $connect->query($sql);
    // Display all the values in the selected row
    while ($row = $result->fetch_assoc()){

    // Print recipe name
    echo '<section class="u-align-center u-clearfix u-custom-color-1 u-section-1" id="sec-dada">';
    echo '<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">';
    echo '<h1 class="u-text u-text-default u-text-1">'.$row['eTitle'].'</h1>';
    echo '</div>';
    echo '</section>';

    // Create recipe section
    echo '<section class="u-clearfix u-palette-1-base u-section-2" id="sec-4cca">';
    echo '<div class="u-clearfix u-sheet u-sheet-1">';
    echo '<div class="u-clearfix u-layout-wrap u-layout-wrap-1">';
    echo '<div class="u-gutter-0 u-layout">';
    echo '<div class="u-layout-col">';
    echo '<div class="u-size-20">';
    echo '<div class="u-layout-row">';
    echo '<div class="u-container-style u-layout-cell u-shape-rectangle u-size-20 u-layout-cell-1">';
    echo '<div class="u-container-layout u-valign-bottom u-container-layout-1">';

    // Print recipe image (if no image is found, default to sample image)
    echo '<img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="images/recipe_images/'.$row['eImage'].'" onerror=this.src="images/recipe_images/sample.png" data-image-width="256" data-image-height="256">';
    echo '</div>';
    echo '</div>';

    // Print recipe description, category, and skill level
    echo '<div class="u-container-style u-layout-cell u-radius-10 u-shape-round u-size-40 u-layout-cell-2">';
    echo '<div class="u-border-4 u-border-palette-3-base u-container-layout u-valign-bottom u-container-layout-2">';
    echo '<h2 class="u-text u-text-default u-text-1">Description</h2>';
    echo '<h6 class="u-text u-text-2">'.$row['eDescription'].'</h6>';
    // Fetch category name based on categoryID
    $cat_id = $row['eCategoryId'];
    $category_sql = "select category_name from categories where category_id='$cat_id'";
    $category_result = $connect->query($category_sql);
    while ($category_row = $category_result->fetch_assoc()){
      $category = $category_row['category_name'];
    }
    echo '<h2 class="u-text u-text-default u-text-3">Category</h2>';
    echo '<h6 class="u-text u-text-default u-text-4">'.$category.'</h6>';
    echo '<h2 class="u-text u-text-default u-text-5">Skill Level <span style="font-weight: 700; font-size: 2.25rem;">'.$row['eSkillLevel'].'/5</span>';
    echo '</h2>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    // Create ingredients area
    echo '<div class="u-size-40">';
    echo '<div class="u-layout-row">';
    echo '<div class="u-container-style u-layout-cell u-shape-rectangle u-size-20 u-layout-cell-3">';
    echo '<div class="u-container-layout u-container-layout-3">';
    echo '<h2 class="u-align-left u-text u-text-default u-text-6">Ingredients</h2>';
    echo '<div class="u-clearfix u-custom-html u-custom-html-1">';
    echo '<hr>';
    echo '</div>';

    // Print recipe ingredients
    // Store each ingredient (seperated by comma) in an array
    $allIngredients = $row['eIngredients'];
    $ingredientsArray = explode("+", $allIngredients);
    echo '<h6 class="u-align-left u-text u-text-default u-text-7">';
    // Print each ingredient as a bullet point (unordered list)
    echo '<ul>';
    for ($i = 0; $i < count($ingredientsArray); $i++){
      echo "<li>".$ingredientsArray[$i]."</li>";
    }
    echo '</ul>';
    echo '</h6>';
    echo '</div>';
    echo '</div>';

    // Create instructions area
    echo '<div class="u-container-style u-layout-cell u-size-40 u-layout-cell-4">';
    echo '<div class="u-container-layout u-container-layout-4">';
    echo '<h2 class="u-text u-text-default u-text-8">Instructions</h2>';
    echo '<div class="u-clearfix u-custom-html u-custom-html-2">';
    echo '<hr>';
    echo '</div>';

    // Print recipe instructions
    // Store each instrution (seperated by comma) in an array
    $allInstructions = $row['eInstructions'];
    $instructionsArray = explode("+", $allInstructions);
    echo '<h6 class="u-text u-text-default u-text-9">';
    // Print each instruction as a numbered point (ordered list)
    echo '<ol>';
    for ($i = 0; $i < count($instructionsArray); $i++){
      echo "<li>".$instructionsArray[$i]."</li>";
    }
    echo '</ol>';
    echo '</h6>';
    echo '</div>';
    echo '</div>';

    // Close the recipe section
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';

    // Print recipe author section
    echo '<section class="u-align-center u-clearfix u-section-3" id="sec-9d03">';
    echo '<div class="u-clearfix u-sheet u-sheet-1">';
    // Check if recipe was uploaded anonymously
    if ($row['anon'] == 1){
      // If recipe was uploaded anonymously, set $creator as "Anonymous"
      $creator = "Anonymous";
    } else {
      // Otherwise, set $creator as <username>
      // Fetch the username from username table based on userId from recipe table
      $users_id = $row['userId'];
      $user_sql = "select username from users where userId='$users_id'";
      $user_result = $connect->query($user_sql);
      while ($user_row = $user_result->fetch_assoc()){
        $creator = $user_row['username'];
      }
    }
    echo '<h1 class="u-text u-text-default u-text-1">Uploaded by '.$creator.' on '.$row['eDate'].'</h1>';
    echo '</div>';
    echo '</section>';

    }
    // Close the database connection
    $connect->close();
    ?>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-18d8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">
          <span style="font-weight: 700;">Cooktopia</span> Recipe Cookbook and Sharing Platform
        </p>
      </div></footer>
  </body>
</html>
