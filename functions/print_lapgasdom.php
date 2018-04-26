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
$pdf->SetFont('Arial','B',14);
$pdf->Cell(10);$pdf->Cell(250,11,'STOCK TANGKI PENYALURAN LPG',0,1,'C');
$pdf->Cell(8);$pdf->Cell(254,0,'DEPOT LPG SWASTA SEMARANG',0,1,'C');

$pdf->SetY(31);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(85);$pdf->Cell(160,0,'NO :',0,1,'R');
$pdf->Cell(85);$pdf->Cell(160,10,'Tanggal :',0,1,'R');
$pdf->Cell(85);$pdf->Cell(160,0,'Waktu :',0,1,'R');

$pdf->SetY(39);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(8);$pdf->Cell(10,0,'RENCANA TANGKER',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(8);$pdf->Cell(23,8,'MT        :',0,1,'R');
$pdf->Cell(8);$pdf->Cell(23,0,'B/L        :',0,1,'R');
$pdf->Cell(8);$pdf->Cell(23,8,'MT, ETA   :',0,1,'R');

//TABEL
$pdf->SetFont('Arial','',9);
$pdf->SetY(56);
$pdf->SetDrawColor(1, 1, 1);
  $pdf->SetFillColor(150, 152, 155);
$pdf->Cell(-7);
$pdf->Cell(10,4,'','LTR',0,'C',true);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,'KAPASITAS','LTR',0,'C',true);
$pdf->Cell(21,4,'','LTR',0,'C',true);
$pdf->SetFont('Arial','',9);
$pdf->Cell(17,4,'','LTB',0,'C',true);
$pdf->Cell(27,4,'STOCK AWAL','TB',0,'C',true);
$pdf->Cell(20,4,'','TRB',0,'C',true);
$pdf->Cell(20,4,'','LTR',0,'C',true);
$pdf->Cell(20,4,'','LTR',0,'C',true);
$pdf->Cell(20,4,'.','LTR',0,'C',true);
$pdf->Cell(18,4,'','LTR',0,'C',true);
$pdf->Cell(17,4,'','LTB',0,'C',true);
$pdf->Cell(27,4,'STOCK AKHIR','TB',0,'C',true);
$pdf->Cell(20,4,'','TRB',0,'C',true);
$pdf->Cell(20,4,'','LTR',0,'C',true);
$pdf->Cell(12,4,'','LTR',0,'C',true);
$pdf->Ln();

$pdf->Cell(-7);
$pdf->Cell(10,4,'TT','LR',0,'C',true);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,'MAX TANGKI','LR',0,'C',true);
$pdf->Cell(21,4,'DEATH STOCK','LR',0,'C',true);
$pdf->Cell(17,4,'MASS (Kg)','LTR',0,'C',true);
$pdf->Cell(15,4,'TEMP (C) ','LTR',0,'C',true);
$pdf->Cell(12,4,'PRESS','LTR',0,'C',true);
$pdf->Cell(20,4,'DENSITY at','LTR',0,'C',true);
$pdf->Cell(20,4,'PENERIMAAN','LRB',0,'C',true);
$pdf->Cell(20,4,'PENYALURAN','LRB',0,'C',true);
$pdf->Cell(20,4,'BUFFER SKID','LRB',0,'C',true);
$pdf->Cell(18,4,'INTERTANK','LRB',0,'C',true);
$pdf->Cell(17,4,'MASS (Kg)','LTR',0,'C',true);
$pdf->Cell(15,4,'TEMP (C) ','LTR',0,'C',true);
$pdf->Cell(12,4,'PRESS','LTR',0,'C',true);
$pdf->Cell(20,4,'DENSITY at','LTR',0,'C',true);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,4,'ULLAGE','LR',0,'C',true);
$pdf->Cell(12,4,'CD','LR',0,'C',true);
$pdf->Ln();

