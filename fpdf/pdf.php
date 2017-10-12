<?php
function connect()
     {			 
        try
        {
            $connect = new PDO('mysql:host=localhost;dbname=airazur,root,,',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connect;
        }
       catch(PDOException $e)
        {
                echo "probleme de connexion :" . $e->getMessage();
                return false;
        }
    }
// Selection de la base de donn�es et requete SQL
$requete="select numero,A1.nomAero as depart,dateDepart,heureDepart,A2.nomAero as arrive,dateArrivee,heureArrivee,prix,reservation.nbPlace,nomClient,prenomClient from vol "
        . "join aeroport as A1 on A1.numAero=depart "
        . "join aeroport as A2 on A2.numAero=arrivee"
        . "join reservation on numVol=numero";
// Remplissage d'un tableau correspondant � chaque vol
   $bdd= connect();
   try 
   {	
       $sql = $bdd->prepare($requete);
       $sql->execute();

       while($ligne=$sql->fetch(PDO::FETCH_OBJ))
       { 

            $numero=$ligne->numero;
            $depart=$ligne->depart;
            $dateDepart=$ligne->dateDepart;
            $heureDepart=$ligne->heureDepart;
            $arrivee=$ligne->arrive;
            $dateArrivee=$ligne->dateArrivee;
            $heureArrivee=$ligne->heureArrivee;
            $prix=$ligne->prix;
            $nbPlace=$ligne->nbPlace;
            $nom=$ligne->nomClient;
            $prenom=$ligne->prenomClient;
       } 

   }
   catch(PDOException $e)
   {
       echo "Erreur dans la requ�te" . $e->getMessage();
   }
// permet d'inclure la bibliothèque fpdf
require('fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
//Ajout d'une image
$pdf->Image('../images/avion.png',10,10, 200, 60);
// affiche du texte
$pdf->Cell(10,150,'Information sur la Reservation');
$pdf->Ln(50);
$pdf->Cell(10,100,"numResa");
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
?>