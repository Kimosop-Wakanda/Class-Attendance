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
    $year = $_POST['year'];
    $unit1 = $_POST['unit1'];
    $unit2 = $_POST['unit2'];
    $unit3 = $_POST['unit3'];
    $unit4 = $_POST['unit4'];
    $unit5 = $_POST['unit5'];
    $unit6 = $_POST['unit6'];
    $unit7 = $_POST['unit7'];


    //Inserting values
    $sql = "INSERT INTO unitoffer(year, unit1, unit2, unit3, unit4, unit5, unit6, unit7) 
            VALUES('$year','$unit1', '$unit2', '$unit3', '$unit4', '$unit5', '$unit6', '$unit7')";

    if (mysqli_query($conn, $sql)) {
        echo "You have offered the units successfully";
    } else {
        echo "Could not insert record" . mysqli_error($conn);
    }
}
mysqli_close($conn);
