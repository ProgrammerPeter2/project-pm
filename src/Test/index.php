<!DOCTYPE html>
<html>
<head>
	<title> PHP Test</title>
</head>
<body>
	<p> <a href="../index.php">Kezd&ocirc;lap</a></p>
	<h2> &Aacute;ltal&aacute;nos inform&aacute;ci&oacute;k </h2>
	<p> <strong> PHP verzi&oacute;: </strong> <?php echo phpversion(); ?> </p>
	<h2> $_SERVER infók </h2>
	<p> <?php include "../functions.php"; print_l($_SERVER); ?>
</body>
</html>