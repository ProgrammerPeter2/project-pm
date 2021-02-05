<!DOCTYPE html>
<html>
<head>
	<title>Admin felület</title>
</head>
<body>
	<h2>&Uuml;dv.: <?php echo stripcslashes($_GET['name']); ?> !</h2>
	<p><a href="../logout.php?name='$_GET['name']'">Kijelentkez&eacute;s</a></p>
	<div id="userConfig">
		<h2>Felhaszn&aacute;l&oacute;k kezel&eacute;se</h2>

		<table style="width: 50%;">
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
				$AdminImage = '<img src="images/delete.png"/>';
				if($row['admin'] == 1){
					$AdminImage = '<img src="images/pipa.png"/>';
				}
				$uid = $row['id'];
				$chValue = "actions/chpass.php?uid='".$uid.'"';
				$editValue = "actions/edit.php?uid='".$uid.'"';
				$delValue = "actions/delete.php?uid='".$uid.'"';
				echo "<tr>";
				echo "<td> ".$uid." </td>";
				echo "<td> ".$row['username']." </td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$AdminImage."</td>";
				echo "<td>";
				echo '<form action="'.$chValue.'" method="post"><abbr title="Change user password"><input type="image" src="images/change pass.png"/></abbr></form>';
				echo '<form action="'.$editValue.'" method="post"><abbr title="Edit user datas"><input type="image" src="images/edit.png" /></abbr></form>';
				echo '<form action="'.$delValue.'" method="post><abbr title="Delete user"><input type="image" src="images/delete.png" /></abbr></form>"';
				echo "</td>";
				echo "</tr>";	
			}
		?>
		</table>
	</div>
</body>
</html>