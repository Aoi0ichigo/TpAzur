<?php
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');

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
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();
?>
