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
  //membuat border outline
  $borderout = array( 'borders' =>
    	array( 'outline' =>
    		array( 'style' => PHPExcel_Style_Border::BORDER_THIN, 'color' => array('argb' => '00000000'),
    			),
    		),
    	);

  //membuat center kata
  $centertext = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        )
    );
  //bold text
  $bold = array(
      	'font' => array(
      		'bold' => true,
      	)
    );

  //bold text
  $underline = array(
        'font' => array(
          'underline' => true,
        )
    );
  //set font
  $font= array(
    'font'  => array(
        'size'  => 10,
        'name'  => 'Arial'
    ));


  // $isi = array();
  // $isii = array();
  //
  //   $query = "SELECT sum(isi) as thruput, sppbe as sppbe, nospa as nospa FROM `bangsal1` WHERE tanggal='2018-01-29' and type='reguler' group by sppbe";
  //   $result = $con->query($query);
  //   $no = 1;
  //   while($row=mysqli_fetch_array($result)){
  //   $cool = $no +7;
  //   $isi[] = array('B' => $no, 'C' => $row['sppbe'], 'D' => $row['nospa'],'E' => '26000' ,'F' => '20000','G' => $row['thruput'],'H' => "=F$cool-G$cool",'I' => ($row['thruput']/20000)*100 ,'J' => 'RDTS');
  //   $no++;
  //   }
  //
  //   $query1 = "SELECT sum(isi) as thruput, sppbe as sppbe, nospa as nospa FROM `bangsal1` WHERE tanggal='2018-01-29' and type='industri' group by sppbe";
  //   $result1 = $con->query($query1);
  //   $noo = 1;
  //   while($row=mysqli_fetch_array($result1)){
  //   $isii[] = array('B' => $noo, 'C' => $row['sppbe'], 'D' => '-','E' => '0' ,'F' => '0','G' => $row['thruput'],'H' => $row['thruput']-0,'I' => '100' ,'J' => 'RDTS');
  //   $noo++;
  //   }

// end functions=========================================================================================================================================================================================================================================================