$pdf->Cell(-7);
$pdf->Cell(10,4,'','LBR',0,'C',true);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,'(Kg)','LBR',0,'C',true);
$pdf->Cell(21,4,'(Kg)','LBR',0,'C',true);
$pdf->Cell(17,4,'','LBR',0,'C',true);
$pdf->Cell(15,4,'','LBR',0,'C',true);
$pdf->SetFont('Arial','',7);
$pdf->Cell(12,4,'(Kg/cm2)','LBR',0,'C',true);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,'15C (Kg/cm2)','LBR',0,'C',true);
$pdf->Cell(20,4,'(Kg)','LRB',0,'C',true);
$pdf->Cell(20,4,'(Kg)','LRB',0,'C',true);
$pdf->Cell(20,4,'','LRB',0,'C',true);
$pdf->Cell(18,4,'','LRB',0,'C',true);
$pdf->Cell(17,4,'','LRB',0,'C',true);
$pdf->Cell(15,4,'','LRB',0,'C',true);
$pdf->SetFont('Arial','',7);
$pdf->Cell(12,4,'(Kg/cm2)','LRB',0,'C',true);
$pdf->SetFont('Arial','',8);
$pdf->Cell(20,4,'15C (Kg/cm2)','LRB',0,'C',true);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,4,'','LRB',0,'C',true);
$pdf->Cell(12,4,'','LRB',0,'C',true);
$pdf->Ln();

$pdf->Cell(-7);
$pdf->SetFont('Arial','',9);
$pdf->Cell(10,4,'1','LTR',0,'C',true);
$pdf->Cell(20,4,'2','LTR',0,'C',true);
$pdf->Cell(21,4,'3','LTR',0,'C',true);
$pdf->Cell(17,4,'4','LTR',0,'C',true);
$pdf->Cell(15,4,'5','LTR',0,'C',true);
$pdf->Cell(12,4,'6','LTR',0,'C',true);
$pdf->Cell(20,4,'7','LTR',0,'C',true);
$pdf->Cell(20,4,'8','LTR',0,'C',true);
$pdf->Cell(20,4,'9','LTR',0,'C',true);
$pdf->Cell(20,4,'10','LTR',0,'C',true);
$pdf->Cell(18,4,'11','LTR',0,'C',true);
$pdf->Cell(17,4,'12','LTR',0,'C',true);
$pdf->Cell(15,4,'13','LTR',0,'C',true);
$pdf->Cell(12,4,'14','LTR',0,'C',true);
$pdf->Cell(20,4,'15','LTR',0,'C',true);
$pdf->Cell(20,4,'16','LTR',0,'C',true);
$pdf->Cell(12,4,'17','LTR',0,'C',true);
$pdf->Ln();

