<?php
session_start();
$_SESSIONS;
    $email="";
    $password="";
    $email_err="";
    $password_err="";

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

    function validate_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridge</title>
</head>
<body>
    <h1>Log In </h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"" method="post">
        <!--Email-->
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <span class="error">*<br><?php echo $email_err; ?> </span><br><br>
        <!--Password-->
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <span class="error">*<br><?php echo $password_err;?> </span><br><br>
        <!--Log in-->
        <input type="submit" value="LOGIN">
    </form>
    
</body>
</html>