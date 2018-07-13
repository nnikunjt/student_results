<?php 

	require("../fpdf/fpdf.php");
	require_once('../database/connection.php');
    
	 
	$pdf= new FPDF();
	$pdf->AddPage();
                 

	$pdf->SetFont('Arial','B',18);
	$pdf->SetFont('Arial','u',18);
	$pdf->Cell(70,10,"Yash Classes Results",0,1,'C');
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(50,10,"Student Name",0,1);

$pdf->output(); 


 ?>