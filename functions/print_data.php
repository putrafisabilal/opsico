<?php require_once('../assets/fpdf/fpdf.php');
include('db_connect.php');

$pdf = new FPDF();

$id = $_GET['id'];

$query = "select * from penilaian where id_penilaian=$id";
$result = $con->query($query);
$row = $result->fetch_object();
$pdf->AddPage();
//header
$pdf->SetFont('Arial','B',20);
$pdf->Cell(85);$pdf->Cell(20,10,'LEMBAR PENILAIAN KINERJA',0,1,'C');
$pdf->SetFont('Arial','',20);
$pdf->Cell(85);$pdf->Cell(20,12,'Penilaian Kinerja Tengah / Akhir Tahun',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(11);$pdf->Cell(20,20,'Dinilai',0,0,'');
$pdf->Cell(90);$pdf->Cell(20,20,'Penilai',0,1,'');
$pdf->Cell(11);$pdf->Cell(20,-5,'Nama : '.$row->namadinilai,0,0,'');
$pdf->Cell(90);$pdf->Cell(20,-5,'Nama : '.$row->namapenilai,0,1,'');
$pdf->Cell(11);$pdf->Cell(20,20,'Posisi : '.$row->posisi,0,0,'');
$pdf->Cell(90);$pdf->Cell(20,20,'Jenis : '.$row->jenis,0,1,'');
$pdf->Cell(11);$pdf->Cell(20,-5,'Departement : operasi',0,0,'');
$pdf->Cell(90);$pdf->Cell(20,-5,'Tanggal : '.date('d-m-Y', strtotime($row->tanggal)),0,1,'');
$pdf->SetFont('Arial','',12);
$pdf->SetY(75);
//tabel
$pdf->SetDrawColor(179, 179, 179);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(3);
$pdf->Cell(80,10,'Key Performance Indicator',1,0,'C',true);
$pdf->Cell(25,10,'Bobot',1,0,'C',true);
$pdf->Cell(17,10,'Target',1,0,'C',true);
$pdf->Cell(61,10,'Nilai',1,0,'C',true);
$pdf->Ln();
$pdf->Cell(3);
$pdf->Cell(80,7,'Kesatuan',1,0,'C');
$pdf->Cell(25,7,'25%',1,0,'C');
$pdf->Cell(17,7,'3',1,0,'C');
$pdf->Cell(61,7,$row->kesatuan,1,0,'C');
$pdf->Ln();
$pdf->Cell(3);
$pdf->Cell(80,7,'Fokus',1,0,'C');
$pdf->Cell(25,7,'25%',1,0,'C');
$pdf->Cell(17,7,'3',1,0,'C');
$pdf->Cell(61,7,$row->fokus,1,0,'C');
$pdf->Ln();
$pdf->Cell(3);
$pdf->Cell(80,7,'Kapabilitas',1,0,'C');
$pdf->Cell(25,7,'25%',1,0,'C');
$pdf->Cell(17,7,'3',1,0,'C');
$pdf->Cell(61,7,$row->kapabilitas,1,0,'C');
$pdf->Ln();
$pdf->Cell(3);
$pdf->Cell(80,7,'Sinergi',1,0,'C');
$pdf->Cell(25,7,'25%',1,0,'C');
$pdf->Cell(17,7,'3',1,0,'C');
$pdf->Cell(61,7,$row->sinergi,1,0,'C');
$pdf->Ln();
$pdf->Cell(3);
$pdf->Cell(80,10,'',1,0,'C',true);
$pdf->Cell(25,10,'100%',1,0,'C',true);
$pdf->Cell(78,10,'',1,0,'C',true);
$pdf->Ln();
$pdf->SetY(116);
//footer
$pdf->SetFont('Arial','',12);
$pdf->Cell(11);$pdf->Cell(20,20,'Penilai',0,0,'');
$pdf->Cell(90);$pdf->Cell(20,20,'General Service',0,1,'');
$pdf->SetY(150);
$pdf->Cell(11);$pdf->Cell(20,-5,'Nama : '.$row->namadinilai,0,0,'');
$pdf->Cell(90);$pdf->Cell(20,-5,'Nama : '.$row->namapenilai,0,1,'');
$pdf->Cell(11);$pdf->Cell(20,20,'Tanggal : '.date('d-m-Y', strtotime($row->tanggal)),'');
$pdf->Cell(90);$pdf->Cell(20,20,'Tanggal : '.date('d-m-Y', strtotime($row->tanggal)),0,1,'');

// $pdf->Cell(84.5);$pdf->Cell(20,52,'SERTIFIKAT',0,1,'C');
// $pdf->Cell(84.5);$pdf->Cell(20,-35,'TEST POTENSI AKADEMIK (TPA)',0,1,'C');
// $pdf->Cell(84.5);$pdf->Cell(20,52,'UNIVERSITAS DIPONEGORO',0,1,'C');
// $pdf->SetFont('Arial','B',12);
// $pdf->Cell(84.5);$pdf->Cell(20,-35,'No.'.$data->no_kursi.'/Periode/Bln/Thn',0,1,'C');
// $pdf->setLineWidth(0.3);
// $pdf->setY(105);
// $pdf->SetFont('Arial','B',10);
$pdf->Output();
?>
