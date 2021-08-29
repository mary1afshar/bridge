<?php
  session_start();
  $_SESSION;
?>


<!doctype html>
<html lang="en">

<head>
  <title>meet</title>
  <link rel="shortcut icon" type="image/png" href="home_images/notebook.svg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">


      <div class="container">
        <div class="row align-items-center">
          <div class="logo">
            <img src="images/logo.png" alt="logo" />
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                <li><a href="messages.php" class="nav-link">messages</a></li>
                <li><a href="meet.php" class="nav-link">meet</a></li>
                <li><a href="profile.php" class="nav-link">profile</a></li>
                <a href="index.php" class="nav-link">sign out</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
              class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a>
          </div>

        </div>
      </div>

    </header>




    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="id-card">
            <div class="card-row">
              <div class="card-column">
                <!-- add the images from the database -->
                <div class="card-image-box">
                  <img class="card-image" src="images/stockimage.jpg" alt="stock">
                </div>
                <div class="icon-row">
                  <button class="card-btn" id="heart"><i class="fa fa-heart"></i></button>
                  <button class="card-btn" id="cross"><i class="fa fa-times-circle"></i></button>
                </div>
              </div>
              <div class="card-column">
                <div class="card-text-box">
                  <ul style="list-style-type:none;">
                    <li><i class="fa fa-user card-icons"></i></li>
                    <li><i class="fa fa-graduation-cap card-icons"></i></li>
                    <li><i class="fa fa-briefcase card-icons"></i></li>
                    <li><i class="fa fa-map-marker card-icons"></i></li>
                    <li><i class="fa fa-heart card-icons"></i></li>
                  </ul>  
                </div>
              </div>
            </div>
            <div class="row align-items-center justify-content-center">
              <button class="card-btn" id="left"><i class="fa fa-long-arrow-left"></i></button>
              <button class="card-btn" id="right"><i class="fa fa-long-arrow-right"></i></button>
            </div>  
          </div>
        </div>
      </div>
    </div>

          <!-- 
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"></span>
            <h1 class="heading mb-3">meet liv</h1>
            <i style="text-align:left;"> your personalized study friend and
               assistant to keep you company</i>
               <p >liv can:</p>

            <p style="text-align:left;"  span class="fa fa-gear"> add events to your planner </p>
            <p></p>
            <p style="text-align:left;" span class="fa fa-gear"> play relaxing study music</p>
            <p></p>
            <p style="text-align:left;" span class="fa fa-gear"> give friendly reminders about deadlines</p>
            <p></p>
            <p style="text-align:left;" span class="fa fa-gear"> provide study inspo </p>
            <p></p>
            <p class="mb-4"><a href="dashboard.html" class="btn1 btn-primary">get started</a></p>

          </div>
          <div class="col-lg-6">
            <figure class="illustration1">
              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
              <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_ofa3xwo7.json"  background="transparent"  speed="1"  style="width: 630px; height: 630px;" 
               loop  autoplay></lottie-player>
            </figure>
          </div>
          <div class="col-lg-6"></div>
          </div>
          
        </div>
      </div>
    </div>
    -->


          <!-- MAIN -->


          <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/jquery-ui.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/owl.carousel.min.js"></script>
          <script src="js/jquery.countdown.min.js"></script>
          <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/aos.js"></script>
          <script src="js/jquery.fancybox.min.js"></script>
          <script src="js/jquery.sticky.js"></script>
          <script src="js/isotope.pkgd.min.js"></script>


          <script src="js/main.js"></script>


</body>

</html>