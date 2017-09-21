<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
            function getLesVols()
            {

            // Déclaration d'un tableau

            $vols = array();

              // Appel au fichier permettant la connection à la BD
             require dirname(__FILE__)."/Connection.php";
             // Selection de la base de données et requete SQL
                $requete="select * from Vols naturel join Aeroport";
            // Remplissage d'un tableau correspondant à chaque vol
               $bdd= connect();
                try 
                {	
                    $sql = $bdd->prepare($requete);
                    $sql->execute();
                    while($ligne=$sql->fetch(PDO::FETCH_OBJ))
                    { 
                        $unVol=array($numero => $ligne->numVol ,
                    $depart=>$ligne->nomAero ,
                    $dateDepart=>$ligne->dateDepart ,
                    $heurDepart=>$ligne->heureDepart ,
                    $arrivee=$ligne->arrivee,
                    $dateArrivee=$ligne->dateArrivee ,
                    $heureArrivee=$ligne->heureArrivee ,
                    $prix=$ligne->prix);
                    } 
                }
                catch(PDOException $e)
                {
                    echo "Erreur dans la requête" . $e->getMessage();
                }

             // Remplissage du tableau multi-dimensionnel $vols avec chacun des vols
                


            // Retourner le tableau

            return $vols;

            }
        ?>
    </body>
</html>
