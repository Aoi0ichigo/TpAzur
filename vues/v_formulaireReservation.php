<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id='contenu'>
        <?php
            // récupération du numéro
            $numero = $_REQUEST["numero"];
            // faire de même les autres paramètres…
        ?>
            <form action="index?action=valideResa" methode="POST">
                <fieldset>
                    <legende>Reversation pour le vol <?php echo $numero?></legende>
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
                    <input type="hidden" name="numVol" value="$numero" />
                </fieldset>
                <input type="submit" value="Valider" />
                <input type="reset" value="Annuler" />

            </form>   
            
        </div>
    </body>
</html>
