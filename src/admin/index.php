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
			<th style="width: 10%">Discord n&eacute;v</th>
			<th style="width: 12.25%">M&ucirc;veletek</th>
		</tr>
		<?php
			include "../db_conn.php";
			//mysql
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
				$AdminImage = '<img src="images/delete.png"/>';
				$dcName = "ismeretlen";
				if($row['admin'] == 1){
					$AdminImage = '<img src="images/pipa.png"/>';
				}
				if(isset($row['discord_name'])){
					$dcName = $row['discord_name'];
				}
				echo "<tr>";
				echo "<td> ".$row['id']." </td>";
				echo "<td> ".$row['username']." </td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$AdminImage."</td>";
				echo "<td>".$dcName."</td>";
				echo "<td>";
				$link = "uid=".$row['id']."&un=".$row['username']."&name=".stripslashes($_GET['name']);
				$chPass = "userManager/chpassSite.php?".$link;
				$editUs = "userManager/editSite.php?uid=".$link;
				$delU = "userManager/deleteSite.php?".$link;
				if ($row['admin'] != 1) {
					echo '<form name="changePass" action="'.$chPass.'" method="POST"> <abbr title="Change user password"><input type="image" name="submit" src="images/change pass.png"/></abbr></form>';
					echo '<form name="editUser" action="'.$editUs.'" method="POST"> <abbr title="Edit user datas"><input type="image" name="submit" src="images/edit.png" /></abbr></form>';
					echo '<form name="deleteUser" action="'.$delU.'" method="POST"> <abbr title="Delete user"><input type="image" name="submit" src="images/delete.png" /></abbr></form>';
				}
				if(intval($_GET['id']) == 1 && $row['admin'] == 1){
					echo '<form name="changePass" action="'.$chPass.'" method="POST"> <abbr title="Change user password"><input type="image" name="submit" src="images/change pass.png"/></abbr></form>';
					echo '<form name="editUser" action="'.$editUs.'" method="POST"> <abbr title="Edit user datas"><input type="image" name="submit" src="images/edit.png" /></abbr></form>';
					echo '<form name="deleteUser" action="'.$delU.'" method="POST"> <abbr title="Delete user"><input type="image" name="submit" src="images/delete.png" /></abbr></form>';
				}
				echo "</td>";
				echo "</tr>";	
			}
		?>

		</table>
	</div>
</body>
</html>