<?php

//Creating a connection
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "class";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


if (!$conn) {
    // die('Could not connect:' . mysqli_error());
} else {
    //Taking in the values
    $unit = $_POST['unit'];
    $status = $_POST['status'];
    $regno = $_POST['regno'];

    //Inserting values
    $sql = "INSERT INTO attendance(unit, status,regno) 
            VALUES('$unit', '$status', '$regno')";

    if (mysqli_query($conn, $sql)) {
        echo "You attendance status has been recorded successfully";
    } else {
        echo "Could not insert record" . mysqli_error($conn);
    }
}
mysqli_close($conn);
