<?php
include "../db_conn.php";

function encode($id, $value){
    $sql = "SELECT * FROM comm WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    $type = gettype($value);
    if ($numRows == 0) {
        $sql = "INSERT INTO comm ('id', 'value','type') VALUES ('$id', '$value', '$type')";
    }else{
        $sql = "UPDATE comm SET value = '$value', type='$type' WHERE id='$id'";
    }
    mysqli_query($conn, $query);
}
