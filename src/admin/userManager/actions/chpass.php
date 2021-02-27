<?php
include "../../../db_conn.php";

$passw = $_POST['pass'];
$confirmed = $_POST['confirm'];

$uid = $_GET['uid'];
$returnName = $_GET['retNname'];
$uname = $_GET['un'];

if ($passw === $confirmed) {
    $sql = "UPDATE users SET password='$passw' WHERE id='$uid'";
    mysqli_query($conn, $sql);
    header("Location: ../../index.php?name='$returnName'");
    exit();
}else{
    header("Location: ../chpassSite.php?uid=".$uid."&un=".$uname."&name=".$returnName."&error='A jelszavak nem egyeznek!'");
}