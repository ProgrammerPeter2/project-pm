<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1><?php
            $name = stripcslashes($_POST['un']);
            echo $name."felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa";
        ?>    
    </h1>
    <p><a href="../index.php">Vissza</a></p>
    </body>
    </html>