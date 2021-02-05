<?php
include "db_conn.php";

$name = $_GET['name'];
$date = date("Y-m-d h:i:sa");
$ip = $_SERVER['HTTP_CLIENT_IP'];
$sql = "INSERT INTO logs ('type', 'name', 'logTime', 'ip') VALUES ('logout', '$name', '$date', '$ip')";
mysqli_query($conn, $sql);
header("Location: index.php");