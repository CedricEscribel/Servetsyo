<?php
require_once("../../phpconfig/config.php");
require('../../../fpdf/fpdf.php');

$pdf = new FPDF('L'); // Set the page orientation to landscape
$pdf->AddPage();

// Define the Header Title function
function HeaderTitle($title)
{
    global $pdf;

    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 0, $title, 0, 1, 'C');
    $pdf->Ln(); // Move to the next line after the table header
}

$title = 'Dog Catching Request History';

// Define the Header Table function with custom cell widths and center-aligned text
function HeaderTable($headerData, $pdf, $cellWidths)
{
    // Set the Y position for the header table
    $pdf->SetY(20);

    // Set cell height
    $cellHeight = 10;

    // Set font size and style for the table header
    $pdf->SetFont('Arial', 'B', 8);

    // Loop through the header data and create table cells with custom widths and center-aligned text
    $columnIndex = 0; // Initialize the column index
    foreach ($headerData as $header) {
        $pdf->Cell($cellWidths[$columnIndex], $cellHeight, $header, 1, 0, 'C');
        $columnIndex++;
    }
}

// Define the header data

$headerData = array('Barangay', 'Full Name' ,'Phone Number', 'Dog Count', 'Request Date', 'Set Date' , 'Status');


// Define custom cell widths for each column
$cellWidths = array(35, 52, 33, 20, 25, 25, 20);

// Code for printing data
$sql = "SELECT  `BarangayID`, `Fullname`, `ContNum`, `DogCount`, `ReqDate`, `SetDate`, `status` from  catch ";
$query =  $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;
if ($query->rowCount() > 0) {
    HeaderTitle($title);
    HeaderTable($headerData, $pdf, $cellWidths);
    foreach ($results as $row) {
        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        $columnIndex = 0; // Reset the column index for each row
        foreach ($row as $column) {
            $pdf->Cell($cellWidths[$columnIndex], 10, $column, 1, 0, 'C'); // Center-aligned text
            $columnIndex++;
        }
    }
}
$pdf->Output();
?>
