<?php require_once('../assets/fpdf/fpdf.php');
include('db_connect.php');

$pdf = new FPDF();

$tgl = $_GET['tgl'];

// $query = "SELECT * FROM laporan_harianpp WHERE tanggal=$tgl";
// $result = $con->query($query);
// $row = $result->fetch_object();

// $query1 = "SELECT * FROM stock_before WHERE tanggal=$tgl";
// $result1 = $con->query($query1);
// $row1 = $result1->fetch_object();

$pdf->AddPage('L');
//header
$pdf->SetY(17);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85);$pdf->Cell(250,10,'TERMINAL LPG SEMARANG - KONSORSIUM CPO',0,1,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(85);$pdf->Cell(254,0,'Kawasan Industri Cipta Guna Kav.11  jl.Arteri Yos Sudarso Semarang',0,1,'C');
$pdf->Cell(85);$pdf->Cell(238,10,'Jawa Tengah 50175 (024-352 1658 / (fax) 024-352 1660)',0,1,'C');
$pdf->SetY(17);
$pdf->SetLineWidth(0.5, 10);
$pdf->Line(15, 35, 295-20, 35);

$pdf->SetY(40);
$pdf->SetFont('Arial','',8);
$pdf->Cell(85);$pdf->Cell(90,0,'LPG/C : GAS WALIO',0,1,'C');
$pdf->Cell(85);$pdf->Cell(110,10,'Ex. NUSA BRIGHT',0,1,'C');
$pdf->Cell(85);$pdf->Cell(108,0,'VOYAGE : 004/D/GASWALIO/1/2018',0,1,'C');
$pdf->Cell(85);$pdf->Cell(112,10,'LOADED AT : STS TELUK SEMANGKA',0,1,'C');

$pdf->SetY(43);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85);$pdf->Cell(288,0,'CERTIFICATE OF QUALITY DISCHARGE',0,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(85);$pdf->Cell(245,10,'No : TLS/70.1/CQD/562',0,1,'C');
$pdf->Cell(85);$pdf->Cell(233,0,'Sheet : 02 of 03',0,1,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(85);$pdf->Cell(290,10,'FOR SEMARANG DATE : FEBRUARY 01 2018',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(85);$pdf->Cell(290,0,'B/L : 10.001.330 MT',0,1,'C');

//Liquid
$pdf->SetY(67);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10);$pdf->Cell(10,0,'LPG./LIQUID',0,1,'C');

$pdf->SetFont('Arial','',9);
$pdf->SetY(69);
//$pdf->SetDrawColor(255, 255, 255);
  $pdf->SetFillColor(255, 255, 255);
$pdf->Cell(-1);
$pdf->Cell(30,4,'Date','LTR',0,'C',true);
$pdf->Cell(20,4,'Discharge','LTR',0,'C',true);
$pdf->Cell(18,4,'Tank No.','LTR',0,'C',true);
$pdf->Cell(21,4,'PRODUCT','LTR',0,'C',true);
$pdf->Cell(24,4,'Liquid Level','LTR',0,'C',true);
$pdf->Cell(20,4,'Temp. C','LTR',0,'C',true);
$pdf->Cell(27,4,'Nett Litres','LTR',0,'C',true);
$pdf->Cell(22,4,'Density at','LTR',0,'C',true);
$pdf->Cell(25,4,'Vol. Correc.','LTR',0,'C',true);
$pdf->Cell(25,4,'Litres at','LTR',0,'C',true);
$pdf->Cell(25,4,'Multiplier','LTR',0,'C',true);
$pdf->Cell(25,4,'KILOGRAMS','LTR',0,'C',true);
$pdf->Ln();
$pdf->Cell(-1);
$pdf->Cell(30,4,' ','LRB','C',0,true);
$pdf->Cell(20,4,' ','LRB','C',0,true);
$pdf->Cell(18,4,' ','LRB','C',0,true);
$pdf->Cell(21,4,' ','LRB','C',0,true);
$pdf->Cell(24,4,'(mm) ','LRB',0,'C',true);
$pdf->Cell(20,4,' ','LRB','C',0,true);
$pdf->Cell(27,4,'of Product','LRB',0,'C',true);
$pdf->Cell(22,4,' 15C','LRB',0,'C',true);
$pdf->Cell(25,4,' Factor','LRB',0,'C',true);
$pdf->Cell(25,4,'15C','LRB',0,'C',true);
$pdf->Cell(25,4,' ','LRB','C',0,true);
$pdf->Cell(25,4,' ','LRB','C',0,true);
$pdf->Ln();

$query = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl'";
$result = $con->query($query);
while($row=mysqli_fetch_array($result)){
$tank = $row['tank'];
$query1 = "SELECT * FROM `stock_before` WHERE tanggal='$tgl' and tank='$tank'";
$result1 = $con->query($query1);
$bef = $result1->fetch_object();

//isitabel1
$pdf->Cell(-1);
$pdf->Cell(30,4,$row['tanggal'],'LTR',0,'C');
$pdf->Cell(20,4,'After','LTR',0,'C');
$pdf->Cell(18,4,$row['tank'],'LTR',0,'C');
$pdf->Cell(21,4,'LPG','LTR',0,'C');
$pdf->Cell(24,4,number_format($row['liquid_level']),'LTR',0,'C');
$pdf->Cell(20,4,$row['liquid_temp'],'LTR',0,'C');
$pdf->Cell(27,4,number_format($row['nett_litre']),'LTR',0,'C');
$pdf->Cell(22,4,$row['density'],'LTR',0,'C');
$pdf->Cell(25,4,$row['vol_correc'],'LTR',0,'C');
$pdf->Cell(25,4,number_format($row['litres_15']),'LTR',0,'C');
$pdf->Cell(25,4,$row['multiplier'],'LTR',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,4,number_format($row['liquid_kg']),'LTR',0,'C');
$pdf->Ln();

//isitabel2
$pdf->SetFont('Arial','',9);
$pdf->Cell(-1);
$pdf->Cell(30,4,$bef->tanggal,1,0,'C');
$pdf->Cell(20,4,'Before',1,0,'C');
$pdf->Cell(18,4,$bef->tank,1,0,'C');
$pdf->Cell(21,4,'LPG',1,0,'C');
$pdf->Cell(24,4,number_format($bef->liquid_level),1,0,'C');
$pdf->Cell(20,4,$bef->liquid_temp,1,0,'C');
$pdf->Cell(27,4,number_format($bef->nett_litre),1,0,'C');
$pdf->Cell(22,4,$bef->density,1,0,'C');
$pdf->Cell(25,4,$bef->vol_correc,1,0,'C');
$pdf->Cell(25,4,number_format($bef->litres_15),1,0,'C');
$pdf->Cell(25,4,$bef->multiplier,1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,4,number_format($bef->liquid_kg),1,0,'C');
$pdf->Ln();

//nett
$nett =  $row['liquid_kg'] - $bef->liquid_kg;
$pdf->Cell(-1);
$pdf->Cell(278,4,'NETT :           '.number_format($nett),'BLT',0,'R',true);
$pdf->Cell(4,4,'','TRB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',9);
}

//=============================================================================//

//vapour
$pdf->SetY(105);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10);$pdf->Cell(10,0,'LPG./VAPOUR',0,1,'C');

$pdf->SetFont('Arial','',9);
$pdf->SetY(107);
  $pdf->SetFillColor(255, 255, 255);
$pdf->Cell(-1);
$pdf->Cell(30,4,'Date','LTR',0,'C',true);
$pdf->Cell(20,4,'Discharge','LTR',0,'C',true);
$pdf->Cell(18,4,'Tank No.','LTR',0,'C',true);
$pdf->Cell(21,4,'PRODUCT','LTR',0,'C',true);
$pdf->Cell(24,4,'Vapour Height','LTR',0,'C',true);
$pdf->Cell(15,4,'Temp. C','LTR',0,'C',true);
$pdf->Cell(30,4,'Pressure Kg/cm3','1',0,'C',true);
$pdf->Cell(24,4,'Nett Litres','LTR',0,'C',true);
$pdf->Cell(25,4,'Pressure.','LTR',0,'C',true);
$pdf->Cell(25,4,'Temperature','LTR',0,'C',true);
$pdf->Cell(25,4,'Density','LTR',0,'C',true);
$pdf->Cell(25,4,'KILOGRAMS','LTR',0,'C',true);
$pdf->Ln();
$pdf->Cell(-1);
$pdf->Cell(30,4,' ','LRB','C',0,true);
$pdf->Cell(20,4,' ','LRB','C',0,true);
$pdf->Cell(18,4,' ','LRB','C',0,true);
$pdf->Cell(21,4,' ','LRB','C',0,true);
$pdf->Cell(24,4,'(mm) ','LRB',0,'C',true);
$pdf->Cell(15,4,' ','LRB','C',0,true);
$pdf->Cell(30,4,'of Product','LRB',0,'C',true);
$pdf->Cell(24,4,'of Product','LRB',0,'C',true);
$pdf->Cell(25,4,'Factor','LRB',0,'C',true);
$pdf->Cell(25,4,'Factor','LRB',0,'C',true);
$pdf->Cell(25,4,'Factor','LRB',0,'C',true);
$pdf->Cell(25,4,' ','LRB','C',0,true);
$pdf->Ln();



$query = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl'";
$result = $con->query($query);
while($row=mysqli_fetch_array($result)){
$tank = $row['tank'];
$query1 = "SELECT * FROM `stock_before` WHERE tanggal='$tgl' and tank='$tank'";
$result1 = $con->query($query1);
$bef = $result1->fetch_object();

//isitabel1
$pdf->Cell(-1);
$pdf->Cell(30,4,'Tanggal ','LTR',0,'C');
$pdf->Cell(20,4,'After','LTR',0,'C');
$pdf->Cell(18,4,$row['tank'],'LTR',0,'C');
$pdf->Cell(21,4,'LPG','LTR',0,'C');
$pdf->Cell(24,4,$row['vapour_height'],'LTR',0,'C');
$pdf->Cell(15,4,$row['vapour_temp'],'LTR',0,'C');
$pdf->Cell(30,4,$row['pressure'],'LTR',0,'C');
$pdf->Cell(24,4,number_format($row['vapour_nett']),'LTR',0,'C');
$pdf->Cell(25,4,$row['press_factor'],'LTR',0,'C');
$pdf->Cell(25,4,$row['temp_factor'],'LTR',0,'C');
$pdf->Cell(25,4,$row['density_factor'],'LTR',0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,4,number_format($row['vapour_kg']),'LTR',0,'C');
$pdf->Ln();

//isitabel2
$pdf->SetFont('Arial','',9);
$pdf->Cell(-1);
$pdf->Cell(30,4,'Tanggal ',1,0,'C');
$pdf->Cell(20,4,'Before',1,0,'C');
$pdf->Cell(18,4,$bef->tank,1,0,'C');
$pdf->Cell(21,4,'LPG',1,0,'C');
$pdf->Cell(24,4,$bef->vapour_height,1,0,'C');
$pdf->Cell(15,4,$bef->vapour_temp,1,0,'C');
$pdf->Cell(30,4,$bef->pressure,1,0,'C');
$pdf->Cell(24,4,number_format($bef->vapour_nett),1,0,'C');
$pdf->Cell(25,4,$bef->press_factor,1,0,'C');
$pdf->Cell(25,4,$bef->temp_factor,1,0,'C');
$pdf->Cell(25,4,$bef->density_factor,1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,4,number_format($bef->vapour_kg),1,0,'C');
$pdf->Ln();

//nett
$nett =  $row['vapour_kg'] - $bef->vapour_kg;
$pdf->Cell(-1);
$pdf->Cell(278,4,'NETT :           '.number_format($nett),'BLT',0,'R',true);
$pdf->Cell(4,4,'','TRB',0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',9);
}


//============================================================================//
// //footer
$pdf->SetY(140);
$pdf->Cell(-1);
$pdf->SetFont('Arial','U',9);
$pdf->Cell(28,4,'',0,0,'');
$pdf->Cell(39,4,'Density at 15C ',0,0,'L');
$pdf->Cell(58,4,'Density at 15C',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(58,4,'Prepared:',0,0,'L');
$pdf->Cell(99,5,'TOTAL QUANTITY RECEIVED NETT','B',0,'L');
$pdf->Ln();

$pdf->SetY(144);
$pdf->Cell(-1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(35,4,'',0,0,'');
$pdf->Cell(38,4,'after',0,0,'L');
$pdf->Cell(30,4,'before',0,0,'L');
$pdf->Ln();

$pdf->SetY(148);
$pdf->Cell(-1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,'V110',0,0,'C');
$pdf->Cell(95,4,'',0,0,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(70,4,'Checked:',0,0,'L');
$pdf->Ln();

$pdf->SetY(153);
$pdf->Cell(-1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,'V120',0,0,'C');
$pdf->Cell(20,4,'0.5428',0,0,'C');
$pdf->Cell(18,4,'',0,0,'C');
$pdf->Cell(21,4,'0.5437',0,0,'C');
$pdf->Cell(94,4,'',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(99,5,'(1) BILL OF LANDING QUALITY                            :','TB',0,'L');
$pdf->Ln();

$pdf->SetY(158);
$pdf->Cell(-1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,'V130',0,0,'C');
$pdf->Cell(20,4,'',0,0,'C');
$pdf->Cell(18,4,'',0,0,'C');
$pdf->Cell(21,4,'',0,0,'C');
$pdf->Cell(94,4,'',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(99,5,'(2) ACTUAL RECEIVE                                            :','B',0,'L');
$pdf->Ln();

$pdf->SetY(163);
$pdf->Cell(-1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(30,4,'V140',0,0,'C');
$pdf->Cell(20,4,'',0,0,'C');
$pdf->Cell(18,4,'',0,0,'C');
$pdf->Cell(21,4,'',0,0,'C');
$pdf->Cell(94,4,'',0,0,'L');
$pdf->SetFont('Arial','',9);
$pdf->Cell(99,5,'(3) ROB (3=1-2)                                                       :','B',0,'L');
$pdf->Ln();

$pdf->SetY(168);
$pdf->Cell(-1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(252,4,'',0,0,'C');
$pdf->Cell(30,4,'','B',0,'L');
$pdf->Ln();

//Output
$pdf->Output();
?>
