<?php
include "db_conn.php";
//get input
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$uname = stripslashes($uname);
$pass = stripslashes($pass);
//mysql
$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
//varaibles
$eventType = "";
$date = date("Y-m-d h:i:sa");
$id = $row['id'];
$link = "";
$isAdmin = 0;
$username = mysqli_real_escape_string($conn, $uname);
//check
if ($row['username'] == $uname && $row['password'] == $pass) {
	$eventType = "succes login";
	$name = $row['name'];
	$isAdmin = $row['admin'];
	if ($isAdmin == 1) {
		$link = "Location: admin/index.php?name='$name'";
	}elseif($isAdmin == 0){
		$link = "Location: home.php?name='$name'";
	}
}else{
	$eventType = "unsuccesed login";
	$link = "Location: index.php?error='Your password or username is wrong!'";
}
//
$sql = "INSERT INTO 'logs' ('type', 'name', 'logTime', 'isAdmin') VALUES ('$eventType', '$username', '$date', '$isAdmin')";
mysqli_query($conn, $sql);
header($link);
exit();