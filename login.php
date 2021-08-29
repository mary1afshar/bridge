<?php
session_start();
    include("connection.php");
$_SESSIONS;
    $email="";
    $password="";
    $email_err="";
    $password_err="";
    $server_err="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       if (empty($_POST["email"])) {
           $email_err = "Email is required";
       } else {
           $email = validate_data($_POST["email"]);
           //check if email is well formed
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $email_err = "Invalid email format. Please enter a valid email.";
           }
       }

       if(empty($_POST["password"])) {
           $password_err = "Password is requried";
       } else {
           $password = validate_data($_POST["password"]);
       }
    }
    //checking if email and password is in db
    if(!empty($_POST["email"]) and !empty($_POST["password"])) {
        $password = validate_data($_POST["password"]);
        $email = validate_data($_POST["email"]);
        $query = "select * from bridge_infomatics where email='$email' limit 1";
        $result = mysqli_query($connect, $query);

        if($result) {
            if($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: meet.php");
                    die;
                } else {
                    $server_err ="Wrong password or email";
                }
            }
        } else {
            $server_err= "Wrong password or email1";
        }
        
    }  else {
        $server_err = "Wrong password or email";
    }

    function validate_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>log in</title>
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

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <label for="email">
                                <h2>Email</h2>
                            </label><br>
                            <input type="text" name="email" id="email" placeholder="Enter your email">
                            <span class="error">*<br><?php echo $email_err; ?> </span><br>
                            <!--Password-->
                            <label for="password">
                                <h2>Password</h2>
                            </label><br>
                            <input type="password" name="password" id="password" placeholder="Enter your password">
                            <span class="error">*<br><?php echo $password_err;?> </span><br>
                            <!--Log in-->
                            <span class="error"><?php echo $server_err;?> </span><br>
                            <a href="meet.php"><input class="button" type="submit" value="LOGIN"></a>
     
                            
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