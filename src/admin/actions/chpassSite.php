<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1><?php
            $name = stripcslashes($_POST['name']);
            echo $name."felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa";
        ?>    
    </h1>
    </body>
    </html>