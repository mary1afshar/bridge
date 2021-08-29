<?php
echo "Hello World";
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
    <h1>REGISTER NOW</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!--Username-->
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter your username"><br>
        <!--Email-->
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" placeholder="Enter your email"><br>
        <!--Password-->
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="Enter your Password"><br>
        <!--Confirm Password-->
        <label for="confirm_password">Confirm Password</label><br>
        <input type="confirm_password" name="confirm_password" placeholder="Re-enter Your Password"><br>
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
        <input type="text" name="organization" placeholder="Enter Your Company or Organization Name"><br>
        <!--Phone Number-->
        <label for="phone_number">Phone Number</label><br>
        <input type="text" name="phone_number" placeholder="Enter Your Phone Number"><br>
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
            <legend>Tell Me About Yourself</legend><br>
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
        <textarea name="description" rows="10" cols="20">Quick Description About Yourself</textarea><br>
        <!--Fun Facts-->
        <label for="fun_facts">Fun Facts</label><br>
        <textarea name="fun_facts" rows="10" cols="20">Some fun facts about You!</textarea><br>
        </fieldset>
        
    </form>
</body>
</html>