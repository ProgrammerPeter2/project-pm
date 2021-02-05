<DOCTYPE html>
<html>
    <head>
        <title> Sz&aacute;mol&oacute;g&eacute;p </title>
        <style>
            body{
                algin-items: center;
            }
        </style>
    </head>
    <body>
        <p><a href="../index.html">Kezd&ocirc;lap</a></p>
        <h1> Sz&aacute;mol&oacute;g&eacute;p </h1>
        <h2><strong style="color:red">Figyelem! A sz&aacute;mol&oacute;g&eacute;p nem alkalmas <br/> &ouml;sszetett m&ucirc;veletek kisz&aacute;m&iacute;t&aacute;s&aacute;ra! <br/>
         Ellenkez&ocirc; esetben az els&ocirc; m&ucirc;veleti jel alapj&aacute;n dolgozik a program!<br/>
        A sz&aacute;mok &eacute;s a m&ucirc;veleti jelek k&ouml;z&eacute; sz&oacute;k&ouml;zt kell tenni!</strong></h2>
        <h2> Haszn&aacute;lhat&oacute; m&ucirc;veleti jelek: </h2>
        <table>
            <tr>
                <th>M&ucirc;velet</th>
                <th>M&ucirc;veleti jel</th>
            </tr>
            <tr>
                <td>&Ouml;sszead&aacute;s</td>
                <td>+</td>
            </tr>
            <tr>
                <td>Kivon&aacute;s</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Szorz&aacute;s</td>
                <td>*</td>
            </tr>
            <tr>
                <td>Oszt&aacute;s</td>
                <td>/</td>
            </tr>
        </table>
        <?php if (isset($_GET['error'])) { ?>
     		<p><strong><?php echo $_GET['error']; ?></strong></p>
     	<?php } ?>
        <form action="calculator.php" name="calculate" method="POST">
        <p><label>&Iacute;rd be a m&ucirc;veletet!<br/>
        <input name="calculation" type="text" width="20%"/></label>
        <input name="submit" type="submit" value="Sz&aacute;m&iacute;t&aacute;s!"/></p>
        </form> 
        <?php if (isset($_GET['output']) && $_GET['output'] != "minusEqual") { ?>
     		<p>Eredm&eacute;ny:<?php echo $_GET['output']; ?></p>
     	<?php }else{ ?>
            <p>Eredm&eacute;ny:<?php echo "0" ?></p>
         <?php } ?>
    </body>
</html>