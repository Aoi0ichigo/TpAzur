
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
    // fonction qui initialise le panier
    // le panier est un tableau indexé mis en session avec la clé "reservations"
    function initPanier() {
        if(!isset($_SESSION['reservations']))
            $_SESSION['reservations']= array();
    }

    // fonction qui ajoute une réservation au panier
    function ajouterAuPanier($reservation) {    
        $_SESSION['reservations'][]= $reservation;
    }


    function valideResa(){
        $reservation = array();
        
        $reservation["nomClient"] =$_SESSION["nom"]; 
        $reservation["prenomClient"] = $_SESSION["prenom"];
        $reservation["nbPlace"] = $_SESSION["nbPlace"];
        $reservation["numero"] = $_SESSION["numero"];
        $reservation["adresse"]=$_SESSION["adresse"];
        $reservation["mail"]=$_SESSION["mail"];
        initPanier();
        require dirname(__FILE__)."/Connection.php";
     // Selection de la base de donn�es et requete SQL
        $requete="INSERT INTO  reservation values('','$reservation[numero]','".htmlspecialchars($reservation['nomClient'])."','".htmlspecialchars($reservation['prenomClient'])."',$reservation[nbPlace],'".htmlspecialchars($reservation['mail'])."','".htmlspecialchars($reservation['adresse'])."')";  
    // Remplissage d'un tableau correspondant � chaque reservation
        $bdd= connect();
        try 
        {	
            $sql = $bdd->prepare($requete);
            $sql->execute();
            nbPlaceV();

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }
    }
    function nbPlaceV(){
        $nbPlace= $_SESSION["nbPlace"];
        $numero = $_SESSION["numero"];
        $requete="update vol set nbPlace=nbPlace-$nbPlace where numero='$numero' ";
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
    function annulation(){
         require dirname(__FILE__)."/Connection.php";
        $nbPlace=$_SESSION['nbPlace'];
        $num=$_SESSION['num'];
        $requete="delete from reservation where numResa=num ";
        $req="update vol set nbPlace=nbPlace+$nbPlace where numVol='$numero' ";
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
        try 
        {	
            $sql = $bdd->prepare($req);
            $sql->execute();

        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }
    }
    
    function numResa(){
        require dirname(__FILE__)."/Connection.php";
        $numero=array();
        $num=$_REQUEST["numResa"];
        $req="select numResa ,nbPlace from reservation";
        $i=0;
        $bdd=connect();
        try 
        {	
            $sql = $bdd->prepare($req);
            $sql->execute();
            while($ligne=$sql->fetch(PDO::FETCH_OBJ))
            { 
                $_SESSION['nbPlace']=$ligne->nbPlace;
                $numResa[$i]= [
                    "numResa"=>$ligne->numResa,
                ];
                $i++;
            }
        }
        catch(PDOException $e)
        {
            echo "Erreur dans la requ�te" . $e->getMessage();
        }
        for($r=0;$r<$i;$r++){
            array_push($numero,$numResa[$r]);
        }
        return $numero["$num"];
    }
?>