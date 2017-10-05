<?php
    $nomclient = $REQUEST["nomClient"];
    $prenomclient = $REQUEST["prenomClient"];
    $numeroVol = $REQUEST["numeroVolt"];
    $dateDepart= $REQUEST["dateDepart"];
    $heureDepart= $REQUEST["heureDepart"];
    $dateArrivee = $REQUEST["dateArrivee"];
    $heureArrivee=$REQUEST["heureArrivee"];
    $prix=$REQUEST["prix"];
    $depart=$REQUEST["depart"];
    $arrivee=$REQUEST["arrivee"];

?>
<form action="index?action=voirResa" methode="POST">

    <?php
        echo" <table>
            <tr>
                 <th>
                   Numéro du Vol :
                 </th>
                <td>
                   $numeroVol
                </td>
            </tr>

            <tr>
                 <th>
                    Client:
                 </th>
                <td>
                   $nomClient
                </td>
                <td>
                   $prenomClient
                </td>
            </tr>
            <tr>
                <th>
                   Départ:
                </th>

                <td>
                    $depart
                </td>
                <td>
                    $dateDepart
                </td>
                <td>
                    $heureDepart
                </td>
            </tr>
            <tr>
                <th>
                    Arriver :
                </th>
                <td>
                    $arrivee
                </td>
                <td>
                    $dateArrivee
                </td>
                <td>
                    $heureArrivee 
                </td>
            </tr>
        </table>"
    ?> 
    <input type="submit" value="Valider" />
</form>
