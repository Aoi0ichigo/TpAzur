<?php
    $nomClient = $_REQUEST["nom"];
    $prenomClient = $_REQUEST["prenom"];
    $numeroVol = $_REQUEST["numero"];
    $dateDepart= $_REQUEST["dateDepart"];
    $heureDepart= $_REQUEST["heureDepart"];
    $dateArrivee = $_REQUEST["dateArrivee"];
    $heureArrivee=$_REQUEST["heureArrivee"];
    $nbPlace=$_REQUEST["nbPlace"];
    $prix=$_REQUEST["prix"];
    $depart=$_REQUEST["depart"];
    $arrivee=$_REQUEST["arrivee"];
    $res=$prix*$nbPlace;
?>
<form methode=POST action="index.php?action=" >
    <input type="hidden" name="action" value="voirResa" />
    <fieldset> 
        <legend>Information de la réservation</legend>
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
                <th>
                    Nombre de places reservé:
                </th>
                <td>
                    $nbPlace
                </td>
                <th>
                   Prix:
                </th>
                <td>
                    $prix
                </td>
                <th>
                   Montant:
                </th>
                <td>
                    $res
                </td>
            </tr>
        </table>"
    ?> 
    </fieldset>
    <input type="submit" value="Valider" />
</form>
