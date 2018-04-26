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
  //membuat border double
  $borderbot = array( 'borders' =>
      array( 'bottom' =>
        array( 'style' => PHPExcel_Style_Border::BORDER_DOUBLE, 'color' => array('argb' => '00000000'),
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
  // $objDrawing = new PHPExcel_Worksheet_Drawing();
  // $objDrawing->setName('pertamina');
  // $objDrawing->setDescription('pertamina');
  // $objDrawing->setPath('../file/adm/pertamina.png');
  // $objDrawing->setCoordinates('B2');
  // $objDrawing->setHeight(48);
  // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
  //
  // $objDrawing = new PHPExcel_Worksheet_Drawing();
  // $objDrawing->setName('pertamina');
  // $objDrawing->setDescription('pertamina');
  // $objDrawing->setPath('../file/adm/cpo.png');
  // $objDrawing->setCoordinates('R2');
  // $objDrawing->setOffsetX(30);
  // $objDrawing->setHeight(48);
  // $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

  //widthheigt
  $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(3.89+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(9.89+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(0.94+0.44);
  $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(27.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(4.78+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(11.67+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(12.11+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(12.11+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(12.33+0.78);
  $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(12.33+0.78);
  $objPHPExcel->getActiveSheet()->getRowDimension('13')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('19')->setRowHeight(18.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('20')->setRowHeight(18.60);
  $objPHPExcel->getActiveSheet()->getRowDimension('21')->setRowHeight(19.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('22')->setRowHeight(7.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('24')->setRowHeight(7.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('25')->setRowHeight(7.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('27')->setRowHeight(7.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('28')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('30')->setRowHeight(18.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('33')->setRowHeight(19.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('34')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('35')->setRowHeight(19.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('36')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('37')->setRowHeight(19.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('38')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('39')->setRowHeight(19.20);
  $objPHPExcel->getActiveSheet()->getRowDimension('40')->setRowHeight(6.00);
  $objPHPExcel->getActiveSheet()->getRowDimension('41')->setRowHeight(19.20);
  //merge
  $objPHPExcel->setActiveSheetIndex(0);
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B1:Q1');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B2:Q2');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:C4');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B5:C5');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B6:C6');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B7:C7');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B8:C8');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B9:B11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F9:F11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G9:G11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('H9:H11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('I9:I11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('J9:J11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('K9:K11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('L9:L11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('M9:M11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('N9:N11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('O9:O11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('P9:P11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('Q9:Q11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C9:E11');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C12:E12');
  $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C12:E12');
  $objPHPExcel->getActiveSheet()->getStyle('Q9')->getAlignment()->setWrapText(true);

  //content
  $objPHPExcel->getActiveSheet()->setCellValue('B1', 'LAPORAN PERGERAKAN PRODUK HARIAN, 10 HARIAN ( FD. 235 )');
  $objPHPExcel->getActiveSheet()->setCellValue('B1', 'JANUARI 2018 ( PERIODE 1 )');
  $objPHPExcel->getActiveSheet()->setCellValue('B4', 'PERTAMINA');
  $objPHPExcel->getActiveSheet()->setCellValue('B5', 'PRODUK');
  $objPHPExcel->getActiveSheet()->setCellValue('B6', 'LOKASI');
  $objPHPExcel->getActiveSheet()->setCellValue('B7', 'BULAN PERIODE');
  $objPHPExcel->getActiveSheet()->setCellValue('B8', 'NOMOR');
  $objPHPExcel->getActiveSheet()->setCellValue('D4', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D5', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D6', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D7', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('D8', ':');
  $objPHPExcel->getActiveSheet()->setCellValue('E4', 'DOMESTIC GAS REGION IV');
  $objPHPExcel->getActiveSheet()->setCellValue('E5', 'LPG MIX BULK');
  $objPHPExcel->getActiveSheet()->setCellValue('E6', 'TERMINAL LPG TG. EMAS SEMARANG');
  $objPHPExcel->getActiveSheet()->setCellValue('E7', 'JANUARI 2017 ( PERIODE 1)');
  $objPHPExcel->getActiveSheet()->setCellValue('E8', 'TLS-70.2-FDEL-01-XVIII');
  $objPHPExcel->getActiveSheet()->setCellValue('B9', 'NO.');
  $objPHPExcel->getActiveSheet()->setCellValue('C9', 'KETERANGAN');
  $objPHPExcel->getActiveSheet()->setCellValue('F9', 'UOM');
  $objPHPExcel->getActiveSheet()->setCellValue('G9', '1');
  $objPHPExcel->getActiveSheet()->setCellValue('H9', '2');
  $objPHPExcel->getActiveSheet()->setCellValue('I9', '3');
  $objPHPExcel->getActiveSheet()->setCellValue('J9', '4');
  $objPHPExcel->getActiveSheet()->setCellValue('K9', '5');
  $objPHPExcel->getActiveSheet()->setCellValue('L9', '6');
  $objPHPExcel->getActiveSheet()->setCellValue('M9', '7');
  $objPHPExcel->getActiveSheet()->setCellValue('N9', '8');
  $objPHPExcel->getActiveSheet()->setCellValue('O9', '9.');
  $objPHPExcel->getActiveSheet()->setCellValue('P9', '10.');
  $objPHPExcel->getActiveSheet()->setCellValue('Q9', 'TTL. PERIODE 1 S/D 10');






// end isi excel==============================================================================================================================================================================================================================================================================================================================




// eksekusi functions==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->getStyle('B8:Q8')->applyFromArray($borderbot);
  $objPHPExcel->getActiveSheet()->getStyle('B9:Q11')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('B9:Q11')->applyFromArray($centertext);
  $objPHPExcel->getActiveSheet()->getStyle('B9:Q11')->applyFromArray($bold);
  $objPHPExcel->getActiveSheet()->getStyle('B12:Q12')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('C12:E12')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('B13:B18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('C13:E18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('F13:F18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('G13:G18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('H13:H18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('I13:I18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('J13:J18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('K13:K18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('L13:L18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('M13:M18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('N13:N18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('O13:O18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('P13:P18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('Q13:Q18')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('B19:Q21')->applyFromArray($border);
  $objPHPExcel->getActiveSheet()->getStyle('B28:B32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('C28:E32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('F28:F32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('G28:G32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('H28:H32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('I28:I32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('J28:J32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('K28:K32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('L28:L32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('M28:M32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('N28:N32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('O28:O32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('P28:P32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('Q28:Q32')->applyFromArray($borderout);
  $objPHPExcel->getActiveSheet()->getStyle('B33:Q41')->applyFromArray($border);
  // $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->applyFromArray($setcolour);
  // $objPHPExcel->getActiveSheet()->getStyle('B16:R17')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('B18:R18')->applyFromArray($borderoutt);
  // $objPHPExcel->getActiveSheet()->getStyle('B16:R18')->applyFromArray($centertext);
  // $objPHPExcel->getActiveSheet()->getStyle('B19:R22')->applyFromArray($borderoutt);
  // $objPHPExcel->getActiveSheet()->getStyle('B23:E23')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('B23:M25')->applyFromArray($borderoutt);
  // $objPHPExcel->getActiveSheet()->getStyle('B24:C24')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('D24:D25')->applyFromArray($borderoutt);
  // $objPHPExcel->getActiveSheet()->getStyle('E23:E25')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('F23:L25')->applyFromArray($borderoutt);
  // $objPHPExcel->getActiveSheet()->getStyle('I23:K23')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('M23:M25')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('Q23:R23')->applyFromArray($bordert);
  // $objPHPExcel->getActiveSheet()->getStyle('B35:E38')->applyFromArray($border);
  // $objPHPExcel->getActiveSheet()->getStyle('B27:H34')->applyFromArray($bold);

// end eksekusi functions==============================================================================================================================================================================================================================================================================================================================

//footer============================================================================================================================================================================================================================================================================================================================================

//end footer============================================================================================================================================================================================================================================================================================================================================


//eksekusi akhir==============================================================================================================================================================================================================================================================================================================================
  $objPHPExcel->getActiveSheet()->setTitle('Master');
  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
	header('Content-Disposition: attachment;filename="FD-235.xlsx"');
	header('Cache-Control: max-age=0'); //no cache
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			//force user to download the Excel file without writing it to server's HD
	$objWriter->save('php://output');
//end eksekusi akhir==============================================================================================================================================================================================================================================================================================================================

?>
