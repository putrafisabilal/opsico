<?php require_once('../assets/fpdf/fpdf.php');
include('db_connect.php');

$pdf = new FPDF();

$tgl = $_GET['tgl'];

$query = "SELECT * FROM laporan_harianpp WHERE tanggal=$tgl";
$result = $con->query($query);
$row = $result->fetch_object();
$pdf->AddPage('L');

//header
$pdf->SetY(12);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(10);$pdf->Cell(250,11,'LAPORAN KEGIATAN HARIAN DI TERMINAL LPG SEMARANG',0,1,'C');

$pdf->SetY(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8);$pdf->Cell(23,8,'Hari         :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,0,'Tanggal      :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,8,'Nomor        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,0,'Pukul        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,17,'1. PERSEDIAAN BULK ELPIJI',0,1,'L');

//TABEL
$pdf->SetFont('Arial','',9);
$pdf->SetY(47);
$pdf->Cell(-5);
$pdf->Cell(20,8,'Stok Awal','LTR',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','T',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(30,8,'Stok Akhir','LTR',0,'C');
$pdf->Ln();


$pdf->SetY(140);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Disetujui oleh :','',0,'L');
$pdf->Ln();

$pdf->SetY(146);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Disiapkan oleh:','',0,'C');
$pdf->Cell(90,6,'Maulida Kurniawati','',0,'L');
$pdf->Cell(30,6,'Kepala Terminal LPG Semarang','',0,'L');
$pdf->Ln();

$pdf->SetY(158);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Diperiksa oleh:','',0,'C');
$pdf->Cell(30,6,'Agastia K.W.Geni','',0,'L');
$pdf->Ln();

$pdf->SetY(164);
$pdf->Cell(-3);
$pdf->SetFont('Arial','BU',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Bayu Maryono:','',0,'L');
$pdf->Ln();
//Output
$pdf->Output();
?>
