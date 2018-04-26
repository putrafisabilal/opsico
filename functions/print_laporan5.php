<?php require_once('../assets/fpdf/fpdf.php');
include('db_connect.php');

$pdf = new FPDF();

$tgl = $_GET['tgl'];

$query = "SELECT * FROM laporan_harianpp WHERE tanggal=$tgl";
$result = $con->query($query);
$row = $result->fetch_object();
$pdf->AddPage('L');

//header
$pdf->SetY(13);
$pdf->SetFont('Arial','',9);
$pdf->Cell(8);$pdf->Cell(23,8,'Tanggal        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,0,'No        :',0,1,'L');
$pdf->Cell(8);$pdf->Cell(23,8,'(5 of 5)',0,1,'R');

//TABEL
$pdf->SetFont('Arial','',9);
$pdf->SetY(30);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-3);
$pdf->Cell(30,4,'Tangki','LTR',0,'C',true);
$pdf->Cell(30,4,'Stock Awal (MT)','LTR',0,'C',true);
$pdf->Cell(60,4,'Penerimaan','LTR',0,'C',true);
$pdf->Cell(60,4,'Penyaluran dan Industri (MT)','LTR',0,'C',true);
$pdf->Cell(20,4,'Tangki','LTR',0,'C',true);
$pdf->Cell(35,4,'Stock Akhir (MT)','LTR',0,'C',true);
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(34);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','LR',0,'C',true);
$pdf->Cell(30,4,'','LR',0,'C',true);
$pdf->Cell(30,4,'Hari ini','LTR',0,'C',true);
$pdf->Cell(30,4,'Akumulasi','LTR',0,'C',true);
$pdf->Cell(30,4,'Hari ini','LTR',0,'C',true);
$pdf->Cell(30,4,'Akumulasi','LTR',0,'C',true);
$pdf->Cell(20,4,'','LR',0,'C',true);
$pdf->Cell(35,4,'','LR',0,'C',true);
$pdf->Ln();

  $Y=38;
  $V = 110;
for($i=0;$i<4;$i++){
  $pdf->SetFont('Arial','',9);
  $pdf->SetY($Y);
  $pdf->Cell(-3);
  $pdf->Cell(30,4,'V - '.$V,'LT',0,'C');
  $pdf->Cell(30,4,'','LT',0,'C');
  $pdf->Cell(30,4,'','LTR',0,'C');
  $pdf->Ln();
  $Y = $Y + 4;
  $V = $V + 10;
}

$pdf->SetFont('Arial','',9);
$pdf->SetY(46);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'(Akumulasi)','',0,'C');
$pdf->Ln();

$Y=38;
for($i=0;$i<4;$i++){
$pdf->SetFont('Arial','',9);
$pdf->SetY($Y);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','LTR',0,'C');
$pdf->Ln();
$Y = $Y + 4;
}

$pdf->SetFont('Arial','',9);
$pdf->SetY(46);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'(Akumulasi)','',0,'C');
$pdf->Ln();

$Y=38;
for($i=0;$i<4;$i++){
$pdf->SetFont('Arial','',9);
$pdf->SetY($Y);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(20,4,'','LT',0,'C');
$pdf->Cell(35,4,'','LTR',0,'C');
$pdf->Ln();
$Y = $Y + 4;
}

