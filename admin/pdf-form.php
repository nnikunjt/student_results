<?php 

	require("../fpdf/fpdf.php");
	require_once('../database/connection.php');
   
	$pdf= new FPDF();
	$pdf->AddPage();
                 

	$pdf->SetFont('Arial','B',18);
	$pdf->SetFont('Arial','u',18);
	$pdf->Cell(70,10,"Yash Classes Results",0,1,'C');
	$pdf->Cell(50,10,"",0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,10,"Student Name:",0,1);
	$pdf->Cell(50,10,"",0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,10,"Roll No.:",0,0);
	$pdf->Cell(50,10,"",0,0);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,10,"Medium:",0,1);
	$pdf->Cell(50,10,"",0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,10,"Marks:",0,1);
	$pdf->Cell(50,10,"",0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,10,"Maths",0,1);
	$pdf->Cell(50,10,"Scinece",0,1);


$pdf->output(); 


 ?>