<?php
if (isset($_POST['unit'])) {
    $host = "localhost";
    $username = "root";
    $word = "";
    $db_name = "class";
    $tbl_name = "reg";
    $con = mysqli_connect("$host", "$username", "$word", "$db_name") or die("cannot connect");
    $checkbox1 = $_POST['unit'];
    $chk = "";

    foreach ($checkbox1 as $chk1) {
        $chk .= $chk1 . ",";
    }
    $in_ch = mysqli_query($con, "insert into request_quote(technology) values ('$chk')");
    if ($in_ch == 1) {
        echo '<script>alert("Inserted Sucessfully")</script>';
    } else {
        echo '<script>alert("Failed to Insert")</script>';
    }
}
