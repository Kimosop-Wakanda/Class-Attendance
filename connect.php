<?php
// database details
$username = $_POST['username'];
$regno = $_POST['regno'];
$email = $_POST['email'];
$course = $_POST['course'];
$id = $_POST['id'];
$password = $_POST['password'];

// database connection with the form
$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = "class_attendance";

$conn = new mysqli("localhost", "root", '', "class_attendance");

if ($conn->connect_error) {
    die('connection : ' . $conn->connect_error);
} else {
    $sql = ("Insert Into signup (username, regno, email, course, id, password)
    VALUES('$username', '$regno', '$email', '$course', '$id', '$password')");
}

// closure message
$sql = mysqli_query($conn, $sql);
if ($sql == true) {
    echo "You have been Enrolled sucessfully";
} else {

    echo "Not saved! sorry";
}
