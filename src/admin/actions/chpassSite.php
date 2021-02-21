<DOCTYPE html>
    <html>
    <head>
        <title>jelsz&oacute; megv&aacute;ltoztat&aacute;sa</title>
    </head>
    <body>
    <h1><?php
            include "../../db_conn.php";
            $uid = stripcslashes($_GET['uid']);
            $sql = "SELECT name FROM WHERE id='$uid'";
            $conn = mysqli_connect("127.0.0.1","raszpi","Peti?20!", "raszpi");
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row['name']." felhaszn&aacute;l&oacute; jelszav&aacute;nak megv&aacute;ltoztat&aacute;sa";
        ?>
    </h1>
    </body>
    </html>