<?php

session_start();

require('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM `signup` WHERE User_Id='$user_id' AND Password='$password'";
    // $query = "SELECT * FROM `signup` WHERE User_Id='$user_id' AND Password='".md5($password)."'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        // Session variable
        $_SESSION['User_Id'] = $user_id;

        header("Location: ../Mobile_Shop_with_Login.php");
        exit();
    } 
    else
    { 
        header("Location: Login.html");
    }
}
?>