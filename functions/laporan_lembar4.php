<?php
  include '../assets/PHPExcel.php';
  include('db_connect.php');
  $objPHPExcel=new PHPExcel();

//query=========================================================================================================================================================================================================================================================
//SELECT sum(isi) as thruput, sppbe as sppbe FROM `bangsal1` WHERE tanggal='2018-02-01' group by sppbe
//end query=========================================================================================================================================================================================================================================================

// functions=========================================================================================================================================================================================================================================================
  //membuat border
  $border = array( 'borders' =>
			array( 'allborders' =>
				array( 'style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => '00000000'),
					),
				),
			);
  //membuat center kata
  $centertext = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        )
    );
  //bold text
  $bold = array(
      	'font' => array(
      		'bold' => true,
      	)
    );

  //set font
  $font= array(
    'font'  => array(
        'size'  => 8,
        'name'  => 'Calibri'
    ));


  $isi = array();
  $isii = array();

    $query = "SELECT sum(isi) as thruput, sppbe as sppbe, nospa as nospa FROM `bangsal1` WHERE tanggal='2018-01-29' and type='reguler' group by sppbe";
    $result = $con->query($query);
    $no = 1;
    while($row=mysqli_fetch_array($result)){
    $cool = $no +7;
    $isi[] = array('B' => $no, 'C' => $row['sppbe'], 'D' => $row['nospa'],'E' => '26000' ,'F' => '20000','G' => $row['thruput'],'H' => "=F$cool-G$cool",'I' => ($row['thruput']/20000)*100 ,'J' => 'RDTS');
    $no++;
    }

    $query1 = "SELECT sum(isi) as thruput, sppbe as sppbe, nospa as nospa FROM `bangsal1` WHERE tanggal='2018-01-29' and type='industri' group by sppbe";
    $result1 = $con->query($query1);
    $noo = 1;
    while($row=mysqli_fetch_array($result1)){
    $isii[] = array('B' => $noo, 'C' => $row['sppbe'], 'D' => '-','E' => '0' ,'F' => '0','G' => $row['thruput'],'H' => $row['thruput']-0,'I' => '100' ,'J' => 'RDTS');
    $noo++;
    }

// end functions=========================================================================================================================================================================================================================================================

