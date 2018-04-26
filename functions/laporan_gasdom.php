<?php
  include '../assets/PHPExcel.php';
  include('db_connect.php');
  $objPHPExcel=new PHPExcel();

//query=========================================================================================================================================================================================================================================================
//SELECT sum(isi) as thruput, sppbe as sppbe FROM `bangsal1` WHERE tanggal='2018-02-01' group by sppbe
//end query=========================================================================================================================================================================================================================================================

// functions=========================================================================================================================================================================================================================================================
  //membuat border
  $bordert = array( 'borders' =>
      array( 'allborders' =>
        array( 'style' => PHPExcel_Style_Border::BORDER_MEDIUM, 'color' => array('argb' => '00000000'),
          ),
        ),
      );
  //membuat border outline
  $borderoutt = array( 'borders' =>
      array( 'outline' =>
        array( 'style' => PHPExcel_Style_Border::BORDER_MEDIUM, 'color' => array('argb' => '00000000'),
          ),
        ),
      );
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

  //set font
  $setcolour= array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => '1aff1a')
      )
    );
// end functions=========================================================================================================================================================================================================================================================

// isi excel==============================================================================================================================================================================================================================================================================================================================

  //image
  $objDrawing = new PHPExcel_Worksheet_Drawing();
  $objDrawing->setName('pertamina');
  $objDrawing->setDescription('pertamina');
  $objDrawing->setPath('../file/adm/pertamina.png');
  $objDrawing->setCoordinates('B2');
  $objDrawing->setHeight(48);
  $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

  $objDrawing = new PHPExcel_Worksheet_Drawing();
  $objDrawing->setName('pertamina');
  $objDrawing->setDescription('pertamina');
  $objDrawing->setPath('../file/adm/cpo.png');
  $objDrawing->setCoordinates('R2');
  $objDrawing->setOffsetX(30);
  $objDrawing->setHeight(48);
  $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

  $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(8.22);
  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15.56);
  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(17.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(16.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10.89);
  $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(17.89);
  $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(17.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(17.44);
  $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(14.33);
  $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(14.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(16.56);
  $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(9.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(10.11);
  $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(17.67);
  $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(14.56);
  $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(15.56);
  $objPHPExcel->getActiveSheet()->getRowDimension('4')->setRowHeight(21.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('5')->setRowHeight(21.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('16')->setRowHeight(18.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('17')->setRowHeight(38.40);
  $objPHPExcel->getActiveSheet()->getRowDimension('18')->setRowHeight(27.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('19')->setRowHeight(24.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('20')->setRowHeight(24.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('21')->setRowHeight(24.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('22')->setRowHeight(24.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('23')->setRowHeight(21.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('24')->setRowHeight(21.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('25')->setRowHeight(21.60);


  //header
  $objPHPExcel->setActiveSheetIndex(0);
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:S4');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B5:S5');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B10:C10');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B14:F14');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B16:B17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('I16:I17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('J16:J17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('K16:K17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('L16:L17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('Q16:Q17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('R16:R17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('E16:H16');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('M16:P16');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C16:C17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D16:D17');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B24:C24');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B25:C25');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B28:D28');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B29:D29');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B30:D30');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B31:D31');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B32:D32');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B33:F33');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B34:F34');
  $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->getAlignment()->setWrapText(true);

  $objPHPExcel->getActiveSheet()->setCellValue('B4', 'STOCK TANGKI PENYALURAN LPG');
  $objPHPExcel->getActiveSheet()->setCellValue('B11', 'DEPOT LPG SWASTA SEMARANG');
  $objPHPExcel->getActiveSheet()->setCellValue('B11', 'KEGIATAN TANKER');
  $objPHPExcel->getActiveSheet()->setCellValue('B11', 'MT');
  $objPHPExcel->getActiveSheet()->setCellValue('E11', 'LPG/C GAS WIDURI');
  $objPHPExcel->getActiveSheet()->setCellValue('B12', 'B/L');
  $objPHPExcel->getActiveSheet()->setCellValue('F12', 'MT');
  $objPHPExcel->getActiveSheet()->setCellValue('B13', 'CQD');
  $objPHPExcel->getActiveSheet()->setCellValue('F13', 'MT');
  $objPHPExcel->getActiveSheet()->setCellValue('D11', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D12', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D13', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('B14', 'Estimasi tanker discharge Senin, 1 Januari 2018 pukul 18.00 WIB');
  $objPHPExcel->getActiveSheet()->setCellValue('B16', 'TT');
  $objPHPExcel->getActiveSheet()->setCellValue('C16', 'KAPASITAS MAX. TANGKI (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('D16', 'DEATH STOCK (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('E16', 'STOCK AWAL');
  $objPHPExcel->getActiveSheet()->setCellValue('E17', 'MASS (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('F17', 'TEMP (C)');
  $objPHPExcel->getActiveSheet()->setCellValue('G17', 'PRESS (Kg/Cm2)');
  $objPHPExcel->getActiveSheet()->setCellValue('H17', 'DENSITY at 15C (Kg/Cm3)');
  $objPHPExcel->getActiveSheet()->setCellValue('I16', 'PENERIMAAN (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('J16', 'PENYALURAN (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('K16', 'BUFFER SKID');
  $objPHPExcel->getActiveSheet()->setCellValue('L16', 'INTERTANK');
  $objPHPExcel->getActiveSheet()->setCellValue('M16', 'STOCK AKHIR');
  $objPHPExcel->getActiveSheet()->setCellValue('M17', 'MASS (Kg)');
  $objPHPExcel->getActiveSheet()->setCellValue('N17', 'TEMP (C)');
  $objPHPExcel->getActiveSheet()->setCellValue('O17', 'PRESS (Kg/Cm&X2)');
  $objPHPExcel->getActiveSheet()->setCellValue('P17', 'DENSITY at 15C (Kg/Cm3)');
  $objPHPExcel->getActiveSheet()->setCellValue('Q16', 'ULLAGE');
  $objPHPExcel->getActiveSheet()->setCellValue('R16', 'CD');
  $objPHPExcel->getActiveSheet()->setCellValue('B18', '1');
  $objPHPExcel->getActiveSheet()->setCellValue('C18', '2');
  $objPHPExcel->getActiveSheet()->setCellValue('D18', '3');
  $objPHPExcel->getActiveSheet()->setCellValue('E18', '4');
  $objPHPExcel->getActiveSheet()->setCellValue('F18', '5');
  $objPHPExcel->getActiveSheet()->setCellValue('G18', '6');
  $objPHPExcel->getActiveSheet()->setCellValue('H18', '7');
  $objPHPExcel->getActiveSheet()->setCellValue('I18', '8');
  $objPHPExcel->getActiveSheet()->setCellValue('J18', '9');
  $objPHPExcel->getActiveSheet()->setCellValue('K18', '10');
  $objPHPExcel->getActiveSheet()->setCellValue('L18', '11');
  $objPHPExcel->getActiveSheet()->setCellValue('M18', '12                                       (4+8-9+10)');
  $objPHPExcel->getActiveSheet()->setCellValue('N18', '13');
  $objPHPExcel->getActiveSheet()->setCellValue('O18', '14');
  $objPHPExcel->getActiveSheet()->setCellValue('P18', '15');
  $objPHPExcel->getActiveSheet()->setCellValue('Q18', '16                                       (4-12)');
  $objPHPExcel->getActiveSheet()->setCellValue('R18', '17');
  $objPHPExcel->getActiveSheet()->setCellValue('B27', 'NOTE');
  $objPHPExcel->getActiveSheet()->setCellValue('C27', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('B28', 'Asumsi rata-rata Thruput harian  :');
  $objPHPExcel->getActiveSheet()->setCellValue('B29', 'Ketahanan Stock                  :');
  $objPHPExcel->getActiveSheet()->setCellValue('B30', 'Stock Awal per Bulan Januari     :');
  $objPHPExcel->getActiveSheet()->setCellValue('B31', 'Selisih stock akhir Actual terhadap Adm :');
  $objPHPExcel->getActiveSheet()->setCellValue('B32', 'Stock Akhir ADM');
  $objPHPExcel->getActiveSheet()->setCellValue('B33', 'Total penyaluran dan penjuala ADM s.d tanggal 31 Januari 2018:');
  $objPHPExcel->getActiveSheet()->setCellValue('B34', 'Penyaluran tanggal 1 Februari 2018 menggunakan tanki V110&V130');
  $objPHPExcel->getActiveSheet()->setCellValue('B35', 'TT');
  $objPHPExcel->getActiveSheet()->setCellValue('C35', 'ACTUAL');
  $objPHPExcel->getActiveSheet()->setCellValue('D35', 'ADM');
  $objPHPExcel->getActiveSheet()->setCellValue('E35', 'SELISIH');
  $objPHPExcel->getActiveSheet()->setCellValue('B35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('C35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('D35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('E35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('B35', 'TOTAL');
  $objPHPExcel->getActiveSheet()->setCellValue('C35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('D35', '');
  $objPHPExcel->getActiveSheet()->setCellValue('E35', '');







// end isi excel==============================================================================================================================================================================================================================================================================================================================




// eksekusi functions==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->getStyle('B16:R17')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->applyFromArray($setcolour);
  $objPHPExcel->getActiveSheet()->getStyle('B16:R17')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('B18:R18')->applyFromArray($borderoutt);
  $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('B19:R22')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('B19:R22')->applyFromArray($borderoutt);
  $objPHPExcel->getActiveSheet()->getStyle('B23:E23')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('B23:M25')->applyFromArray($borderoutt);
  $objPHPExcel->getActiveSheet()->getStyle('B24:C24')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('D24:D25')->applyFromArray($borderoutt);
  $objPHPExcel->getActiveSheet()->getStyle('E23:E25')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('F23:L25')->applyFromArray($borderoutt);
  $objPHPExcel->getActiveSheet()->getStyle('I23:K23')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('M23:M25')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('Q23:R23')->applyFromArray($bordert);
  $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('B35:E38')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('B27:H34')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('B4:S5')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('B4:S5')->applyFromArray($bold);

// end eksekusi functions==============================================================================================================================================================================================================================================================================================================================

//footer============================================================================================================================================================================================================================================================================================================================================

//end footer============================================================================================================================================================================================================================================================================================================================================


//eksekusi akhir==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->setTitle('Master');
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
	header('Content-Disposition: attachment;filename="Laporan Gasdom.xlsx"');
	header('Cache-Control: max-age=0'); //no cache
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			//force user to download the Excel file without writing it to server's HD
	$objWriter->save('php://output');
//end eksekusi akhir==============================================================================================================================================================================================================================================================================================================================

?>