// isi excel==============================================================================================================================================================================================================================================================================================================================
  //header
  $objPHPExcel->setActiveSheetIndex(0);
  //image
  $objDrawing = new PHPExcel_Worksheet_Drawing();
  $objDrawing->setName('pertamina');
  $objDrawing->setDescription('pertamina');
  $objDrawing->setPath('../file/adm/pertamina.png');
  $objDrawing->setCoordinates('A1');
  $objDrawing->setHeight(48);
  $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

  $objDrawing = new PHPExcel_Worksheet_Drawing();
  $objDrawing->setName('pertamina');
  $objDrawing->setDescription('pertamina');
  $objDrawing->setPath('../file/adm/cpo.png');
  $objDrawing->setCoordinates('H1');
  $objDrawing->setOffsetX(30);
  $objDrawing->setHeight(48);
  $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

  $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(14.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(16.89);
  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(16.33);
  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(13.56);
  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15.22);
  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(15.89);
  $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15.33);
  $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(28.78);
  $objPHPExcel->getActiveSheet()->getRowDimension('15')->setRowHeight(19.80);
  $objPHPExcel->getActiveSheet()->getRowDimension('16')->setRowHeight(19.80);
  $objPHPExcel->getActiveSheet()->setCellValue('A4', 'Tanggal');
  $objPHPExcel->getActiveSheet()->setCellValue('B4', ': 8 Januari 2018');
  $objPHPExcel->getActiveSheet()->setCellValue('A5', 'No');
  $objPHPExcel->getActiveSheet()->setCellValue('B5', ': TLS - 70.2 - RD - 008- XVIII');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A8:A9');
  $objPHPExcel->getActiveSheet()->setCellValue('A8', 'Tangki');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B8:B9');
  $objPHPExcel->getActiveSheet()->setCellValue('B8', 'Stock Awal (MT)');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C8:D8');
  $objPHPExcel->getActiveSheet()->setCellValue('C8', 'penerimaan (MT)');
  $objPHPExcel->getActiveSheet()->setCellValue('C9', 'Hari ini');
  $objPHPExcel->getActiveSheet()->setCellValue('D9', 'Akumulasi');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('E8:F8');
  $objPHPExcel->getActiveSheet()->setCellValue('E8', 'Penyaluran dan Industri (MT)');
  $objPHPExcel->getActiveSheet()->setCellValue('E9', 'Hari ini');
  $objPHPExcel->getActiveSheet()->setCellValue('F9', 'Akumulasi');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G8:G9');
  $objPHPExcel->getActiveSheet()->setCellValue('G8', 'Tangki');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('H8:H9');
  $objPHPExcel->getActiveSheet()->setCellValue('H8', 'Stock Akhir (MT)');
  $objPHPExcel->getActiveSheet()->setCellValue('A10', 'V - 110');
  $objPHPExcel->getActiveSheet()->setCellValue('A11', 'V - 120');
  $objPHPExcel->getActiveSheet()->setCellValue('A12', 'V - 130');
  $objPHPExcel->getActiveSheet()->setCellValue('A13', 'V - 140');
  $objPHPExcel->getActiveSheet()->setCellValue('A14', 'Total');

  $objPHPExcel->getActiveSheet()->setCellValue('G10', 'V - 110');
  $objPHPExcel->getActiveSheet()->setCellValue('G11', 'V - 120');
  $objPHPExcel->getActiveSheet()->setCellValue('G12', 'V - 130');
  $objPHPExcel->getActiveSheet()->setCellValue('G13', 'V - 140');
  $objPHPExcel->getActiveSheet()->setCellValue('G14', 'Total');

  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A15:C15');
  $objPHPExcel->getActiveSheet()->setCellValue('A15', 'Tenaga Kerja');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D15:E15');
  $objPHPExcel->getActiveSheet()->setCellValue('D15', 'Pengisian dari Lajur');

  $objPHPExcel->getActiveSheet()->setCellValue('A16', 'Divisi');
  $objPHPExcel->getActiveSheet()->setCellValue('A17', '1. Ka Dept');
  $objPHPExcel->getActiveSheet()->setCellValue('A18', '2. Control Room');
  $objPHPExcel->getActiveSheet()->setCellValue('A19', '3. R&S');
  $objPHPExcel->getActiveSheet()->setCellValue('A20', '4. Distribusi');
  $objPHPExcel->getActiveSheet()->setCellValue('A21', '5. Adm. Opr');
  $objPHPExcel->getActiveSheet()->setCellValue('A22', '6. Power House');

  $objPHPExcel->getActiveSheet()->setCellValue('B16', 'Jumlah');
  $objPHPExcel->getActiveSheet()->setCellValue('B17', '1');
  $objPHPExcel->getActiveSheet()->setCellValue('B18', '4');
  $objPHPExcel->getActiveSheet()->setCellValue('B19', '6');
  $objPHPExcel->getActiveSheet()->setCellValue('B20', '18');
  $objPHPExcel->getActiveSheet()->setCellValue('B21', '1');
  $objPHPExcel->getActiveSheet()->setCellValue('B22', '3');

  $objPHPExcel->getActiveSheet()->setCellValue('C16', 'Keterangan');
  $objPHPExcel->getActiveSheet()->setCellValue('C17', '-');
  $objPHPExcel->getActiveSheet()->setCellValue('C18', 'off shift = 2');
  $objPHPExcel->getActiveSheet()->setCellValue('C19', '-');
  $objPHPExcel->getActiveSheet()->setCellValue('C20', '-');
  $objPHPExcel->getActiveSheet()->setCellValue('C21', '');
  $objPHPExcel->getActiveSheet()->setCellValue('C22', 'off shift = 1');

  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F15:F16');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D16:D17');
  $objPHPExcel->getActiveSheet()->setCellValue('D16', 'Bangsal');
  $objPHPExcel->getActiveSheet()->setCellValue('D18', '01');
  $objPHPExcel->getActiveSheet()->setCellValue('D19', '02');
  $objPHPExcel->getActiveSheet()->setCellValue('D20', '03');
  $objPHPExcel->getActiveSheet()->setCellValue('D21', '04');
  $objPHPExcel->getActiveSheet()->setCellValue('D22', '05');
  $objPHPExcel->getActiveSheet()->setCellValue('D23', '06');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('E16:E17');
  $objPHPExcel->getActiveSheet()->setCellValue('E16', 'Jml Skid Tank');
  $objPHPExcel->getActiveSheet()->setCellValue('F15', 'Pemompaan dari Kapal ke Tangki Penerimaan');
  $objPHPExcel->getActiveSheet()->getStyle('F15')->getAlignment()->setWrapText(true);
  $objPHPExcel->getActiveSheet()->setCellValue('G15', 'Kapasitas Pompa');
  $objPHPExcel->getActiveSheet()->setCellValue('G16', 'Lamanya');
  $objPHPExcel->getActiveSheet()->setCellValue('H15', '__MT/Hrs');
  $objPHPExcel->getActiveSheet()->setCellValue('H16', '___Jam___Mnt');

  //bagian bawah
  $objPHPExcel->getActiveSheet()->setCellValue('A26', 'Catatan :');
  $objPHPExcel->getActiveSheet()->setCellValue('B26', 'Product in Line');
  $objPHPExcel->getActiveSheet()->setCellValue('B27', 'Stock Akhir Terminal');
  $objPHPExcel->getActiveSheet()->setCellValue('B28', 'Density Tangki');
  $objPHPExcel->getActiveSheet()->setCellValue('B29', 'Penyaluran dimulai pukul 06.00 WIB dan selesai pukul 24.00 WIB.');
  $objPHPExcel->getActiveSheet()->setCellValue('D28', ':V110: 0,5437');
  $objPHPExcel->getActiveSheet()->setCellValue('E28', ':V120: 0,5417');
  $objPHPExcel->getActiveSheet()->setCellValue('F28', ':V130: 0,5421');
  $objPHPExcel->getActiveSheet()->setCellValue('G28', ':V140: 0,5417');
  $objPHPExcel->getActiveSheet()->setCellValue('B34', 'Disiapkan oleh :');
  $objPHPExcel->getActiveSheet()->setCellValue('C34', 'Maulida Kurniawati');
  $objPHPExcel->getActiveSheet()->setCellValue('B36', 'Diperiksa oleh :');
  $objPHPExcel->getActiveSheet()->setCellValue('C36', 'Agastia K.W. Geni');
  $objPHPExcel->getActiveSheet()->setCellValue('F33', 'Disetujui oleh:');
  $objPHPExcel->getActiveSheet()->setCellValue('F34', 'Kepala Terminal LPG Semarang');
  $objPHPExcel->getActiveSheet()->setCellValue('F37', 'Bayu Maryono');

  $objPHPExcel->getActiveSheet()->setCellValue('A39', 'Pukul 00.00');
  $objPHPExcel->getActiveSheet()->setCellValue('A40', 'v110:');
  $objPHPExcel->getActiveSheet()->setCellValue('C40', 'v120:');
  $objPHPExcel->getActiveSheet()->setCellValue('E40', 'v130:');
  $objPHPExcel->getActiveSheet()->setCellValue('G40', 'v140:');
  $objPHPExcel->getActiveSheet()->setCellValue('A41', 'Pukul 24.00');
  $objPHPExcel->getActiveSheet()->setCellValue('A42', 'v110:');
  $objPHPExcel->getActiveSheet()->setCellValue('C42', 'v120:');
  $objPHPExcel->getActiveSheet()->setCellValue('E42', 'v130:');
  $objPHPExcel->getActiveSheet()->setCellValue('G42', 'v140:');

  $objPHPExcel->getActiveSheet()->setCellValue('B45', 'Disiapkan oleh :');
  $objPHPExcel->getActiveSheet()->setCellValue('B47', 'Septodia');
  $objPHPExcel->getActiveSheet()->setCellValue('C45', 'Diperiksa oleh :');
  $objPHPExcel->getActiveSheet()->setCellValue('C47', 'Agastia K.W. Geni');







// end isi excel==============================================================================================================================================================================================================================================================================================================================




// eksekusi functions==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->getStyle('A8:H16')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('A17:E25')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('F17:H25')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('A8:H9')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('A8:H9')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('A15:C15')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('A15:C15')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('A26:H32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('A33:H37')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('F37')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('F37')->applyFromArray($underline);
  $objPHPExcel->getActiveSheet()->getStyle('A4:H47')->applyFromArray($font);

// end eksekusi functions==============================================================================================================================================================================================================================================================================================================================

//footer============================================================================================================================================================================================================================================================================================================================================

//end footer============================================================================================================================================================================================================================================================================================================================================


//eksekusi akhir==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->setTitle('Master');
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
	header('Content-Disposition: attachment;filename="Laporan Lembar 5.xlsx"');
	header('Cache-Control: max-age=0'); //no cache
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			//force user to download the Excel file without writing it to server's HD
	$objWriter->save('php://output');
//end eksekusi akhir==============================================================================================================================================================================================================================================================================================================================

?>
