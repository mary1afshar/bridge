<!doctype html>
<html lang="en">

<head>
    <title>register</title>
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


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                                class="icon-menu h3 text-black"></span></a>
                    </div>

                </div>
            </div>

        </header>

        <div class="register-container">
            <div class="blob1-login">
                <img src="images\blob1.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob2-login">
                <img src="images\blob2.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob3-login">
                <img src="images\blob3.png" alt="Image" class="img-fluid">
            </div>


            <div class="blob2-register">
                <img src="images\blob2.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob3-register">
                <img src="images\blob3.png" alt="Image" class="img-fluid">
            </div>

            <div class="blob4-register">
                <img src="images\blob4.png" alt="Image" class="img-fluid">
            </div>


            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="register-box">

                        <h1>Register to BRIDGE the gap!</h1>
                        <br>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <!--Username-->
                            <lable for="username"> Your Username</lable><br>
                            <input type="text" name="username" id="username" placeholder="Enter your username"><br>
                            <!--Email-->
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" placeholder="Enter your email"><br>
                            <!--Password-->
                            <label for="password">Password</label><br>
                            <input type="password" name="password" placeholder="Enter your Password"><br>
                            <!--Confirm Password-->
                            <label for="confirm_password">Confirm Password</label><br>
                            <input type="confirm_password" name="confirm_password"
                                placeholder="Re-enter Your Password"><br>
                            <!--Role-->
                            <label for="role">Role</label><br>
                            <select id="role" name="role">
                                <option value="student">Student</option>
                                <option value="software_developer">Industry Professional</option>
                                <option value="data_scientist">Data Scientist</option>
                                <option value="designer">Designer</option>
                                <option value="product_manager">Prduct Manager</option>
                                <option value="software_engineer">Software Engineer</option>
                                <option value="data_analyst">Data Analyst</option>
                                <option value="other profession">Other Profession</option>
                            </select><br>
                            <!--Organization-->
                            <label for="organization">Your Organization:</label><br>
                            <input type="text" name="organization"
                                placeholder="Enter Your Company or Organization Name"><br>
                            <!--Phone Number-->
                            <label for="phone_number">Phone Number</label><br>
                            <input type="text" name="phone_number" placeholder="Enter Your Phone Number"><br>
                            <br>
                            <!--Address-->
                            <fieldset>
                                <legend>Address:</legend>
                                <!--Adress Line 1-->
                                <label for="address_line_1">Address Line 1: </label>
                                <input type="text" name="address_line_1" placeholder="Address Line 1"><br>
                                <!-- Address Line 2-->
                                <label for="address_line_2">Address Line 2:</label>
                                <input type="text" name="address_line_2" placeholder="Address Line 2"><br>
                                <!-- City-->
                                <label for="city">City:</label>
                                <input type="text" name="city" placeholder="Your City"><br>
                                <!--Country-->
                                <label for="country">Country:</label>
                                <input type="text" name="country" placeholder="Your country"><br>
                                <!--Zip Code-->
                                <label for="zipcode">Zip Code: </label>
                                <input type="text" name="zipcode" placeholder="Your Zipcode"><br>
                            </fieldset><br><br>

                            <!--Tell Me about Yourself-->
                            <fieldset>
                                <legend>Tell Us About Yourself!</legend>
                                <!--Full Name-->
                                <label for="full_name">Full Name:</label>
                                <input type="text" name="full_name" placeholder="Enter Your Name"><br>
                                <!-- Preferred Name-->
                                <label for="preferred_name">Preferred Name:</label>
                                <input type="text" name="preferred_name" placeholder="Enter your Preferred Name"><br>
                                <!--Pronouns -->
                                <label for="pronouns">Pronouns:</label>
                                <input type="text" name="pronouns" placeholder="Enter Your Pronouns"><br>
                                <!--LinkedIn/ Other Socials-->
                                <label for="linkedin">LinkedIn:</label>
                                <input type="text" name="linkedin" placeholder="Enter Your LinkedIn handle"><br>
                                <label for="other_social">Other Social Media Handle:</label>
                                <input type="text" name="other-socaial" placeholder="Other Social Media Accounts"><br>
                                <!--Description-->
                                <label for="description">Quick Descption</label><br>
                                <textarea name="description" rows="10"
                                    cols="20">Quick Description About Yourself</textarea><br>
                                <!--Fun Facts-->
                                <label for="fun_facts">Fun Facts</label><br>
                                <textarea name="fun_facts" rows="10" cols="20">Some fun facts about You!</textarea><br>
                            </fieldset>
                            <br>
                            <a href="meet.php"><input class="button" type="submit" value="SUBMIT"></a>

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