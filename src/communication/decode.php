<?php
include "../db_conn.php";

class decode{
    function convertToType($raw, $type){
        $converted = null;
        if($type == 'string'){
            $converted = strval($raw);
        }elseif ($type == 'integer') {
            $converted = intval($raw);
        }
        return $converted;
    }
    
    public function decode($id){
        $sql = "SELECT value, type FROM comm WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $type = $row['type'];
        $value = convertToType($row['value'], $type);
        return $value;
    }
}