$pdf->Cell(-7);
$pdf->SetFont('Arial','',7);
$pdf->Cell(10,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(21,4,'','LBR',0,'C',true);
$pdf->Cell(17,4,'','LBR',0,'C',true);
$pdf->Cell(15,4,'','LBR',0,'C',true);
$pdf->Cell(12,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(18,4,'','LBR',0,'C',true);
$pdf->Cell(17,4,'(4+8+9+10)','LBR',0,'C',true);
$pdf->Cell(15,4,'','LBR',0,'C',true);
$pdf->Cell(12,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'','LBR',0,'C',true);
$pdf->Cell(20,4,'(4-12)','LBR',0,'C',true);
$pdf->Cell(12,4,'','LBR',0,'C',true);
$pdf->Ln();

//isitable
$pdf->Cell(-7);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'V110','LBR',0,'C');//TT
$pdf->Cell(20,4,'2,500,000','LBR',0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'90,000','LBR',0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(15,4,'','LBR',0,'C'); //temp
$pdf->Cell(12,4,'','LBR',0,'C'); //press
$pdf->Cell(20,4,'0.5444','LBR',0,'C'); //density stock awal
$pdf->Cell(20,4,'','LRB',0,'C'); //penerimaan
$pdf->Cell(20,4,'','LRB',0,'C'); //penyaluran
$pdf->Cell(20,4,'','LRB',0,'C'); //bufferskid
$pdf->Cell(18,4,'','LRB',0,'C'); //intertank
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(15,4,'','LRB',0,'C'); //temp
$pdf->Cell(12,4,'','LRB',0,'C'); //press
$pdf->Cell(20,4,'','LRB',0,'C'); //density
$pdf->Cell(20,4,'','LRB',0,'C'); //ullage
$pdf->Cell(12,4,'','LRB',0,'C'); //CD
$pdf->Ln();

//isitable2
$pdf->Cell(-7);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'V120','LBR',0,'C');//TT
$pdf->Cell(20,4,'2,500,000','LBR',0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'90,000','LBR',0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(15,4,'','LBR',0,'C'); //temp
$pdf->Cell(12,4,'','LBR',0,'C'); //press
$pdf->Cell(20,4,'0.5410','LBR',0,'C'); //density stock awal
$pdf->Cell(20,4,'','LRB',0,'C'); //penerimaan
$pdf->Cell(20,4,'','LRB',0,'C'); //penyaluran
$pdf->Cell(20,4,'','LRB',0,'C'); //bufferskid
$pdf->Cell(18,4,'','LRB',0,'C'); //intertank
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(15,4,'','LRB',0,'C'); //temp
$pdf->Cell(12,4,'','LRB',0,'C'); //press
$pdf->Cell(20,4,'','LRB',0,'C'); //density
$pdf->Cell(20,4,'','LRB',0,'C'); //ullage
$pdf->Cell(12,4,'','LRB',0,'C'); //CD
$pdf->Ln();

//isitable3
$pdf->Cell(-7);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'V130','LBR',0,'C');//TT
$pdf->Cell(20,4,'2,500,000','LBR',0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'90,000','LBR',0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(15,4,'','LBR',0,'C'); //temp
$pdf->Cell(12,4,'','LBR',0,'C'); //press
$pdf->Cell(20,4,'0.5463','LBR',0,'C'); //density stock awal
$pdf->Cell(20,4,'','LRB',0,'C'); //penerimaan
$pdf->Cell(20,4,'','LRB',0,'C'); //penyaluran
$pdf->Cell(20,4,'','LRB',0,'C'); //bufferskid
$pdf->Cell(18,4,'','LRB',0,'C'); //intertank
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(15,4,'','LRB',0,'C'); //temp
$pdf->Cell(12,4,'','LRB',0,'C'); //press
$pdf->Cell(20,4,'','LRB',0,'C'); //density
$pdf->Cell(20,4,'','LRB',0,'C'); //ullage
$pdf->Cell(12,4,'','LRB',0,'C'); //CD
$pdf->Ln();

//isitable4
$pdf->Cell(-7);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'V140','LBR',0,'C');//TT
$pdf->Cell(20,4,'2,500,000','LBR',0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'90,000','LBR',0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(15,4,'','LBR',0,'C'); //temp
$pdf->Cell(12,4,'','LBR',0,'C'); //press
$pdf->Cell(20,4,'0.5444','LBR',0,'C'); //density stock awal
$pdf->Cell(20,4,'','LRB',0,'C'); //penerimaan
$pdf->Cell(20,4,'','LRB',0,'C'); //penyaluran
$pdf->Cell(20,4,'','LRB',0,'C'); //bufferskid
$pdf->Cell(18,4,'','LRB',0,'C'); //intertank
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(15,4,'','LRB',0,'C'); //temp
$pdf->Cell(12,4,'','LRB',0,'C'); //press
$pdf->Cell(20,4,'','LRB',0,'C'); //density
$pdf->Cell(20,4,'','LRB',0,'C'); //ullage
$pdf->Cell(12,4,'','LRB',0,'C'); //CD
$pdf->Ln();

//TOTAL
$pdf->Cell(-7);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,'TOTAL','LBR',0,'C');//TT
$pdf->Cell(20,4,'10,000,000','LBR',0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'360,000','LBR',0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(47,4,'',0,0,'C'); //temp press density
$pdf->Cell(20,4,'','LRB',0,'C'); //penerimaan
$pdf->Cell(20,4,'','LRB',0,'C'); //penyaluran
$pdf->Cell(20,4,'','LRB',0,'C'); //bufferskid
$pdf->Cell(18,4,'',0,0,'C'); //intertank
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(47,4,'',0,0,'C'); //temp press density
$pdf->Cell(20,4,'','LRB',0,'C'); //ullage
$pdf->Cell(12,4,'','LRB',0,'C'); //CD
$pdf->Ln();

//stockinpipe
$pdf->Cell(-7);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,4,'Stock in Pipe','LBR',0,'C');
$pdf->Cell(21,4,'',0,0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(125,4,'',0,0,'C');
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(79,4,'',0,0,'C');
$pdf->Ln();

//stockterminal
$pdf->Cell(-7);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,4,'Stock Terminal','LBR',0,'C');
$pdf->Cell(21,4,'',0,0,'C'); //Death stock
$pdf->Cell(17,4,'','LBR',0,'C'); //MASS
$pdf->Cell(125,4,'',0,0,'C');
$pdf->Cell(17,4,'','LRB',0,'C'); //mass
$pdf->Cell(79,4,'',0,0,'C');
$pdf->Ln();

//=====================================================================//
//footer

$pdf->SetY(110);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(-5);$pdf->Cell(10,0,'NOTE   :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,10,'*Asumsi Rata-Rata Thrughput Harian        :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,0,'*Ketahanan STOCK                           :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,10,'*Stock Awal per Bulan Januari              :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,0,'*Selisih Stock Akhir Actual Terhadap Adm   :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,10,'*Stock Akhir Adm                           :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,0,'*Total penyaluran dan penjualan Adm s.d tanggal 2 Januari 2018 :',0,1,'L');
$pdf->Cell(-5);$pdf->Cell(23,10,'*Penyaluran tanggal 3 Januari 2018 menggunakan tangki V120 & V140 :',0,1,'L');

//tabelfooter
$pdf->Cell(-3);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'TT',1,0,'C');//TT
$pdf->Cell(20,4,'Σ ACTUAL',1,0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'ƩADM',1,0,'C'); //Death stock
$pdf->Cell(17,4,'SELISIH',1,0,'C'); //MASS
$pdf->Ln();

