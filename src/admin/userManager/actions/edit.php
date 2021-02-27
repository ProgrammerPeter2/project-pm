<?php
include "../../../db_conn.php";

//get the $_get datas
$retName = stripslashes($_GET['retName']);
$id = intval($_GET['uid']);
$uname = stripslashes($_GET['uname']);
$retLink = "name=".$retName."&uid=".$id."&un=".$uname;

//get $post datas
$nameMod = stripcslashes($_POST['nameMod']);
$admin = intval($_POST['adminAdd']);
$discordMod = stripcslashes($_POST['dcName']);

//mysql
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

//new datas
$name = $row['name'];
$isAdmin = $row['admin'];
$discord = $row['discord_name'];
//check the difference
if ($row['name'] != $nameMod) {
    $name = $nameMod;
}
if ($row['admin'] != $isAdmin) {
    if($id == 1 && $admin == 1){
        $isAdmin = $admin;
    }else{
        $error = "Adminisztr&aacute;tor felhaszn&aacute;l&oacute; mindig rendszergazda!";
        header("Location: ../editSite.php?".$retLink."&error=".$error);
        exit();
    }
}
if ($row['discord_name'] != $discordMod) {
    $discord = $discordMod;
}

$sql = "UPDATE users SET name='$nameMod' admin='$isAdmin' discord_name='$discord'";
mysqli_query($conn, $sql);
header("Location: ../../index.php?name='$retName'");
exit();