<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($connect);
    $username="";//requried
    $email=""; //requried
    $password=""; //required
    $confirm_password=""; //requried;
    $role="";
    $organization=""; //required
    $phone_number=""; //requried
    $address_line_1=""; //required
    $address_line_2="";
    $city=""; //required
    $country=""; //required
    $zipcode=""; //required
    $full_name=""; //requried
    $preferred_name="";
    $pronouns=""; //required
    $linkedin=""; 
    $other_social="";
    $description="";
    $fun_facts="";

    $username_err="";
    $email_err="";
    $password_err="";
    $confirm_password_err="";
    $confirm_password_match_err="";
    $role_err="";
    $organization_err="";
    $phone_number_err="";
    $address_line_1_err="";
    $address_line_2_err="";
    $city_err="";
    $country_err="";
    $zipcode_err="";
    $full_name_err="";
    $preferred_name_err="";
    $pronouns_err="";
    $other_social_err="";
    $description_err="";
    $fun_facts_err="";
    $linkedin_err="";


    // check for all fields
    if($_SERVER["REQUEST_METHOD"] == "POST") {
         //username
         if(empty($_POST["username"])) {
            $username_err="Please enter a username";
        } else {
            $username= validate_register_data($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
                 $username_err= "Only letters and white space allowed";
            }
        }
        //email
        if(empty($_POST["email"])) {
            $email_err="Please enter a valid email";
        } else {
            $email = validate_register_data($_POST["email"]);
            //check if email has correct format
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_err = "Invalid email format";
            }
        }
         //password
         if(empty($_POST["password"])) {
            $password_err="Password is required";
        } else {
            $password = validate_register_data($_POST["password"]);
        }
        //confirm password
        if(empty($_POST["confirm_password"])) {
            $confirm_password_err="Confirm Your password";
        } else {
            $confirm_password= validate_register_data($_POST["confirm_password"]);
        }

         //confirm password match
         if(!empty($_POST["password"]) and !empty($_POST["confirm_password"])) {
            if($_POST["password"] != $_POST["confirm_password"]) {
                $confirm_password_match_err="Passwords do not match. Please try again.";
            }
        } 

        // role
        if (empty($_POST["role"])) {
            $role_err="Role is required";
        } else {
            $role= validate_register_data($_POST["role"]);
        }
        //organization
        if(empty($_POST["organization"])){
            $organization_err="Organization is required";
        } else {
            $organization = validate_register_data($_POST["organization"]);
        }

        //phone number
        if(empty($_POST["phone_number"])) {
            $phone_number_err ="Phone number is required";
        } else {
            $phone_number = validate_register_data($_POST["phone_number"]);
        }
        //address line 1
        if(empty($_POST["address_line_1"])){
            $address_line_1_err="Please enter your address";
        } else {
            $address_line_1=validate_register_data($_POST["address_line_1"]);
        }

        //address line 2
        if(!empty($_POST["address_line_2"])) {
            $address_line_2 = validate_register_data($_POST["address_line_2"]);
        }
        //city
        if(empty($_POST["city"])) {
            $city_err="City is required";
        } else {
            $city = validate_register_data($_POST["city"]);
        }

        //country
        if(empty($_POST["country"])) {
            $country_err="Country is requried";
        } else {
            $country= validate_register_data($_POST["country"]);
        }
        //zipcode
        if(empty($_POST["zipcode"])){
            $zipcode_err="Zipcode is requried";
        } else {
            $zipcode= validate_register_data($_POST["zipcode"]);
        }

        //full name
        if(empty($_POST["full_name"])){
            $full_name_err="Please enter your full name";
        } else {
             $full_name = validate_register_data($_POST["full_name"]);
        }

        //preferred name
        if(!empty($_POST["preferred_name"])) {
            $preferred_name = validate_register_data($_POST["preferred_name"]);
        }

        //pronouns
        if(empty($_POST["pronouns"])) {
            $pronouns_err = "Pronouns is requried";
        } else {
            $pronouns = validate_register_data($_POST["pronouns"]);
        }

        //linkedin
        if(!empty($_POST["linkedin"])) {
            $linkedin = validate_register_data($_POST["linkedin"]);
            $website = validate_register_data($_POST["linkedin"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$linkedin)) {
                $linkedin_err = "Invalid URL";
            }
        }

        //other social
        if(!empty($_POST["other_social"])){
            $other_social = validate_register_data($_POST["other_social"]);
            $website = validate_register_data($_POST["other_social"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$other_social)) {
                $other_social_err = "Invalid URL";
            }
        }

        //description
        if(empty($_POST["description"])){
            $description_err = "Description is requried";
        } else {
            $description = validate_register_data($_POST["description"]);
        }

        //fun facts
        if(!empty($_POST["fun_facts"])){
            $fun_facts = validate_register_data($_POST["fun_facts"]);
        }
    }

    if(!empty($username) && !empty($email) && !empty($password) && !empty($role) && !empty($organization) && !empty($phone_number) && !empty($address_line_1) && !empty($city) && !empty($country) && !empty($zipcode) && !empty($full_name) && !empty($pronouns) && !empty($description)) {
        $address_line_1 .= ';' . $address_line_2;
        echo $address_line_1;
        $query="insert into bridge_infomatics (username, email, password, role, organization, phone_number, address, city, country, zipcode, full_name, preferred_name, pronouns, linkedin, social, description, fun_facts)
         values ('$username', '$email', '$password', '$role', '$organization', '$phone_number', '$address_line_1', '$city', '$country', '$zipcode', '$full_name', '$preferred_name', '$pronouns', '$linkedin', '$other_social', '$description', '$fun_facts')";
        mysqli_query($connect, $query);
        header("Location: login.php");
        die;
    }

    function validate_register_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }

