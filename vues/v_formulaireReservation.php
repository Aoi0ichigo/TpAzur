<div id='contenu'>
<?php
    // récupération du numéro
    $numero = $_REQUEST["numero"];
    // faire de même les autres paramètres…
?>
    <form action="index?action=valideResa" methode="POST">
        <input type="hidden" name="numVol" value="$numero" />
        <fieldset>
            <legend >Réservation pour le vol <?php echo $numero?></legend>
            <p>
                <label>Nom</label>
                <input type="text" name="Nom"size="30" />
            </p>
            <p>
                <label>Prenom</label>
                <input type="text" name="Prénom"size="30" />
            </p>
            <p>
                <label>Adresse</label>
                <input type="text" name="Adresse" size="40" />
            </p>
            <p>
                <label>Mail</label>
                <input type="text" name="mail"  size="40" />
            </p>
            <p>
                <label>Nombre de passager</label>
                <input type="text" name="Nombre de voyageurs" />
            </p>
        </fieldset>
        <center>
            <input type="submit" value="Valider" />
            <input type="reset" value="Annuler" />
        </center>
    </form>   

</div>