<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1>Felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa </h1>
    <p><?php echo $_GET['name']; ?></p>
    <p><?php
        $act = "../index.php?name='".$_GET['name']."'";
        echo '<a href="'.$act.'"> Vissza </a>';
    ?></p>
    </body>
    </html>