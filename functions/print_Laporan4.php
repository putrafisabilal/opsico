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

$pdf->SetFont('Arial','B',9);
$pdf->SetY(35);
$pdf->Cell(-5);
$pdf->Cell(220,4,'NO: TLS-70.2-RD-030-XVII (4 on 5) ','',0,'L');
$pdf->Cell(21,4,'Hari, Tanggal : Selasa, 30 Januari 2018','',0,'L');

//TABEL
$pdf->SetFont('Arial','',9);
$pdf->SetY(40);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-5);
$pdf->Cell(10,8,'NO','LTR',0,'C',true);
$pdf->Cell(90,8,'SPBE/SPPBE','LTR',0,'C',true);
$pdf->Cell(20,4,'NO.','LTR',0,'C',true);
$pdf->Cell(30,4,'THRUGPUT','LTR',0,'C',true);
$pdf->Cell(30,4,'RENCANA','LTR',0,'C',true);
$pdf->Cell(30,4,'TOTAL','LTR',0,'C',true);
$pdf->Cell(25,4,'SELISIH','LTR',0,'C',true);
$pdf->Cell(30,4,'PROSENTASE','LTR',0,'C',true);
$pdf->Cell(20,8,'CATATAN','LTR',0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(44);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-5);
$pdf->Cell(100,4,'','',0,'C');
$pdf->Cell(20,4,'PLANT','LR',0,'C',true);
$pdf->Cell(30,4,'PERHARI (MT)','LR',0,'C',true);
$pdf->Cell(30,4,'PENYALURAN(Kg)','LR',0,'C',true);
$pdf->Cell(30,4,'PENYALURAN(Kg)','LR',0,'C',true);
$pdf->Cell(25,4,'(Kg)','LR',0,'C',true);
$pdf->Cell(30,4,'PENYALURAN(Kg)','LR',0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
$pdf->SetY(48);
$pdf->Cell(-5);
$pdf->Cell(285,5,'SPPBE/SPBE JATENG DAN D.I.YOGYAKARTA','LRB',0,'L');
$pdf->Ln();

$Y=53;
$V = 1;
for($i=0;$i<33;$i++){
$pdf->SetFont('Arial','',8);
$pdf->SetY($Y);
$pdf->Cell(-5);
$pdf->Cell(10,4,''.$V,'LTR',0,'C');
$pdf->Cell(90,4,'','LT',0,'C');
$pdf->Cell(20,4,'','LTR',0,'C');
$pdf->Cell(30,4,'','LR',0,'C');
$pdf->Cell(30,4,'','LR',0,'C');
$pdf->Cell(30,4,'','LR',0,'C');
$pdf->Cell(25,4,'','LR',0,'C');
$pdf->Cell(30,4,'','LR',0,'C');
$pdf->Cell(20,4,'','LTRB',0,'C');
$pdf->Ln();
$Y = $Y + 4;
$V = $V + 1;
}

$pdf->SetFont('Arial','',9);
$pdf->SetY(330);
$pdf->Cell(-5);
$pdf->Cell(10,4,'NB:','',0,'C');
$pdf->Cell(120,4,'-Rencana Alokasi Penyaluran Harian dibuat oleh Gas Domestik Region IV','',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(15);
$pdf->Cell(-5);
$pdf->Cell(10,4,'','',0,'C');
$pdf->Cell(120,4,'-Apabila jumlah prosentase mencapai 98% s.d 100% maka dianggap sesuai dengan rencana','',0,'L');
$pdf->Ln();

//Output
$pdf->Output();
?>
