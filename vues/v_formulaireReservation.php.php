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
            $reservation["numero"] =  $numero;
            // faire de même les autres paramètres…
        ?>
            <form action="index?action=valideResa" methode="POST">
                <input type="text" name="Nom" value="" size="30" />
                <input type="text" name="Prénom" value="" size="30" />
                <input type="text" name="Adresse" value="" size="40" />
                <input type="text" name="mail" value="" size="40" />
                <input type="text" name="Nombre de voyageurs" value="" />
                <input type="submit" value="Valider" name="Valider" /> <input type="reset" value="Annuler" name="Annuler" />
            </form>   
            
        </div>
    </body>
</html>
