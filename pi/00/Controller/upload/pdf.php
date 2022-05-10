<?php
require("./pdf/fpdf.php");
$file = $_GET['file'];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->setTextColor(252,3,3);
$pdf->Cell(200,20,"Hebergement","0","1","C");
$pdf->setLeftMargin(10);
$pdf->setTextColor(0,0,0);
$pdf->Cell(20,10,"Titre","1","0","C");
$pdf->Cell(20,10,"Prix","1","0","C");
$pdf->Cell(60,10,"Date dispo","1","0","C");
$pdf->Cell(40,10,"Description","1","1","C");
$pdf->SetFont("Arial","",14);
$pdf->Cell(20,10,$_GET['titre'],"1","0","C");
$pdf->Cell(20,10,$_GET['prix'],"1","0","C");
$pdf->Cell(60,10,$_GET['date_dispo'],"1","0","C");
$pdf->Cell(40,10,$_GET['description'],"1","1","C");
$pdf->Image($file,35,80,-100);
$pdf->Output();
?>
