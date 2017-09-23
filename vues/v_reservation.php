<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach($reservations as $uneResa)
            {
                $nomClient=['nomClient'];
                $prenomClient=['prenomClient'];
                $numeroVol=['numero'];
                $qdPlace=['qdPlace'];
                echo"<table border=1>
                    <tr>
                        <td>$nomClient</td>
                        <td>$prenomClient</td>
                        <td>$numeroVol</td>
                        <td>$qdPlace</td>
                    </tr>
                </table>";
            }
        ?>
    </body>
</html>
