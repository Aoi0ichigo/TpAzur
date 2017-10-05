<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <div id="contenu">
            <table >
                    <tr>
                        <th>
                            Vol
                        </th>
                        <th>
                            Depart
                        </th>
                        <th>
                            Date depart
                        </th>
                        <th>
                            Heure depart
                        </th>
                        <th>
                            Arrivee
                        </th>
                        <th>
                            Date arrivee
                        </th>
                        <th>
                            Heure arrivee
                        </th>
                        <th>
                            prix
                        </th>
                        <th>
                            
                        </th>
                    </tr>
            <?php
            $_GET["numero"]="AIR";
            foreach($lesVols as $unVol)
            {
                    $numero = $unVol['numero'] ;
                    $depart=$unVol['depart'] ;
                    $dateDepart=$unVol['dateDepart'] ;
                    $heureDepart=$unVol['heureDepart'] ;
                    $arrivee=$unVol['arrivee'] ;
                    $dateArrivee=$unVol['dateArrivee'] ;
                    $heureArrivee=$unVol['heureArrivee'] ;
                    $prix=$unVol['prix'] ;
            echo"
                    <tr>
                        <td>
                            $numero
                        </td>
                        <td>
                            $depart
                        </td>
                        <td>
                            $dateDepart
                        </td>
                        <td>
                            $heureDepart
                        </td>
                        <td>
                            $arrivee
                        </td>
                        <td>
                            $dateArrivee
                        </td>
                        <td>
                            $heureArrivee
                        </td>
                        <td>
                            $prix
                        </td>
                        <td>
                            <a href='index.php?action=faireResa&numero=$numero'>reservation</a>
                        </td>
                    </tr>
                ";
            }
            ?>
            </table>
        </div>
    </body>
</html>
