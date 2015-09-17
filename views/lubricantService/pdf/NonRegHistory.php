
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 8);



$heading = array("Customer", "Contact", "VehicleNO", "Amount Rs.", "OrderDate");

foreach ($heading as $column_heading) {
    $pdf->Cell(34, 20, $column_heading, 1);
}
foreach ($Transactions as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(34, 10, $column, 1);
}

$pdf->Output();
?>
