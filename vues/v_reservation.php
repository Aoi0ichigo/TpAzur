<div id="contenu">
    <table border=4 cellspacing=4 cellpadding=4>
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
            ";
        }
    ?>
    </table>
</div>