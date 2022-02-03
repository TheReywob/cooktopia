<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Cooktopia | Saved Recipes</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="browse.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Site1",
      "logo": "images/Cooktopia.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Display Page">
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
  <section class="u-align-center u-clearfix u-custom-color-1 u-section-1" id="sec-a638">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-1">My Saved Recipes</h1>
    </div>
  </section>

  <section class="u-clearfix u-custom-color-1 u-section-2" id="sec-36ba">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1"></div>
      </div>

      <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">

                <?php
                // Counter - used for keeping track of how many recipes there are
                $idNumber = 0;
                // Get currently signed in user's userId
                $userId = $_SESSION['userId'];
                // Connect to database
                require "connect.php";
                // Select user saved entries from saved_recipes (newest to oldest)
                $sql = "select * from saved_recipes where userId = '$userId'";
                $result = $connect->query($sql);
                // If the user has no saves
                if ($result->num_rows == 0){
                  echo "<h3>It looks like you haven't saved any recipes yet.</h3>";
                }
                // Loop through all rows in the table
                while ($row = $result->fetch_assoc()){
                // Increment counter
                $idNumber++;

                // Fetch recipe
                $recipeID = $row['recipeId'];
                $rec_sql = "select * from recipes where eId = '$recipeID'";
                $rec_result = $connect->query($rec_sql);
                while ($rec_row = $rec_result->fetch_assoc()){

                // Every 2 boxes, create a new row
                if ($idNumber % 2 == 1) {
                  echo '</div></div>';
                  echo '<div class="u-size-30">';
                  echo '<div class="u-layout-row">';
                }

                // Create recipe display area
                echo '<div class="u-container-style u-layout-cell u-palette-1-base u-radius-50 u-size-30 u-layout-cell-2">';
                echo '<div class="u-border-5 u-border-palette-3-base u-container-layout u-container-layout-2">';

                // Print recipe image (defaults to sample picture if image from database is not found)
                echo '<img class="u-align-center u-image u-image-round u-radius-10 u-image-1" src="images/recipe_images/' . $rec_row['eImage'] . '" onerror=this.src="images/recipe_images/sample.png" data-image-width="728" data-image-height="1092">';

                // Print recipe category
                // Fetch category name based on categoryID
                $cat_id = $rec_row['eCategoryId'];
                $category_sql = "select * from categories where category_id='$cat_id'";
                $category_result = $connect->query($category_sql);
                while ($category_row = $category_result->fetch_assoc()){
                  $category = $category_row['category_name'];
                }
                echo '<h4 class="u-align-center u-text u-text-default u-text-1">'.$category.'</h4>';

                // Print recipe name
                echo '<h2 class="u-align-center u-text u-text-default u-text-2">'.$rec_row['eTitle'].'</h2>';

                // Print recipe description
                echo '<h4 class="u-align-center u-text u-text-default u-text-3">'.$rec_row['eDescription'].'</h4>';

                // Print recipe skill level
                echo '<h4 class="u-align-center u-text u-text-default u-text-4">';
                echo '<span style="font-size: 1rem;">Skill Level: </span>';
                echo '<span style="font-weight: 700;">'.$rec_row['eSkillLevel'].'/5</span>';
                echo '</h4>';

                // Create See Recipe button
                echo '<form action="get_recipe.php" method="post">';
                echo '<input name="submit[' . $rec_row['eId'] . ']" type="submit" value="See Recipe" class="u-align-center u-border-3 u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1" style="border-width:3px">';
                echo '</form>';

                // Create Save Recipe button
                echo '<form action="unsave.php" method="post">';
                echo '<input name="submit[' . $rec_row['eId'] . ']" type="submit" value="Unsave" class="u-align-center u-border-3 u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1" style="border-width:3px">';
                echo '</form>';

                // Print recipe author and date of creation
                // Check if recipe was uploaded anonymously
                if ($rec_row['anon'] == 1){
                  // If recipe was uploaded anonymously, set $creator as "Anonymous"
                  $creator = "Anonymous";
                } else {
                  // Otherwise, set $creator as <username>
                  // Fetch the username from username table based on userId from recipe table
                  $users_id = $rec_row['userId'];
                  $user_sql = "select username from users where userId='$users_id'";
                  $user_result = $connect->query($user_sql);
                  while ($user_row = $user_result->fetch_assoc()){
                    $creator = $user_row['username'];
                  }
                }
                echo '<h4 class="u-align-center u-text u-text-default u-text-grey-15 u-text-5">Uploaded by '.$creator.' on '.$rec_row['eDate'].'</h4>';

                // Close recipe display area
                echo '</div></div>';


              }
                }
                // Close the database connection
                $connect->close();
                ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-18d8">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">
        <span style="font-weight: 700;">Cooktopia</span> Recipe Cookbook and Sharing Platform
      </p>
    </div>
  </footer>

</body>
</html>
