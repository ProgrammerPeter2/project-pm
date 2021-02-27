<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1><?php
        echo stripslashes($_GET['un'])." felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa";
    ?> </h1>
    <form action="<?php echo "actions/chpass.php?retName=".stripcslashes($_GET['name'])."&uid=".stripslashes($_GET['uid'])."&uname=".stripslashes($_GET['un']);?>" method="post">
        <?php if(isset($_GET['error'])){?>
            <p style="color: red"><strong><?php echo $_GET['error'];?></strong></p>
        <?php } ?>
        <p>&Uacute;j jelsz&oacute;: <br/>
        <input name="pass" type="password"/><br/>
        Jelsz&oacute; ism&eacute;tl&eacute;s: <br/>
        <input name="confirm" type="password"/><br/>
        <input name="submit" type="submit" />
        </p>
    </form>
    <p><?php
        $name = stripslashes($_GET['name']);
        $act = "../index.php?name=".$name;
        echo '<a href="'.$act.'"> Vissza </a>';
    ?></p>
    </body>
    </html>