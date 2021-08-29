<?php
  session_start();
  $_SESSION;
?>


<!doctype html>
<html lang="en">

<head>
  <title>meet</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.png">
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
      <div class="blob1">
        <img src="images\blob1.png" alt="Image" class="img-fluid">
      </div>

      <div class="blob2">
        <img src="images\blob2.png" alt="Image" class="img-fluid">
      </div>

      <div class="blob3">
        <img src="images\blob3.png" alt="Image" class="img-fluid">
      </div>

      <div class="blob4">
        <img src="images\blob4.png" alt="Image" class="img-fluid">
      </div>

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
                  <button class="card-btn" id="card-btn-size"><i class="fa fa-heart"></i></button>
                  <button class="card-btn" id="card-btn-size"><i class="fa fa-times-circle"></i></button>
                </div>
              </div>
              <div class="card-column">
                <div class="card-text-box">
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-user card-icons"></i></span> Jane Doe</li>
                    <li><span class="fa-li"><i class="fa fa-graduation-cap card-icons"></i></span>University of Goose
                    </li>
                    <li><span class="fa-li"><i class="fa fa-briefcase card-icons"></i></span> Developer @ Goose</li>
                    <li><span class="fa-li"><i class="fa fa-map-marker card-icons"></i></span> Waterloo, ON </li>
                    <li><span class="fa-li"><i class="fa fa-heart card-icons"></i></span> Swimming, Cooking </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row align-items-center justify-content-center">
            <a id="left" href="meet.php"><button class="card-btn"><i class="fa fa-long-arrow-left"></i></button></a>
              <a id="right" href="meet1.php"><button class="card-btn"><i class="fa fa-long-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
      </div>

    </div>


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