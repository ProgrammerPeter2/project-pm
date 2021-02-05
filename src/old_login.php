<?php
include 'db_conn.php';

$date = date("Y-m-d h:i:sa");
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$uname = stripcslashes($uname);
$pass = stripcslashes($pass);

$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row['username'] == $uname && $row['password'] == $pass){
	$name = $row['name'];
	$isAdmin = $row['admin'];
	$sql = "INSERT INTO logs ('type', 'name', 'logTime', 'admin') VALUES ('login', '$name', '$date', '$isAdmin')";
	mysqli_query($conn, $sql);
	if($isAdmin == 1){
		header("Location: admin/index.php?name='$name'");
	}elseif($isAdmin == 0){
		header("Location: home.php?name='$name'");
	}
	exit();
}else{
	$sql = "INSERT INTO logs ('type', 'name',  'logTime', 'admin') VALUES ('login_fail', 'unknown', '$date', 2)";
	mysqli_query($conn, $sql);
	header("Location: index.php?error='Your name or password is wrong!'");
	exit();
}