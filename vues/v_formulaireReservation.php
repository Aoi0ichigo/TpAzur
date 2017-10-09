<div id='contenu'>
<?php
    // récupération du numéro
    $numero = $_REQUEST["numero"];
    $dateDepart= $_REQUEST["dateDepart"];
    $heureDepart= $_REQUEST["heureDepart"];
    $dateArrivee = $_REQUEST["dateArrivee"];
    $heureArrivee=$_REQUEST["heureArrivee"];
    $prix=$_REQUEST["prix"];
    // faire de même les autres paramètres…
?>
    <form methode=POST action="index.php?"  >
        <input type="hidden" name="action" value="valideResa" />
        <input type="hidden" name="numero" value="<?php $numero ?>" />
        <input type="hidden" name="depart" value="<?php $depart ?>" />
        <input type="hidden" name="arrivee" value="<?php $arrivee ?>" />
        <input type="hidden" name="dateDepart" value="<?php $dateDepart ?>" />
        <input type="hidden" name="dateArrivee" value="<?php $dateArrivee ?>" />
        <input type="hidden" name="heureDepart" value="<?php $heureDepart ?>" />
        <input type="hidden" name="heureArrivee " value="<?php $heureArrivee ?>" />
        <input type="hidden" name="prix" value="<?php $prix ?>" />
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
            
        </fieldset>
        <center>
            <input type="submit" value="Valider" />
            <input type="reset" value="Annuler" />
        </center>
    </form>   

</div>