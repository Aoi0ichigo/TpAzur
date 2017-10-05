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
<input type="submit" value="Valider" />
<form action="index?action=voirResa" methode="POST">
  
<?php
 echo"     <tr>
              <th>
                Numéro du Vol :
                </th>
                
                <td>
                $numeroVol
                </td>
                <th>
                Nom :
              </th>
            </tr>
                
              <tr>
                <td>
                $nomClient
                </td>
                <th>
                Prénom :
                </th>
                <td>
                $prenomClient
                </td>
                </th>
                </tr>
                
                <th>
                Date et heure de départ :
                </th>
                <td>
                $dateDepart
                $heureDepart
                </td>
                </th>
                </tr>
                
                <th>
                Date et heure d'arriver :
                </th>
                <td>
                $dateArrivee
                $heureArrivee 
                </td>
                </tr>
  "
?> 
</form>