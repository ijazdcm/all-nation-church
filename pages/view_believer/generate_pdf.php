
<?php
//include connection file
include_once "../connection.php";
include_once  "../libs/fpdf.php";
 ob_start();



//SQL to get 10 records
$sql="select * from believer ";
// LIMIT 0,20
$pdf = new FPDF();
$pdf->AddPage();


    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(60);
    // Title
    $pdf->Cell(80,10,'New Comer List',1,0,'C');
    // Line break
    $pdf->Ln(20);


$width_cell=array(15,50,30,75,20);
$pdf->SetFont('Arial','B',10);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts ///
//First header column //
$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'NAME',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'PHONE',1,0,'C',true);
//Fourth header column//
$pdf->Cell($width_cell[3],10,'ADDRESS',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'ZONE',1,1,'C',true);
//// header ends ///////


$pdf->SetFont('Arial','',9);
//Background color of header//
$pdf->SetFillColor(235,236,236);
//to give alternate background fill color to rows//
$fill=false;

/// each record is one row  ///
foreach ($conn->query($sql) as $row) {
  if($row["BELIEVER"]=="New Comer"){
$pdf->Cell($width_cell[0],10,$row['id'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,($row['NAME']),1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['PHONE'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['ADDRESS'],1,0,'L',$fill);
$pdf->Cell($width_cell[4],10,$row['ZONE'],1,1,'C',$fill);

//to give alternate background fill  color to rows//
$fill = !$fill;
}}

/// end of records ///

$pdf->Output();

 ob_end_flush();
?>
