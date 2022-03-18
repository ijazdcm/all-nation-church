
<?php
//include connection file
include_once "../connection.php";
include_once  "../libs/fpdf.php";
 ob_start();

// Class dbObj{
// /* Database connection start */
// var $dbhost = "localhost";
// var $username = "root";
// var $password = "";
// var $dbname = "prayer";
// var $conn;
// function getConnstring() {
// $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

// /* check connection */
// if (mysqli_connect_errno()) {
// printf("Connect failed: %s\n", mysqli_connect_error());
// exit();
// } else {
// $this->conn = $con;
// }
// return $this->conn;
// }
// }



// class PDF extends FPDF
// {
// // Page header
// function Header()
// {
//     // Logo
//     // $this->Image('../1.png',10,-1,70);
//     $this->SetFont('Arial','B',15);
//     // Move to the right
//     $this->Cell(60);
//     // Title
//     $this->Cell(80,10,'Believer List',1,0,'C');
//     // Line break
//     $this->Ln(20);
// }

// // Page footer
// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-10);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Page number
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }

// $db = new dbObj();
// $connString =  $db->getConnstring();
// $display_heading = array('ID'=>'ID', 'NAME'=> 'Name', 'PHONE'=> 'phone','ADDRESS'=> 'address','ZONE'=> 'zone','DATE'=> 'date','DOB'=> 'dob','CONTACT'=> 'contact','PRAYER_REQUEST'=> 'request',);

// $result = mysqli_query($connString, "SELECT ID, NAME, PHONE, ADDRESS,ZONE,DATE,DOB,CONTACT,PRAYER_REQUEST FROM add_believer") or die("database error:". mysqli_error($connString));
// $header = mysqli_query($connString, "SHOW columns FROM add_believer");

// $pdf = new PDF();
// //header
// $pdf->AddPage();
// //foter page
// // $pdf->AliasNbPages();
// // $pdf->SetFont('Arial','B',12);
// // foreach($header as $heading) {
// // $pdf->Cell(25,12,$display_heading[$heading['Field']],1);
// // }
// // foreach($result as $row) {
// // $pdf->Ln();
// // foreach($row as $column)
// // $pdf->Cell(25,12,$column,1);
// // }

// $pdf->Output();


// METHOD 2


//SQL to get 10 records
$sql="select * from believer ";
// LIMIT 0,20
$pdf = new FPDF();
$pdf->AddPage();


    $pdf->SetFont('Arial','B',15);
    // Move to the right
    $pdf->Cell(60);
    // Title
    $pdf->Cell(80,10,'Church Members List',1,0,'C');
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
  if($row["BELIEVER"]=="Church_Member"){
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
