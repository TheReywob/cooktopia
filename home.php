<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Welcome to Cooktopia, Ready To Share Your Creation With The World?">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Cooktopia | Home</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="home.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Site1",
      "logo": "images/Cooktopia.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
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
  <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-6214">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="" data-animation-name="slideIn" data-animation-duration="1500" data-animation-delay="0" data-animation-direction="Down">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-default u-text-1">Welcome to Cooktopia</h2>
                <p class="u-align-center u-custom-font u-font-playfair-display u-text u-text-2">Cooktopia is an online cookbook designed for the mod​​ern chef. Cooktopia allows you to upload and store recipes and share them with the world.</p>
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/91492283-0.png" alt="">
                <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-2" src="images/91492283-01.png" alt="">
                <p class="u-align-justify u-custom-font u-font-playfair-display u-text u-text-3">
                  <span style="font-weight: 700;">Adding a recipe is easy, anyone can do it.</span>
                  <br>Step 1. Create an Account
                  <br>Step 2. Go to Upload Recipe page
                  <br>Step 3. Done! Now you can see your recipe anytime and anywhere.
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-image-3" src="" data-image-width="1280" data-image-height="853" data-animation-name="slideIn" data-animation-duration="1500"
              data-animation-delay="0" data-animation-direction="Right">
              <div class="u-container-layout u-valign-middle u-container-layout-2" src=""></div>
            </div>
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
