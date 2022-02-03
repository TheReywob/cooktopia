<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cooktopia | Create Account</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="create_account.css" media="screen">
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
    <meta property="og:title" content="New Account">
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
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-91f8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/cooktopia_logo.JPG" alt="" data-image-width="500" data-image-height="500">
        <div class="u-align-center u-container-style u-grey-10 u-group u-radius-50 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 45.532 45.532" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-862c"></use></svg><svg class="u-svg-content" viewBox="0 0 45.532 45.532" x="0px" y="0px" id="svg-862c" style="enable-background:new 0 0 45.532 45.532;"><g><path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
</g></svg></span>
            <h3 class="u-text u-text-default u-text-1">New User Account</h3>
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="insert_account.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" source="custom" name="form-3" style="padding: 10px;">
                <!-- Username Input -->
                <div class="u-form-group u-form-name">
                  <label for="username-5b0a" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Choose a Username" id="username-5b0a" name="username" value="<?=$_REQUEST['fill-username']?>" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white">
                </div>
                <!-- Password Input -->
                <div class="u-form-group u-form-password">
                  <label for="password-5b0a" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Choose a Password" id="password-5b0a" name="password" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white">
                </div>
                <!-- Password Input -->
                <div class="u-form-group u-form-password">
                  <label for="password-5b0a" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Verify Your Password" id="password-5b0a" name="password-verify" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white">
                </div>
                <!-- Log In Button -->
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-50 u-btn-1">Create Account</a>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <!-- Create Account Button -->
            <a href="sign-in_form.php" style="color:rgb(72,138,198);">I already have an account</a><br/>
            <!-- If error occurs creating user, print here -->
            <?php echo '<p style="color:rgb(215,52,70)">' . $_REQUEST['error'] . '<p/>'; ?>
          </div>
        </div>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-18d8"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">
          <span style="font-weight: 700;">Cooktopia</span> Recipe Cookbook and Sharing Platform
        </p>
      </div></footer>
  </body>
</html>