$pdf->SetFont('Arial','B',9);
$pdf->SetY(54);
$pdf->Cell(-3);
$pdf->Cell(30,4,'Total','LTB',0,'C');
$pdf->Cell(30,4,'','LTRB',0,'C');
$pdf->Cell(30,4,'','LTRB',0,'C');
$pdf->Cell(30,4,'(Akumulasi)','LRB',0,'C');
$pdf->Cell(30,4,'','TB',0,'C');
$pdf->Cell(30,4,'(Akumulasi)','LRB',0,'C');
$pdf->Cell(20,4,'Total','LTRB',0,'C');
$pdf->Cell(35,4,'','LTRB',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
$pdf->SetY(58);
$pdf->Cell(-3);
$pdf->Cell(90,6,'Tenaga Kerja','LTB',0,'C');
$pdf->Cell(60,6,'Pengisian dari Lajur','LRB',0,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(50,6,'Pemompaan dari Kapal ke','LR',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(64);
$pdf->Cell(-3);
$pdf->Cell(30,4,'Divisi','LT',0,'C');
$pdf->Cell(30,4,'Jumlah','LT',0,'C');
$pdf->Cell(30,4,'Keterangan','LT',0,'C');
$pdf->Cell(30,4,'','LR',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(50,4,'Tangki Penerimaan','LRB',0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(68);
$pdf->Cell(-3);
$pdf->Cell(30,4,'1. Ka. Dept','LTB',0,'L');
$pdf->Cell(30,4,'','LTRB',0,'C');
$pdf->Cell(30,4,'(Keterangan)','LTRB',0,'C');
$pdf->Cell(30,4,'Bangsal','LRB',0,'C');
$pdf->Cell(30,4,'Jml Skid Tank','B',0,'C');
$pdf->Cell(85,4,'Aktivitas Lain-lain:','LTRB',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(72);
$pdf->Cell(-3);
$pdf->Cell(30,4,'2. Control Room','LTB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LTRB',0,'C');
$pdf->Cell(30,4,'Off Shift = 2','LTRB',0,'C');
$pdf->Cell(30,4,'01','LRB',0,'C');
$pdf->Cell(30,4,'18','RB',0,'C');
$pdf->Cell(30,4,'Kwh Recording: ','',0,'C');
$pdf->Cell(55,4,'LWBP : 11.342.81 KWH ','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(76);
$pdf->Cell(-3);
$pdf->Cell(30,4,'3. R&S','LB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LRB',0,'C');
$pdf->Cell(30,4,'','LB',0,'C');
$pdf->Cell(30,4,'02','LRB',0,'C');
$pdf->Cell(30,4,'24','RB',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->SetFont('Arial','U',9);
$pdf->Cell(55,4,'WBP   : 2.603.35 KWH','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(80);
$pdf->Cell(-3);
$pdf->Cell(30,4,'4. Distribusi','LB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LRB',0,'C');
$pdf->Cell(30,4,'','LRB',0,'C');
$pdf->Cell(30,4,'03','LRB',0,'C');
$pdf->Cell(30,4,'21','RB',0,'C');
$pdf->Cell(30,4,'','',0,'C');
$pdf->Cell(55,4,'Total   : 13.946.16 KWH','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(84);
$pdf->Cell(-3);
$pdf->Cell(30,4,'5. Adm. Opr','LTB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LTRB',0,'C');
$pdf->Cell(30,4,'','LTRB',0,'C');
$pdf->Cell(30,4,'04','LRB',0,'C');
$pdf->Cell(30,4,'21','RB',0,'C');
$pdf->Cell(85,4,'','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(88);
$pdf->Cell(-3);
$pdf->Cell(30,4,'6. Power House','LB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LRB',0,'C');
$pdf->Cell(30,4,'Off Shift = 1','LRB',0,'C');
$pdf->Cell(30,4,'05','LRB',0,'C');
$pdf->Cell(30,4,'20','RB',0,'C');
$pdf->Cell(85,4,'','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','',9);
$pdf->SetY(92);
$pdf->Cell(-3);
$pdf->Cell(30,4,'','LB',0,'L');
$pdf->Cell(30,4,'(Jumlah)','LRB',0,'C');
$pdf->Cell(30,4,'','LRB',0,'C');
$pdf->Cell(30,4,'06','LRB',0,'C');
$pdf->Cell(30,4,'19','RB',0,'C');
$pdf->Cell(85,4,'','R',0,'L');
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
$pdf->SetY(96);
$pdf->Cell(-3);
$pdf->Cell(30,8,'Jumlah','LB',0,'C');
$pdf->Cell(30,8,'(Total)','LRB',0,'C');
$pdf->Cell(30,8,'','LRB',0,'C');
$pdf->Cell(30,8,'Jumlah','LRB',0,'C');
$pdf->Cell(30,8,'123','RB',0,'C');
$pdf->Cell(85,8,'','RB',0,'L');
$pdf->Ln();

$pdf->SetY(104);
$pdf->Cell(-3);
$pdf->SetFont('Arial','BUI',9);
$pdf->Cell(30,6,'Catatan :','',0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'Product in Line','',0,'L');
$pdf->Cell(30,6,'','',0,'C');
$pdf->Cell(30,6,': 11.637.67','',0,'L');
$pdf->Cell(30,6,'MT','',0,'L');
$pdf->Ln();

$pdf->SetY(110);
$pdf->Cell(-3);
$pdf->Cell(30,6,'','',0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'Stock Akhir Terminal','',0,'L');
$pdf->Cell(30,6,'','',0,'C');
$pdf->Cell(30,6,': 7.843.526,50','',0,'L');
$pdf->Cell(30,6,'MT','',0,'L');
$pdf->Ln();

$pdf->SetY(116);
$pdf->Cell(-3);
$pdf->Cell(30,6,'','',0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'Density Tangki','',0,'L');
$pdf->Cell(30,6,'','',0,'C');
$pdf->Cell(30,6,': V110: 0,5444','',0,'L');
$pdf->Cell(30,6,': V120: 0.5410','',0,'L');
$pdf->Cell(30,6,': V130: 0.5463','',0,'L');
$pdf->Cell(55,6,': V140: 0.5444','',0,'L');
$pdf->Ln();

$pdf->SetY(122);
$pdf->Cell(-3);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,'','',0,'C');
$pdf->Cell(30,6,'Penyaluran dimulai pukul 06.00 WIB dan selesai pukul 22.15 WIB','',0,'L');
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