?>



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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <!--Username-->
                            <lable for="username"> Your Username</lable><br>
                            <input type="text" name="username" id="username" placeholder="Enter your username">
                            <span class="error">*<br><?php echo $username_err;?> </span><br>
                            <!--email-->
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" placeholder="Enter your email">
                            <span class="error">*<br><?php echo $email_err;?> </span><br>
                            <!--Password-->
                            <label for="password">Password</label><br>
                            <input type="password" name="password" placeholder="Enter your Password">
                            <span class="error">*<br><?php echo $password_err;?> </span><br>
                            <!--Confirm Password-->
                            <label for="confirm_password">Confirm Password</label><br>
                            <input type="password" name="confirm_password" placeholder="Re-enter Your Password">
                            <span class="error">*<br><?php echo $confirm_password_err;?> </span><br>
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
                                <option value="other_profession">Other Profession</option>
                            </select><br>
                            <span class="error">*<br><?php echo $role_err;?> </span><br>
                            <!--Organization-->
                            <label for="organization">Your Organization:</label><br>
                            <input type="text" name="organization" placeholder="Enter Your Company or Organization Name">
                            <span class="error">*<br><?php echo $organization_err;?> </span><br>
                            <!--Phone Number-->
                            <label for="phone_number">Phone Number</label><br>
                            <input type="text" name="phone_number" placeholder="Enter Your Phone Number">
                            <span class="error">*<br><?php echo $phone_number_err;?> </span><br>
                            <br>
                            <!--Address-->
                            <fieldset>
                                <legend>Address:</legend>
                                <!--Adress Line 1-->
                                <label for="address_line_1">Address Line 1: </label>
                                <input type="text" name="address_line_1" placeholder="Address Line 1">
                                <span class="error">*<br><?php echo $address_line_1_err;?> </span><br>
                                <!-- Address Line 2-->
                                <label for="address_line_2">Address Line 2:</label>
                                <input type="text" name="address_line_2" placeholder="Address Line 2">
                                <span class="error">*<br><?php echo $address_line_2_err;?> </span><br>
                                <!-- City-->
                                <label for="city">City:</label>
                                <input type="text" name="city" placeholder="Your City">
                                <span class="error">*<br><?php echo $city_err;?> </span><br>
                                <!--Country-->
                                <label for="country">Country:</label>
                                <input type="text" name="country" placeholder="Your country">
                                <span class="error">*<br><?php echo $country_err;?> </span><br>
                                <!--Zip Code-->
                                <label for="zipcode">Zip Code:</label>
                                <input type="text" name="zipcode" placeholder="Your Zipcode">
                                <span class="error">*<br><?php echo $zipcode_err;?> </span><br>
                            </fieldset><br><br>

                            <!--Tell Me about Yourself-->
                            <fieldset>
                                <legend>Tell Us About Yourself!</legend>
                                <!--Full Name-->
                                <label for="full_name">Full Name:</label>
                                <input type="text" name="full_name" placeholder="Enter Your Name">
                                <span class="error">*<br><?php echo $full_name_err;?> </span><br>
                                <!-- Preferred Name-->
                                <label for="preferred_name">Preferred Name:</label>
                                <input type="text" name="preferred_name" placeholder="Enter your Preferred Name">
                                <span class="error">*<br><?php echo $preferred_name_err;?> </span><br>
                                <!--Pronouns -->
                                <label for="pronouns">Pronouns:</label>
                                <input type="text" name="pronouns" placeholder="Enter Your Pronouns">
                                <span class="error">*<br><?php echo $pronouns_err;?> </span><br>
                                <!--LinkedIn/ Other Socials-->
                                <label for="linkedin">LinkedIn:</label>
                                <input type="text" name="linkedin" placeholder="Enter Your LinkedIn handle">
                                <span class="error">*<br><?php echo $linkedin_err;?> </span><br>
                                <label for="other_social">Other Social Media Handle:</label>
                                <input type="text" name="other_social" placeholder="Other Social Media Accounts">
                                <span class="error">*<br><?php echo $other_social_err;?> </span><br>
                                <!--Description-->
                                <label for="description">Quick Descption</label>
                                <textarea name="description" rows="10"
                                    cols="20">Quick Description About Yourself</textarea>
                                <span class="error">*<br><?php echo $description_err;?> </span><br>
                                <!--Fun Facts-->
                                <label for="fun_facts">Fun Facts</label><br>
                                <textarea name="fun_facts" rows="10" cols="20">Some fun facts about You!</textarea>
                                <span class="error">*<br><?php echo $fun_facts_err;?></span><br>
                            </fieldset>
                            <br>
                            <span class="error">*<br><?php echo $confirm_password_match_err;?> </span><br>
                            <input class="button" type="submit" value="SUBMIT">
                            


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