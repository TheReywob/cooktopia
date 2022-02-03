<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cooktopia | Edit Recipe</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="new_recipe.css" media="screen">
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
    <meta property="og:title" content="Create a Recipe">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>

  <!-- Check sign-in status -->
  <?php
  require "check_login.php";

  session_start();
  if(isset($_SESSION['user'])){
    $_SESSION['signInOutMessage'] = 'Sign Out (' . $_SESSION['user'] . ')';
    $_SESSION['signInOutLink'] = 'log-out.php';
  } else {
    $_SESSION['signInOutMessage'] = 'Sign In';
    $_SESSION['signInOutLink'] = 'sign-in_form.php';
  }
   ?>

  <body class="u-body u-stick-footer">
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
    <section class="u-border-2 u-border-palette-3-base u-clearfix u-custom-color-1 u-section-1" id="sec-b831">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">Edit Recipe</h1>
        <div class="u-align-center u-border-3 u-border-palette-3-base u-form u-palette-1-base u-radius-50 u-form-1">

          <form action="update.php" method="POST" enctype="multipart/form-data" class="u-clearfix u-form-custom-backend u-form-spacing-5 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;">

            <!-- Get recipe that user clicked Edit on -->
            <?php
            // Fetch the ID number of the recipe the user clicked on
            $recipeId = key($_POST['submit']);
            // Open the connection to the database
            require "connect.php";
            // Select all entries from the row with the recipe the user chose (ID number)
            $sql = "select * from recipes where eid=$recipeId";
            $result = $connect->query($sql);
            // Display all the values in the selected row
            while ($row = $result->fetch_assoc()){
              $recipe_name = $row['eTitle'];
              $recipe_description = $row['eDescription'];
              $recipe_ingredients = $row['eIngredients'];
              $recipe_instructions = $row['eInstructions'];
            }
            // Close the database connection
            $connect->close();
             ?>

            <!-- Recipe ID -->
            <input type="hidden" name="recipeId" value="<?=$recipeId?>">
            <!-- Recipe Title -->
            <div class="u-form-group u-form-group-1">
              <label for="name" class="u-label u-label-1">Recipe Title:</label>
              <input type="text" id="text-fd5f" name="name" class="u-border-3 u-border-custom-color-1 u-input u-input-rectangle u-radius-6 u-white" required="required" value="<?=$recipe_name?>">
            </div>
            <!-- Recipe Description -->
            <div class="u-form-group u-form-message u-form-textarea u-form-group-2">
              <label for="description" class="u-label u-label-2">Give your recipe a short description:</label>
              <textarea rows="4" cols="50" id="textarea-a6be" name="description" class="u-border-3 u-border-custom-color-1 u-input u-input-rectangle u-radius-6 u-white" required="required"><?=$recipe_description?></textarea>
            </div>
            <!-- Recipe Ingredients -->
            <div class="u-form-group u-form-textarea u-form-group-3">
              <label for="ingredients" class="u-label u-label-3">Ingredients called for:<br>(Seperate with +)</label>
              <textarea rows="4" cols="50" id="textarea-909b" name="ingredients" class="u-border-3 u-border-custom-color-1 u-input u-input-rectangle u-radius-6 u-white" required="required"><?=$recipe_ingredients?></textarea>
            </div>
            <!-- Recipe Instructions -->
            <div class="u-form-group u-form-textarea u-form-group-4">
              <label for="instructions" class="u-label u-label-4">Instructions:<br>(Seperate with +)</label>
              <textarea rows="4" cols="50" id="textarea-ddcc" name="instructions" class="u-border-3 u-border-custom-color-1 u-input u-input-rectangle u-radius-6 u-white" required="required"><?=$recipe_instructions?></textarea>
            </div>
            <!-- Recipe Skill Level -->
            <div class="u-form-group u-form-radiobutton u-form-group-5">
              <label for="skillLevel" class="u-label u-label-4">Skill Level:</label>
              <div class="u-form-radio-button-wrapper">
                <input type="radio" id="skill1" name="skillLevel" value="1" required="required">
                <label class="u-label u-label-5" for="radiobutton">1 (Beginner)</label>
                <br>
                <input type="radio" id="skill2" name="skillLevel" value="2" required="required">
                <label class="u-label u-label-6" for="radiobutton">2</label>
                <br>
                <input type="radio" id="skill3" name="skillLevel" value="3" required="required">
                <label class="u-label u-label-7" for="radiobutton">3</label>
                <br>
                <input type="radio" id="skill4" name="skillLevel" value="4" required="required">
                <label class="u-label u-label-8" for="radiobutton">4</label>
                <br>
                <input type="radio" id="skill5" name="skillLevel" value="5" required="required">
                <label class="u-label u-label-9" for="radiobutton">5 (Expert)</label>
                <br>
              </div>
            </div>
            <!-- Recipe Category -->
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="category" class="u-label u-label-10">Category:</label>
              <div class="u-form-select-wrapper">
                <select name="category" class="u-border-3 u-border-custom-color-1 u-input u-input-rectangle u-radius-6 u-white" required="required">
                  <!-- Fetch available categories from database and display them in the dropdown menu -->
                  <?php
                  // Connect to database
                  require "connect.php";
                  // Select all entries from categories
                  $sql = "select * from categories";
                  $result = $connect->query($sql);
                  while ($row = $result->fetch_assoc()){
                    // Print category option in dropdown menu with value = category_id
                    echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
                  }
                  // Close the database connection
                  $connect->close();
                   ?>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <!-- Upload Anonymously Option -->
            <div class="u-form-checkbox u-form-group u-form-group-8">
              <input type="checkbox" name="anonymousOption" value="anon">
              <label for="anonymousOption" class="u-label u-label-12">Hide my username on this recipe</label>
            </div>
            <!-- Save Recipe Button -->
            <div class="u-align-left u-form-group u-form-submit u-form-group-9">
              <a href="#" class="u-border-3 u-border-palette-3-base u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-37 u-text-hover-white u-text-palette-1-light-3 u-btn-1">Save Recipe</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
          </form>

        </div>
        <a href="my_recipes.php" data-page-id="2997711219" class="u-align-center u-border-3 u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Cancel</a>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-18d8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">
          <span style="font-weight: 700;">Cooktopia</span> Recipe Cookbook and Sharing Platform
        </p>
      </div></footer>
  </body>
</html>
