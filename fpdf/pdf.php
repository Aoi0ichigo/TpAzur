<?php
// permet d'inclure la bibliothèque fpdf
require('../fpdf/fpdf.php');
// instancie un objet de type FPDF qui permet de créer le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Times','',13);
//Ajout d'une image
$pdf->Image('../images/avion.png',10,10, 200, 60);
$pdf->Cell(60);
$pdf->Cell(10,150,"Information sur la Reservation");
$pdf->Ln(5);
$pdf->Cell(60,200,"Nom :");
$pdf->Cell(80,200,"Prenom :");
$pdf->Cell(100,200,"Vol :");
$pdf->Ln(20);
$pdf->Cell(60,200,"Aeroport de depart :");
$pdf->Cell(70,200,"Date de depart :");
$pdf->Cell(100,200,"Heure de depart :");
$pdf->Ln(20);
$pdf->Cell(60,200,"Aeroport d'arrivee :");
$pdf->Cell(70,200,"Date d'arrivee :");
$pdf->Cell(100,200,"Heure d'arrivee :");
$pdf->Ln(30);
$pdf->Cell(80,180,"Prix :");
$pdf->Cell(100,180,"Nombre de place:");
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
$pdf->Output();

?>
