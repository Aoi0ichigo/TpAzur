<div id="contenu">
    <table border=3 cellpadding=4>
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
                    Place restante
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
            $nbPlace=$unVol['nbPlace'];
            $prix=$unVol['prix'] ;
            $_SESSION["numero"]=$numero;
            $_SESSION["prix"]=$prix ;
            $_SESSION["depart"]=$depart;
            $_SESSION["arrivee"]=$arrivee;
            $_SESSION["dateArrivee"]=$dateArrivee;
            $_SESSION["heureArrivee"]=$heureArrivee;
            $_SESSION["heureDepart"]=$heureDepart;
            $_SESSION["dateDepart"]=$dateDepart;
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
                    $nbPlace
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