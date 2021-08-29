<?php
    $dbhost = "localhost";
    $dbuser ="root";
    $dbpassword ="";
    $dbname ="bridge";

    if (!$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)) {
        die("failed to connect!");
    } else {
        echo("Database connected!");
    }
    
?>
