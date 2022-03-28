<?php

$regno = $_POST['regno'];
$email = $_POST['email'];
$course = $_POST['course'];
$idno = $_POST['idno'];
$password = $_POST['psswd'];

$conn = new mysqli('localhost', 'root', '', 'attendance');

$sql = "INSERT INTO register(regno, email, course, idno, password)
VALUES('$regno', '$email', '$course', '$idno', '$password')";

if ($conn->query($sql) === TRUE) {
    # code...
    echo "Data inserted";
} else {
    echo "Error:";
}
