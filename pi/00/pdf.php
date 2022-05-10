<?php
require("./pdf/fpdf.php");
$file = $_GET['file'];
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Image($file,10,10,-300);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(40,10,'Hello World!');

$pdf->Output();
?>
