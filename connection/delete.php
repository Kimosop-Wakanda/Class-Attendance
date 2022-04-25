<?php
include "DB.php";

global $insert;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM inf WHERE comment_id='$id'";
    mysqli_query($insert, $sql);

    header("Location: " . $_SERVER['HTTP_REFERER']);
}
