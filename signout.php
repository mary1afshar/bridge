<?php
  session_start();
  $_SESSION;
?>

<!doctype html>
<html lang="en">
<head>
  <title>Sign out</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

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
              <img src="home_images/notebook.svg" alt="logo" />
              Bridge
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">home</a></li>
               
                <li><a href="dashboard.php" class="nav-link">dashboard</a></li>


                <li><a href="meet.php" class="nav-link">meet liv</a></li>
                <li><a href="signout.php" class="nav-link">sign out</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>

    
    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <h1 class="heading mb-3">study 
              buddy</h1>
            <i class="mb-5">your personalized study friend that keeps you motivated and on track</i>
            <p></p>
            <p class="mb-4"><a href="#" class="btn btn-primary">sign in with google</a></p>
          </div>
          <div class="col-lg-6">
            <figure class="illustration2">
              <img src="images/main_blob.png" alt="Image" class="img-fluid">
            <figure class="illustration">
              <img src= "images\undraw_Chatting_re_j55r.svg" alt="Image" class="img-fluid">
              
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>
    

    <!-- MAIN -->
    
    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-4">About Us</h2>
            <p>As two online Computer Science students at the University of Waterloo, we were inspired to create StudyBuddy because we noticed that online school has caused many students to be isolated from peers, friends and teachers. 
              StudyBuddy's mission is to provide a personalized virtual assistant, liv to help students stay motivated with custom reminders and messages.

            </p>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4"></h2>
                
              </div>
              <div class="col-lg-4">

                <ul class="list-unstyled">
                  <div class="row">
                    <div class="column">
                      <div class="card">
                        <img src="images\MaryamAfshar_Headshot.jpg" alt="Jane" style="width:100%">
                        <div class="container">
                          <h2 style="font-size: 23px;">Maryam Afshar</h2>
                          <p class="title">Designer & Developer</p>
                          
                          <a href = "mailto: maryam.afshar@uwaterloo.ca"><button class="button">Contact</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="my-5">
                      <a href="https://www.facebook.com/maryam.afshar.794" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                      <a href="https://www.instagram.com/mary1afshar/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                      <a href="https://www.linkedin.com/in/maryam-afshar-b269b619a/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                  
                </ul>
              </div>
              <div class="col-lg-4">
                <ul class="list-unstyled">
                  <div class="row">
                    <div class="column">
                      <div class="card">
                        <img src="images\blob3.png" alt="Jane" style="width:100%">
                        <div class="container">
                          <h2 style="font-size: 23px;">Jaskomal</h2>
                          <p class="title">Designer & Developer</p>
                          
                          <a href = "mailto: maryam.afshar@uwaterloo.ca"><button class="button">Contact</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="my-5">
                      <a href="https://www.facebook.com/maryam.afshar.794" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                      <a href="https://www.instagram.com/mary1afshar/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                      <a href="https://www.linkedin.com/in/maryam-afshar-b269b619a/" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12">
                <div class="border-top pt-5">
                  <p style="align-items: center" class="copyright"><small>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Maryam & Jaskomal</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
    
                  </div>
                </div>
    
              </div>
            </div>
          </div>
        </div>

  </div> <!-- .site-wrap -->

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