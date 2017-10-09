<?php
    $nomClient = $_REQUEST["nomClient"];
    $prenomClient = $_REQUEST["prenom"];
    $nbPlace = $_REQUEST["nbPlace"];
    $adresse = $_REQUEST["adresse"];
    $mail = $_REQUEST["mail"];
    $numero = $_SESSION["numero"];
    $dateDepart= $_SESSION["dateDepart"];
    $heureDepart= $_SESSION["heureDepart"];
    $dateArrivee = $_SESSION["dateArrivee"];
    $heureArrivee=$_SESSION["heureArrivee"];
    $prix=$_SESSION["prix"];
    $depart=$_SESSION["depart"];
    $arrivee=$_SESSION["arrivee"];
    $res=$prix*$nbPlace;
?>
<form methode=POST action="index.php?action=" >
    <input type="hidden" name="action" value="valide" />
    <fieldset> 
        <legend>Information de la réservation</legend>
    <?php
        echo" <table>
            <tr>
                 <th>
                   Numéro du Vol :
                 </th>
                <td>
                   $numero
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
