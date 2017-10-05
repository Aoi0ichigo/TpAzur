<?php
    $nomclient = $REQUEST["nom"];
    $prenomclient = $REQUEST["prenom"];
    $numeroVol = $REQUEST["numVol"];
    $dateDepart= $REQUEST["dateDepart"];
    $heureDepart= $REQUEST["heureDepart"];
    $dateArrivee = $REQUEST["dateArrivee"];
    $heureArrivee=$REQUEST["heureArrivee"];
    $nbPlace=$REQUEST["nbPlace"];
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
            <tr>
                <td>
                    Nombre de places reservé:
                </td>
                <td>
                    $nbPlace;
                </td>
                <th>
                   Prix:
                </th>
                <td>
                    $prix;
                </td>
                <th>
                   Montant:
                </th>
                <td>
                    $prix*$nbPlace;
                </td>
            </tr>
        </table>"
    ?> 
    <input type="submit" value="Valider" />
</form>
