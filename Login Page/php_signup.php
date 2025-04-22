<?php
require('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Hash the password
    // $hashed_password = md5($password);

    $query = "INSERT INTO `signup` (First_Name, Last_Name, User_Id, Email_Id, Password) 
                  VALUES ('$first_name', '$last_name', '$user_id', '$email', '$password')";
    $result = mysqli_query($con, $query);
    // '$hashed_password'
    if ($result) {
        header("Location: Login.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
