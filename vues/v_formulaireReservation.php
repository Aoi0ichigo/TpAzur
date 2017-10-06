<div id='contenu'>
<?php
    // récupération du numéro
    $numero = $_REQUEST["numero"];
    // faire de même les autres paramètres…
?>
    <form action="index.php?action=valideResa" methode="POST">
       <fieldset>
            <legend>Réservation pour le vol <?php echo $numero?></legend>
            <p>
                <label>Nom</label>
                <input type="text" name="nom"size="30" />
            </p>
            <p>
                <label>Prenom</label>
                <input type="text" name="prenom"size="30" />
            </p>
            <p>
                <label>Adresse</label>
                <input type="text" name="adresse" size="40" />
            </p>
            <p>
                <label>Mail</label>
                <input type="text" name="mail"  size="40" />
            </p>
            <p>
                <label>Nombre de passager</label>
                <input type="text" name="nbPlace" />
            </p>
            <input type="hidden" name="numVol" value="<?php $numero ?>" />
            <input type="hidden" name="depart" value="<?php $depart ?>" />
            <input type="hidden" name="arrivee" value="<?php $arrivee ?>" />
        </fieldset>
        <center>
            <input type="submit" value="Valider" />
            <input type="reset" value="Annuler" />
        </center>
    </form>   

</div>