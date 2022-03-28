<?php
session_start();

include "include/connect.php";
include "include/functions.php";
// checking if the user has clicked the button
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //user has enterd some details
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($username) && !is_numeric($username)) {
        // reading from the database

        $query = "select * from signup where username='$username' limit 1";
        // saving to the database
        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                // assoc() is the short fro associative array
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['signup_id'] = $user_data['signup_id'];
                    header("location: shop/home.php");
                }
            }
        }
        echo "Enter the correct username or password";
    } else {
        echo "Enter valid username or information";
    }
}
