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

$pdf->SetFont('Arial','',9);
$pdf->SetY(20);
$pdf->Cell(-5);
$pdf->Cell(10,5,'','',0,'C');
$pdf->Cell(125,5,'-RDTS : Rencana Datang Tidak Sesuai','',0,'L');
$pdf->Cell(80,5,'Rencana','LT',0,'C');
$pdf->Cell(50,5,'Tidak Berencana','LT',0,'C');
$pdf->Cell(20,6,'','LTR',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(25);
$pdf->Cell(-5);
$pdf->Cell(10,5,'','',0,'C');
$pdf->Cell(125,5,'-RDS : Rencana Datang Sesuai','',0,'L');
$pdf->Cell(27,5,'RDTS','LT',0,'C');
$pdf->Cell(27,5,'RDS','LT',0,'C');
$pdf->Cell(26,5,'RTD','LT',0,'C');
$pdf->Cell(25,5,'TR','LT',0,'C');
$pdf->Cell(25,5,'TRD','LTR',0,'C');
$pdf->Cell(20,5,'TOTAL','LR',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(30);
$pdf->Cell(-5);
$pdf->Cell(10,5,'','',0,'C');
$pdf->Cell(80,5,'-RTD : Rencana Tidak Datang','',0,'L');
$pdf->Cell(45,5,'Jumlah SPPBE dan Industri','LT',0,'C');
$pdf->Cell(27,5,'37','LT',0,'C');
$pdf->Cell(27,5,'50','LT',0,'C');
$pdf->Cell(26,5,'2','LT',0,'C');
$pdf->Cell(25,5,'43','LT',0,'C');
$pdf->Cell(25,5,'','LT',0,'C');
$pdf->Cell(20,5,'122','LTR',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(35);
$pdf->Cell(-5);
$pdf->Cell(10,5,'','',0,'C');
$pdf->Cell(80,5,'-TR : Tidak Rencana','',0,'L');
$pdf->Cell(45,5,'Prosentase (%)','LT',0,'C');
$pdf->Cell(27,5,'30','LT',0,'C');
$pdf->Cell(27,5,'33','LT',0,'C');
$pdf->Cell(26,5,'2','LT',0,'C');
$pdf->Cell(25,5,'35','LT',0,'C');
$pdf->Cell(25,5,'0','LT',0,'C');
$pdf->Cell(20,5,'100','LTR',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(40);
$pdf->Cell(-5);
$pdf->Cell(10,5,'','',0,'C');
$pdf->Cell(80,5,'-TRD : Tidak Rencana Datang','',0,'L');
$pdf->Cell(45,5,'JML Penyaluran (Kg)','LTB',0,'C');
$pdf->Cell(27,5,'1,185,350','LTB',0,'C');
$pdf->Cell(27,5,'1,392,530','LTB',0,'C');
$pdf->Cell(26,5,'','LTB',0,'C');
$pdf->Cell(25,5,'','LTB',0,'C');
$pdf->Cell(25,5,'','LTB',0,'C');
$pdf->Cell(20,5,'2,577,770','LTRB',0,'C');
$pdf->Ln();

$pdf->SetY(47);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Mengetahui :','',0,'L');
$pdf->Ln();

$pdf->SetY(52);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Disiapkan oleh:','',0,'C');
$pdf->Cell(90,6,'Maulida Kurniawati','',0,'L');
$pdf->Cell(30,6,'Kepala Terminal LPG Semarang','',0,'L');
$pdf->Ln();

$pdf->SetY(60);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'L');
$pdf->Cell(30,6,'Diperiksa oleh:','',0,'C');
$pdf->Cell(30,6,'Agastia K.W.Geni','',0,'L');
$pdf->Ln();

$pdf->SetY(65);
$pdf->Cell(-3);
$pdf->SetFont('Arial','BU',9);
$pdf->Cell(150,6,'','',0,'L');
$pdf->Cell(30,6,'Bayu Maryono:','',0,'L');
$pdf->Ln();

//Output
$pdf->Output();
?>
