<div id='contenu'>
<?php
    // récupération du numéro 
    // faire de même les autres paramètres…
    $numero = $_REQUEST["numero"];
    $_SESSION["numero"]=$numero;
   
?>
    <form methode=POST action="index.php?"  >
        <input type="hidden" name="action" value="valideResa" />
        
       <fieldset>
            <legend>Réservation pour le vol <?php echo $numero?></legend>
            <p>
                <label>Nom</label>
                <input type="text" name="nomClient"size="30" />
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