
<?php
    function getLesVols()
    {

    // D�claration d'un tableau

    $vols = array();

      // Appel au fichier permettant la connection � la BD
     require dirname(__FILE__)."/Connection.php";
     // Selection de la base de donn�es et requete SQL
     $requete="select numero,A1.nomAero as depart,dateDepart,heureDepart,A2.nomAero as arrive,dateArrivee,heureArrivee,prix,nbPlace from vol "
             . "join aeroport as A1 on A1.numAero=depart "
             . "join aeroport as A2 on A2.numAero=arrivee";
    // Remplissage d'un tableau correspondant � chaque vol
        $bdd= connect();
        $i=0;
        try 
        {	
            $sql = $bdd->prepare($requete);
            $sql->execute();

            while($ligne=$sql->fetch(PDO::FETCH_OBJ))
            { 

                $unVol[$i]= ["numero"=>$ligne->numero,
                    "depart"=>$ligne->depart,
                    "dateDepart"=>$ligne->dateDepart,
                    "heureDepart"=>$ligne->heureDepart,
                    "arrivee"=>$ligne->arrive,
                    "dateArrivee"=>$ligne->dateArrivee,
                    "heureArrivee"=>$ligne->heureArrivee,
                    "prix"=>$ligne->prix,
                    "nbPlace"=>$ligne->nbPlace];
                $i++;
            } 

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }

     // Remplissage du tableau multi-dimensionnel $vols avec chacun des vols

        for($r=0;$r<$i;$r++){
            array_push($vols,$unVol[$r]);
        }

    // Retourner le tableau

    return $vols;

    }

    function getLesResa(){

    // D�claration d'un tableau

    $reservations = array();

      // Appel au fichier permettant la connection � la BD
     require dirname(__FILE__)."/Connection.php";
     // Selection de la base de donn�es et requete SQL
        $requete="select * from reservation ";/*where numAgence=:numAgence*/
    // Remplissage d'un tableau correspondant � chaque reservation
        $bdd= connect();
        $i=0;
        try 
        {	
            $sql = $bdd->prepare($requete);
            //$sql->bindParam( ':numAgence',$SESSION['agence'],PDO::PARAM_STR);
            $sql->execute();

            while($ligne=$sql->fetch(PDO::FETCH_OBJ))
            { 

                $uneResa[$i]= [
                    "nomClient"=>$ligne->nomClient,
                    "prenomClient"=>$ligne->prenomClient,
                    "numero"=>$ligne->numVol,
                    "qdPlace"=>$ligne->nbPlace
                ];
                $i++;
            } 

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }

     // Remplissage du tableau multi-dimensionnel $vols avec chacun des vols

        for($r=0;$r<$i;$r++){
            array_push($reservations,$uneResa[$r]);
        }

    // Retourner le tableau

    return $reservations;

     }
    function reserverVol(){
        // récup numéro vol
        $numero = $_REQUEST["numero"];
        return $numero; 
    }

    function valideResa(){
        $nomClient = $_REQUEST["nomClient"];
        $prenomClient = $_REQUEST["prenom"];
        $nbPlace = $_REQUEST["nbPlace"];
        $numero = $_REQUEST["numero"];
        $adresse=$_REQUEST["adresse"];
        $mail=$_REQUEST["mail"];
        require dirname(__FILE__)."/Connection.php";
     // Selection de la base de donn�es et requete SQL
        $requete="INSERT INTO  reservation ('numVol','nomClient','prenomClient','nbPlace','adresse','email') values ("."$numero".",". "$nomClient".","."$prenomClient".","."$nbPlace".","."$adresse".","."$mail".") ";/*where numAgence=:numAgence*/
    // Remplissage d'un tableau correspondant � chaque reservation
        $bdd= connect();
        try 
        {	
            $sql = $bdd->prepare($requete);
            $sql->execute();

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }
        
         $requete="update vol set nbPlace-=$nbPlace where numVol="."$numero"." ";
        $bdd= connect();
        try 
        {	
            $sql = $bdd->prepare($requete);
            $sql->execute();

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }
    }
 ?>