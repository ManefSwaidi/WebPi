<?php
require("./pdf/fpdf.php");
$file = $_GET['file'];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->setTextColor(252,3,3);
$pdf->Cell(200,20,"Voyage","0","1","C");
$pdf->setLeftMargin(10);
$pdf->setTextColor(0,0,0);
$pdf->Cell(30,10,"Destination","1","0","C");
$pdf->Cell(50,10,"Sortie","1","0","C");
$pdf->Cell(50,10,"Retour","1","0","C");
$pdf->Cell(20,10,"Prix","1","0","C");
$pdf->Cell(40,10,"Description","1","1","C");

$pdf->SetFont("Arial","",14);
$pdf->Cell(30,10,$_GET['destination'],"1","0","C");
$pdf->Cell(50,10,$_GET['date_sortie'],"1","0","C");
$pdf->Cell(50,10,$_GET['date_retour'],"1","0","C");
$pdf->Cell(20,10,$_GET['prix'],"1","0","C");
$pdf->Cell(40,10,$_GET['description'],"1","1","C");
$pdf->Image($file,35,80,-200);
$pdf->Output();
?>
