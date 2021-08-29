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


        <div class="login-container">
            <div class="blob1-login">
                <img src="images\blob1.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob2-login">
                <img src="images\blob2.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob3-login">
                <img src="images\blob3.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob4-login">
                <img src="images\blob4.png" alt="Image" class="img-fluid">
            </div>

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="login-box">

                        <form action="action_page.php">
                            <label for="email">
                                <h2>Email</h2>
                            </label><br>
                            <input type="text" name="email" id="email" placeholder="Enter your email" required>
                            <span class="error">*<br><?php echo $email_err; ?> </span><br><br>
                            <!--Password-->
                            <label for="password">
                                <h2>Password</h2>
                            </label><br>
                            <input type="password" name="password" id="password" placeholder="Enter your password"
                                required>
                            <span class="error">*<br><?php echo $password_err;?> </span><br><br>
                            <!--Log in-->
                            <a href="meet.html"><input class="button" type="submit" value="LOGIN"></a>
                        </form>
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