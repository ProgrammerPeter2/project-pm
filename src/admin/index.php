<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>&Uuml;dv.: <?php echo stripcslashes($_GET['name']); ?> !</h2>
	<p><a href="../logout.php?name='$_GET['name']'">Kijelentkez&eacute;s</a></p>
	<div id="userConfig">
		<h2>Felhaszn&aacute;l&oacute;k kezel&eacute;se</h2>
		<table style="width: 50%; align-items: left;">
		<tr>
			<th style="width: 1%;">Id.</th>
			<th style="width: 10%;">Felhaszn&aacute;l&oacute;n&eacute;v</th>
			<th style="width: 10%">N&eacute;v</th>
			<th style="width: 10%">Adminisztr&aacute;tor</th>
			<th style="width: 12.25%">M&ucirc;veletek</th>
		</tr>
		<?php
			include "../db_conn.php";
			//mysql
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
				$_POST['un'] = $row['username'];
				$AdminImage = '<img src="images/delete.png"/>';
				if($row['admin'] == 1){
					$AdminImage = '<img src="images/pipa.png"/>';
				}
				echo "<tr>";
				echo "<td> ".$row['id']." </td>";
				echo "<td> ".$row['username']." </td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$AdminImage."</td>";
				echo "<td>";
				echo '<form name="changePass" action="actions/chpassSite.php" method="POST"> <abbr title="Change user password"><input type="image" name="submit" src="images/change pass.png"/></abbr></form>';
				echo '<form name="editUser" action="user_actions.php?act&uid=`e $uid`" method="POST"> <abbr title="Edit user datas"><input type="image" name="submit" src="images/edit.png" /></abbr></form>';
				echo '<form name="deleteUser" action="user_actions.php?act&uid=`dlt $uid`" method="POST"> <abbr title="Delete user"><input type="image" name="submit" src="images/delete.png" /></abbr></form>';
				echo "</td>";
				echo "</tr>";	
			}
		?>

		</table>
	</div>
</body>
</html>