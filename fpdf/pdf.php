<?php
// la classe de fonctions
require('fpdf.php');
// connexion base de données
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "airazur";
function connect($db_server, $db_user, $db_pass, $db) {
    if (!($link=mysql_connect($db_server,$db_user,$db_pass))) {
        exit();
    }
    if (!(mysql_select_db($db,$link))) {
        exit();
    }
    return $link;
}
$connexion=connect($db_server,$db_user,$db_pass,$db_name);

// classe étendue pour créer en-tête et pied de page
class PDF extends FPDF
{
// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'Votre reservation PDF',0,0,'C');
    //Saut de ligne
    $this->Ln(20);
}

// pied de page
function Footer()
{
    //Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    //Police Arial italique 8
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// création du pdf
$pdf=new PDF();
$pdf->SetAuthor('Sociéte Air-Azur');
$pdf->SetTitle('Reservation');
$pdf->SetSubject('Votre reservation de vol PDF');
$pdf->SetCreator('fpdf_cybermonde_org');
$pdf->AliasNBPages();
$pdf->AddPage();

// requête
$sql = mysql_query("SELECT * FROM reservation join vol join aeroport on numero=numvol and numero numVol ORDER BY idResa",$connexion);

// on boucle  
    while ($row = mysql_fetch_array($sql)) {
        $id = $row["idResa"];
        $numero = $row["numero"];
        $nom = $row["nom"];
        $prenom = $row["prenom"];
        $nbPlace = $row["nbPlace"];
        // titre en gras
        $pdf->SetFont('Arial','B',10);
        $pdf->Write(5,$numero);
        $pdf->Ln();
        // description
        $pdf->SetFont('Arial','',10);
        $pdf->Write(3,$nom);
        $pdf->Ln();
        $pdf->SetFont('Arial','',10);
        $pdf->Write(3,$prenom);
        $pdf->Ln();
        $pdf->SetFont('Arial','',10);
        $pdf->Write(3,$nbPlace);
        $pdf->Ln();
        $pdf->Ln();
    }
// sortie du fichier
$pdf->Output('reservation.pdf', 'I');
?>
