<!DOCTYPE html>
<html>
<head>
	<title> BBS kezd&ocirc;lap </title>
</head>

<body>
	<div id="welcome">
		<p><strong>Welcome back <?php echo $_GET['name']; ?> . </strong></p>
		<p><a href="logout.php?name='$_GET['name']'">Kijelentkez&eacute;s</a></p>
	</div>
</body>
</html>
