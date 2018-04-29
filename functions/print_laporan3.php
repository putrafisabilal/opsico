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
$pdf->Cell(100,8,'SPBE/SPPBE','LTR',0,'C',true);
$pdf->Cell(15,4,'','LT',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(15,4,'','T',0,'C',true);
$pdf->Cell(30,8,'JUMLAH (KG)','LTR',0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(44);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-5);
$pdf->Cell(110,4,'','',0,'C');
$pdf->Cell(15,4,'2T','LTRB',0,'C',true);
$pdf->Cell(15,4,'7T','LTRB',0,'C',true);
$pdf->Cell(15,4,'8T','LTRB',0,'C',true);
$pdf->Cell(15,4,'9T','LTRB',0,'C',true);
$pdf->Cell(15,4,'13T','LTRB',0,'C',true);
$pdf->Cell(15,4,'15T','LTRB',0,'C',true);
$pdf->Cell(15,4,'20T','LTRB',0,'C',true);
$pdf->Cell(15,4,'21T','LTRB',0,'C',true);
$pdf->Cell(15,4,'25T','TRB',0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
$pdf->SetY(48);
$pdf->Cell(-5);
$pdf->Cell(275,5,'SPPBE/SPBE JATENG DAN D.I.YOGYAKARTA','LRB',0,'L');
$pdf->Ln();

$Y=53;
$V = 1;
for($i=0;$i<33;$i++){
$pdf->SetFont('Arial','',8);
$pdf->SetY($Y);
$pdf->Cell(-5);
$pdf->Cell(10,4,''.$V,'LTR',0,'C');
$pdf->Cell(100,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(15,4,'','LT',0,'C');
$pdf->Cell(30,4,'','LTR',0,'C');
$pdf->Ln();
$Y = $Y + 4;
$V = $V + 1;
}

$pdf->SetFont('Arial','B',9);
$pdf->SetY(330);
$pdf->Cell(-5);
$pdf->Cell(110,5,'SUB TOTAL S(P)PBE JATENG DAN D.I.YOGYAKARTA','LTB',0,'L');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','LTRB',0,'C');
$pdf->Cell(15,5,'','TRB',0,'C');
$pdf->Cell(30,5,'','TRB',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
$pdf->SetY(15);
$pdf->Cell(-5);
$pdf->Cell(275,5,'INDUSTRI','LTRB',0,'L');
$pdf->Ln();

$Y=20;
$V = 1;
for($i=0;$i<9;$i++){
$pdf->SetFont('Arial','',8);
$pdf->SetY($Y);
$pdf->Cell(-5);
$pdf->Cell(10,4,''.$V,'LTRB',0,'C');
$pdf->Cell(100,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(15,4,'','LB',0,'C');
$pdf->Cell(30,4,'','LRB',0,'C');
$pdf->Ln();
$Y = $Y + 4;
$V = $V + 1;
}

$pdf->SetY(60);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Mengetahui :','',0,'L');
$pdf->Ln();

$pdf->SetY(65);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Disiapkan oleh:','',0,'C');
$pdf->Cell(90,6,'Maulida Kurniawati','',0,'L');
$pdf->Cell(30,6,'Kepala Terminal LPG Semarang','',0,'L');
$pdf->Ln();

$pdf->SetY(70);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Diperiksa oleh:','',0,'C');
$pdf->Cell(30,6,'Agastia K.W.Geni','',0,'L');
$pdf->Ln();

$pdf->SetY(80);
$pdf->Cell(-3);
$pdf->SetFont('Arial','BU',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Bayu Maryono:','',0,'L');
$pdf->Ln();

//Output
$pdf->Output();
?>
