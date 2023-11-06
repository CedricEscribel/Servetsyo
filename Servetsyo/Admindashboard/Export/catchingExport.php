<?php
require_once("../../phpconfig/config.php");
//

require('../../../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();



// Define the Header Title function
function HeaderTitle($title)
{
    global $pdf;

    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 0, $title, 0, 1, 'C');
    $pdf->Ln(); // Move to the next line after the table header
}
$title = 'DOG CATCHING REQUEST';

// Define the Header Table function
function HeaderTable($headerData)
{
    global $pdf;

    // Set the Y position for the header table
    $pdf->SetY(20);

    // Set cell height
    $cellHeight = 10;

    // Set font size and style for the table header
    $pdf->SetFont('Arial', 'B', 10);

    // Loop through the header data and create table cells
    foreach ($headerData as $header) {
        $cellWidth = 30; // Set a fixed cell width (adjust as needed)
        $pdf->Cell($cellWidth, $cellHeight, $header, 1, 0, 'C');
    }
}

// Define the header data
$headerData = array('Barangay', 'Full Name' ,'Phone Number', 'Dog Count', 'Request Date' , 'Status');


//code for print data
$sql = "SELECT  `BarangayID`, `Fullname`, `ContNum`, `DogCount`, `ReqDate`, `status` from  catch ";
$query =  $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    
    HeaderTitle($title);
    HeaderTable($headerData);
    foreach ($results as $row) {
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        foreach ($row as $column)
            $pdf->Cell(30, 10, $column, 1);
    }
}
$pdf->Output();
