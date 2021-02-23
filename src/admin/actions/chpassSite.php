<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1><?php
        echo stripslashes($_GET['un'])."Felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa";
    ?> </h1>
    <p><?php
        $name = stripslashes($_GET['name']);
        $act = "../index.php?name=".$name;
        echo '<a href="'.$act.'"> Vissza </a>';
    ?></p>
    </body>
    </html>