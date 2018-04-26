<?php require_once('../assets/fpdf/fpdf.php');
include('db_connect.php');

$pdf = new FPDF();

$tgl = $_GET['tgl'];

$query = "SELECT * FROM laporan_harianpp WHERE tanggal=$tgl";
$result = $con->query($query);
$row = $result->fetch_object();
$pdf->AddPage('L');
//header
$pdf->SetY(11);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(10);$pdf->Cell(250,11,'MONITORING RENCANA ALOKASI PENYALURAN HARIAN VERSUS REALISASI',0,1,'C');
$pdf->Cell(8);$pdf->Cell(254,0,'TERMINAL LPG SEMARANG',0,1,'C');

//header
$pdf->SetY(13);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8);$pdf->Cell(23,8,'Tanggal        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,0,'No        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,8,'(5 of 5)',0,1,'R');
