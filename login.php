<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 14/03/2016
 * Time: 10:55
 */
include("server.php");

if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Both fields are required.";
}
else{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($DB,$sql);

    if(mysqli_num_rows($result) == 1) {
        header("location: index.php"); // Redirecting To another Page
    }
    else {
        echo "Still Incorrect username or password.";
    }

}
?>