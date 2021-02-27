<!DOCTYPE html>
<html>
<body>
    <h1><?php echo stripslashes($_GET['un']); ?> felhaszn&aacute;l&oacute; adatainak m&oacute;dos&iacute;t&aacute;sa</h1>
    <p><?php
        $name = stripslashes($_GET['name']);
        $act = "../index.php?name=".$name;
        echo '<a href="'.$act.'"> Vissza </a>';
    ?></p>
    <form action="<?php echo "actions/edit.php?retName=".stripcslashes($_GET['name'])."&uid=".stripslashes($_GET['uid'])."&uname=".stripslashes($_GET['un']);?>" method="post">
        <table>
            <tr>
            <th style="width: 10%;">Felhaszn&aacute;l&oacute;n&eacute;v</th>
			<th style="width: 10%">N&eacute;v</th>
			<th style="width: 10%">Adminisztr&aacute;tor</th>
			<th style="width: 10%">Discord n&eacute;v</th>
            <?php 
                include "../../db_conn.php";
                $uid = intval($_GET['uid']);
                //mysql
                $sql = "SELECT * FROM users WHERE id='$uid'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                $AdminImage = '<img src="../images/delete.png"/>';
				$dcName = "ismeretlen";
				if($row['admin'] == 1){
					$AdminImage = '<img src="../images/pipa.png"/>';
				}
				if(isset($row['discord_name'])){
					$dcName = $row['discord_name'];
				}
				echo "<td> ".$row['id']." </td>";
				echo "<td> ".$row['username']." </td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$AdminImage."</td>";
				echo "<td>".$dcName."</td>";
				echo "<td>";
            ?>
            </tr>
            <tr>
                <td> </td>
                <td> Nem módosítható </td>
                <td> <input name="nameMod" type="text"/> </td>
                <td> <input name="adminAdd" type="checkbox" value="1" 
                <?php 
                    include "../../db_conn.php";
                    $uid = intval($_GET['uid']);
                    //mysql
                    $sql = "SELECT * FROM users WHERE id='$uid'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
                    if ($uid == 1 || $row['admin'] == 1) {
                       echo 'checked="checked"';
                    }
                ?>/>
                </td>
                <td><input name="dcName" type="text"/></td>
            </tr>
        </table>
    </form>
</body>
</html>