$pdf->Cell(-3);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'',1,0,'C');//TT
$pdf->Cell(20,4,'',1,0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'',1,0,'C'); //Death stock
$pdf->Cell(17,4,'',1,0,'C'); //MASS
$pdf->Ln();

$pdf->Cell(-3);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'',1,0,'C');//TT
$pdf->Cell(20,4,'',1,0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'',1,0,'C'); //Death stock
$pdf->Cell(17,4,'',1,0,'C'); //MASS
$pdf->Ln();

$pdf->Cell(-3);
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,4,'TOTAL',1,0,'C');//TT
$pdf->Cell(20,4,'',1,0,'C'); //Kap.MaxTangki
$pdf->Cell(21,4,'',1,0,'C'); //Death stock
$pdf->Cell(17,4,'',1,0,'C'); //MASS
$pdf->Ln();

$pdf->SetY(168);
$pdf->Cell(10);
$pdf->SetFont('Arial','',8);
$pdf->Cell(40,4,'',0,0,'C');//TT
$pdf->Cell(17,4,'Ka. DEPT. OPERASI',0,0,'C');
$pdf->Cell(155,4,'OH. DEPOT LPJ SWASTA SEMARANG',0,0,'R');
$pdf->Ln();

$pdf->SetY(185);
$pdf->Cell(10);
$pdf->SetFont('Arial','',8);
$pdf->Cell(40,4,'',0,0,'C');//TT
$pdf->Cell(17,4,'AGASTIA K.W. GENI',0,0,'C');
$pdf->Cell(147,4,'ALI AKBAR TAMPUBOLON',0,0,'R');
$pdf->Ln();
//Output
$pdf->Output();
?>