// isi excel==============================================================================================================================================================================================================================================================================================================================
  //header
  $objPHPExcel->setActiveSheetIndex(0);
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B2:J2');
  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
  $objPHPExcel->getActiveSheet()->setCellValue('B2', 'MONITORING RENCANA ALOKASI PENYALURAN VERSUS REALISASI');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B3:J3');
  $objPHPExcel->getActiveSheet()->setCellValue('B3', 'TERMINAL LPG SEMARANG');
  //header kolom
  $objPHPExcel->getActiveSheet()->getStyle("C4:J4")->getFont()->setSize(9);
  $objPHPExcel->getActiveSheet()->setCellValue('C4', 'TLS - 70.2 - RD - 021 - XVIII  (4 of 5)');
  $objPHPExcel->getActiveSheet()->setCellValue('I4', 'HARI, TANGGAL');
  $objPHPExcel->getActiveSheet()->setCellValue('J4', ': Minggu, 21 Januari 2018');
  $objPHPExcel->getActiveSheet()->setCellValue('B5', 'No');
  $objPHPExcel->getActiveSheet()->setCellValue('C5', 'SPBE / SPPBE');
  $objPHPExcel->getActiveSheet()->setCellValue('D5', 'No');
  $objPHPExcel->getActiveSheet()->setCellValue('E5', 'THRUPUT');
  $objPHPExcel->getActiveSheet()->setCellValue('F5', 'RENCANA');
  $objPHPExcel->getActiveSheet()->setCellValue('G5', 'TOTAL');
  $objPHPExcel->getActiveSheet()->setCellValue('H5', 'SELISIH');
  $objPHPExcel->getActiveSheet()->setCellValue('I5', 'PROSENTASE');
  $objPHPExcel->getActiveSheet()->setCellValue('J5', 'CATATAN');
  $objPHPExcel->getActiveSheet()->setCellValue('D6', 'PLANT');
  $objPHPExcel->getActiveSheet()->setCellValue('E6', 'PER HARI(MT)');
  $objPHPExcel->getActiveSheet()->setCellValue('F6', 'PENYALURAN(Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('G6', 'PENYALURAN(Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('H6', '(Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('D6', 'PENYALURAN(%)');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B7:J7');
  $objPHPExcel->getActiveSheet()->setCellValue('B7', 'SPPBE / SPBE JATENG DAN D.I.YOGYAKARTA');
  //data reguler
  foreach($isi as $k => $v)
  {
  	$col = $k + 8;
  	foreach($v as $k1 => $v1)
  	{
  		$column = $k1.$col;
  		$objPHPExcel->getActiveSheet()->setCellValue($column, $v1);
  	}
  }
  $colplus = $col+1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("B$colplus:C$colplus");
  $objPHPExcel->getActiveSheet()->setCellValue("B$colplus", 'SUB TOTAL SPPBE / SPBE JATENG DAN D.I.YOGYAKARTA');
  $objPHPExcel->getActiveSheet()->setCellValue("E$colplus","=SUM(E7:E$col)");
  $objPHPExcel->getActiveSheet()->setCellValue("F$colplus","=SUM(F7:F$col)");
  $objPHPExcel->getActiveSheet()->setCellValue("G$colplus","=SUM(G7:G$col)");
  $objPHPExcel->getActiveSheet()->setCellValue("H$colplus","=ABS(G$colplus-F$colplus)");

  $colp = $colplus +1;
  $objPHPExcel->getActiveSheet()->setCellValue("B$colp", 'INDUSTRI');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("B$colp:J$colp");
  $colpp = $colp +1;
  //data industries
  foreach($isii as $kk => $vv)
  {
  	$coll = $kk + $colp + 1;
  	foreach($vv as $k11 => $v11)
  	{
  		$columnn = $k11.$coll;
  		$objPHPExcel->getActiveSheet()->setCellValue($columnn, $v11);
  	}
  }
  $coul = $coll +1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("B$coul:C$coul");
  $objPHPExcel->getActiveSheet()->setCellValue("B$coul", 'SUB TOTAL INDUSTRI');
  $objPHPExcel->getActiveSheet()->setCellValue("F$coul","=SUM(F$colpp:F$coul)");
  $objPHPExcel->getActiveSheet()->setCellValue("G$coul","=SUM(G$colpp:G$coul)");
  $objPHPExcel->getActiveSheet()->setCellValue("H$coul","=ABS(G$coul-F$coul)");

  //footer
  $colt = $coul +1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("B$colt:E$colt");
  $objPHPExcel->getActiveSheet()->setCellValue("B$colt", 'TOTAL');
  $objPHPExcel->getActiveSheet()->setCellValue("F$colt","=F$colplus+F$coul");
  $objPHPExcel->getActiveSheet()->setCellValue("G$colt","=G$colplus+G$coul");
  $objPHPExcel->getActiveSheet()->setCellValue("H$colt","=ABS(G$colt-F$colt)");
  $objPHPExcel->getActiveSheet()->setCellValue("I$colt","=G$colt/F$colt*100");

  $coltt = $colt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$coltt:E$coltt");
  $objPHPExcel->getActiveSheet()->setCellValue("B$coltt", 'NB:');
  $objPHPExcel->getActiveSheet()->setCellValue("C$coltt", '₋ Rencana Alokasi Penyaluran Harian dibuat oleh Gas Domestik Region IV:');

  $colttt = $coltt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$colttt:E$colttt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$colttt", '₋ Apabila jumlah prosentase mencapai 98% s.d. 100% maka dianggap sesuai dengan rencana');

  $coltttt = $colttt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$coltttt:E$coltttt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$coltttt", 'RDTS : Rencana, Datang Tidak Sesuai');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("F$coltttt:H$coltttt");
  $objPHPExcel->getActiveSheet()->setCellValue("F$coltttt", 'RENCANA');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("I$coltttt:J$coltttt");
  $objPHPExcel->getActiveSheet()->setCellValue("I$coltttt", 'TIDAK RENCANA');
  $objPHPExcel->getActiveSheet()->setCellValue("K$coltttt", 'TOTAL');

  $dolt = $coltttt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$dolt:E$dolt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$dolt", 'RDS   : Rencana, Datang Sesuai');
  $objPHPExcel->getActiveSheet()->setCellValue("F$dolt", 'RDTS');
  $objPHPExcel->getActiveSheet()->setCellValue("G$dolt", 'RDS');
  $objPHPExcel->getActiveSheet()->setCellValue("H$dolt", 'RTD');
  $objPHPExcel->getActiveSheet()->setCellValue("I$dolt", 'TR');
  $objPHPExcel->getActiveSheet()->setCellValue("J$dolt", 'TRD');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("K$coltttt:K$dolt");

  $eolt = $dolt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$eolt:D$eolt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$eolt", 'RTD   : Rencana, Tidak Datang');
  $objPHPExcel->getActiveSheet()->setCellValue("E$eolt", 'JUMLAH SPPBE DAN INDUSTRI');
  $objPHPExcel->getActiveSheet()->setCellValue("F$eolt", '=COUNTIF(J8:J'.$coul.',"RDTS")');
  $objPHPExcel->getActiveSheet()->setCellValue("G$eolt", '=COUNTIF(J8:J'.$coul.',"RDS")');
  $objPHPExcel->getActiveSheet()->setCellValue("H$eolt", '=COUNTIF(J8:J'.$coul.',"RTD")');
  $objPHPExcel->getActiveSheet()->setCellValue("I$eolt", '=COUNTIF(J8:J'.$coul.',"TR")');
  $objPHPExcel->getActiveSheet()->setCellValue("J$eolt", '=COUNTIF(J8:J'.$coul.',"TRD")');
  $objPHPExcel->getActiveSheet()->setCellValue("K$eolt","=SUM(E$eolt:J$eolt)");

  $folt = $eolt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$folt:D$folt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$folt", 'TR      : Tidak Rencana');
  $objPHPExcel->getActiveSheet()->setCellValue("E$folt", 'JUMLAH SPPBE DAN INDUSTRI');
  $objPHPExcel->getActiveSheet()->setCellValue("F$folt", "=F$eolt/K$eolt*100");
  $objPHPExcel->getActiveSheet()->setCellValue("G$folt", "=G$eolt/K$eolt*100");
  $objPHPExcel->getActiveSheet()->setCellValue("H$folt", "=H$eolt/K$eolt*100");
  $objPHPExcel->getActiveSheet()->setCellValue("I$folt", "=I$eolt/K$eolt*100");
  $objPHPExcel->getActiveSheet()->setCellValue("J$folt", "=J$eolt/K$eolt*100");
  $objPHPExcel->getActiveSheet()->setCellValue("K$folt","=SUM(E$folt:J$folt)");

  $golt = $folt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("C$golt:D$golt");
  $objPHPExcel->getActiveSheet()->setCellValue("C$golt", 'TRD   : Tidak Rencana, Datang');
  $objPHPExcel->getActiveSheet()->setCellValue("E$golt", 'JML PENYALURAN (kg)');
  $objPHPExcel->getActiveSheet()->setCellValue("F$golt", '=SUMIF(J8:J'.$coll.',"RDTS",G8:G'.$coll.')');
  $objPHPExcel->getActiveSheet()->setCellValue("G$golt", '=SUMIF(J8:J'.$coll.',"RDS",G8:G'.$coll.')');
  $objPHPExcel->getActiveSheet()->setCellValue("H$golt", '=SUMIF(J8:J'.$coll.',"RTD",G8:G'.$coll.')');
  $objPHPExcel->getActiveSheet()->setCellValue("I$golt", '=SUMIF(J8:J'.$coll.',"TR",G8:G'.$coll.')');
  $objPHPExcel->getActiveSheet()->setCellValue("J$golt", '=SUMIF(J8:J'.$coll.',"TRD",G8:G'.$coll.')');
  $objPHPExcel->getActiveSheet()->setCellValue("K$golt","=SUM(E$golt:J$golt)");

  $holt = $golt + 2;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("D$holt:E$holt");
  $objPHPExcel->getActiveSheet()->setCellValue("D$holt", 'Disiapkan oleh: Maulida Kurniawati');
  $objPHPExcel->getActiveSheet()->setCellValue("H$holt", 'Mengetahui');

  $iolt = $holt + 1;
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("D$iolt:E$iolt");
  $objPHPExcel->getActiveSheet()->setCellValue("D$iolt", 'Diperiksa oleh: Agastia K.W. Geni');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells("H$iolt:I$iolt");
  $objPHPExcel->getActiveSheet()->setCellValue("H$iolt", 'Kepala Terminal LPG Semarang');

  $jolt = $iolt + 2;
  $objPHPExcel->getActiveSheet()->setCellValue("H$jolt", 'Bayu Maryono');





  //AUTOZISE
  $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
  $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
  $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
  $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
// end isi excel==============================================================================================================================================================================================================================================================================================================================




// eksekusi functions==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->getStyle("B2:K$golt")->applyFromArray($font);
  $objPHPExcel->getActiveSheet()->getStyle("B2:J2")->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle("B3:J3")->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle("B2:J2")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B3:J3")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B5:J5")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B$colplus:J$colplus")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B$colp:J$colp")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B$coul:J$coul")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("B$colt:J$colt")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("K$coltttt")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("K$dolt")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("K$eolt")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("K$folt")->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle("K$golt")->applyFromArray($bold);


  $objPHPExcel->getActiveSheet()->getStyle('B5:J7')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle("B$colplus:J$colplus")->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle("I$colt")->getNumberFormat()->setFormatCode('0');
  $objPHPExcel->getActiveSheet()->getStyle("I7:I$col")->getNumberFormat()->setFormatCode('0');
  $objPHPExcel->getActiveSheet()->getStyle("K$folt")->getNumberFormat()->setFormatCode('0');
  $objWorksheet = $objPHPExcel->getActiveSheet();
  $objWorksheet->getStyle('B8:'.$column)->applyFromArray($border);
  $objWorksheet->getStyle("B$colp:J$colp")->applyFromArray($border);
  $objWorksheet->getStyle("B$colpp:J$coul")->applyFromArray($border);

  $objWorksheet->getStyle("B$colt:J$colt")->applyFromArray($border);
  $objWorksheet->getStyle("F$coltttt:K$dolt")->applyFromArray($border);
  $objWorksheet->getStyle("E$eolt:K$eolt")->applyFromArray($border);
  $objWorksheet->getStyle("E$folt:K$folt")->applyFromArray($border);
  $objWorksheet->getStyle("E$golt:K$golt")->applyFromArray($border);

  $objPHPExcel->getActiveSheet()->getStyle("F$coltttt:H$coltttt")->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle("I$coltttt:J$coltttt")->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle("K$coltttt:K$dolt")->applyFromArray($centertext);

// end eksekusi functions==============================================================================================================================================================================================================================================================================================================================

//footer============================================================================================================================================================================================================================================================================================================================================

//end footer============================================================================================================================================================================================================================================================================================================================================


//eksekusi akhir==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->setTitle('Master');
  header('Content-Type: application/vnd.ms-excel'); //mime type
	header('Content-Disposition: attachment;filename="test.xls"');
	header('Cache-Control: max-age=0'); //no cache
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			//force user to download the Excel file without writing it to server's HD
	$objWriter->save('php://output');
//end eksekusi akhir==============================================================================================================================================================================================================================================================================================================================

?>
