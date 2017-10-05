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
        <table border>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Num Vol</th>
                        <th>Nombre de places</th>
                        <th>PDF</th>
                    </tr>
        <?php
            foreach($reservations as $uneResa)
            {
                $nomClient=$uneResa['nomClient'];
                $prenomClient=$uneResa['prenomClient'];
                $numeroVol=$uneResa['numero'];
                $qdPlace=$uneResa['qdPlace'];
                echo"
                    <tr>
                        <td>$nomClient</td>
                        <td>$prenomClient</td>
                        <td>$numeroVol</td>
                        <td>$qdPlace</td>
                        <td><a href='fpdf/pdf.php'>pdf</a></td>
                    </tr>
                </table>";
            }
        ?>
    </body>
</html>
