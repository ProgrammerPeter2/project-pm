<!DOCTYPE html>
<html>
<head>
    <title>BBS Bejelentkezés</title>
</head>
<body>
    <p><a href="WebCalculator/index.php"> Sz&aacute;mol&oacute;g&eacute;p </a> |
        <a href="Test/index.php">PHP Test</a></p>
    <h1>Bejelentkez&eacute;s</h1>
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?>
    <?php } ?>
    <form name="login" action="old_login.php" method="POST">
        <p><label>Felhaszn&aacute;l&oacute;n&eacute;v: <br/>
        <input type="text" name="uname" placeholder="Felhaszn&aacute;l&oacute;n&eacute;v"/></label>
        <p><label>Jelsz&oacute;: <br/>
        <input type="password" name="pass" placeholder="Jelsz&oacute;"/></label>
        <br/>
        <input type="Submit" value="Bejelentkez&eacute;s"/>
    </form>
</body>
</html>