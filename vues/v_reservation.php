<div id="contenu">
    <table border=4 cellspacing=4 cellpadding=4>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Num Vol</th>
                    <th>Nombre de places</th>
                    <th>Action </th>
                </tr>
    <?php
        foreach($reservations as $uneResa)
        {
            $nomClient=$uneResa['nomClient'];
            $prenomClient=$uneResa['prenomClient'];
            $numeroVol=$uneResa['numero'];
            $nbPlace=$_SESSION["nbPlace"]=$qdPlace=$uneResa['qdPlace'];
            $numResa=$_SESSION["numResa"]=$uneResa['numResa'];
            echo"
                <tr>
                    <td>$nomClient</td>
                    <td>$prenomClient</td>
                    <td>$numeroVol</td>
                    <td>$qdPlace</td>
                    <td><a href='index.php?action=pdf&numResa=$numResa'><img src='images/pdf_icon.gif'> </a> <a href='index.php?action=supprime&numResa=$numResa&nbPlace=$nbPlace'><img src='images/supprime_icon.gif'> </a></td>
                </tr>
            ";
        }
    ?>
    </table>
</div>