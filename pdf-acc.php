<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
require"fpdf/fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->setFont("Arial","B","10");
$pdf->cell(0,10,"Details",1,1,'C');
$pdf->cell(30,10,"name",1);
$pdf->cell(50,10,"email",1,1);

$pdf->cell(30,10,$name,1);
$pdf->cell(50,10,$email,1);


$pdf->output();



?>