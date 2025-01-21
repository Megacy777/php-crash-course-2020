<?php
require_once 'lib/vendor/setasign/fpdf/fpdf.php';
// 19_library/fpdf_project/lib/vendor/setasign/fpdf/fpdf.php

// Create a new PDF instance
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Add a title
$pdf->Cell(0, 10, 'Hello, FPDF World!', 0, 1, 'C');

// Add an image (logo)
$pdf->Image('assets/logo.png', 10, 10, 30);

// Add a multiline description
$pdf->Ln(20); // Add vertical spacing
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 10, "Welcome to your first FPDF project. This document demonstrates how you can generate a PDF file using PHP and the FPDF library. You can customize this file as per your needs.");

// Add a footer 
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generated on: ' . date('Y-m-d H:i:s'), 0, 0, 'C');

// Output the PDF
$pdf->Output('D', 'example.pdf'); // Forces download
// To save on the server: $pdf->Output('F', 'output/example.pdf');
