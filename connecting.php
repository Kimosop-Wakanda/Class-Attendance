<?php

//Creating a connection
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "class";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (!$conn) {
    die('Could not connect:' . mysqli_error());
} else {
    //Taking in the values
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $idno = $_POST['idno'];
    $passwd = $_POST['passwd'];

    //Inserting values
    $sql = "INSERT INTO register(regno, email, course, idno, passwd) 
            VALUES('$regno', '$email', '$course', '$idno', '$passwd')";

    if (mysqli_query($conn, $sql)) {
        echo "You have ENROLLED successfully. You can now Login";
    } else {
        echo "Could not insert record" . mysqli_error($conn);
    }
}
mysqli_close($conn);
