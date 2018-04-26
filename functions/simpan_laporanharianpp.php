<?php
  include 'db_connect.php';

  //insert data laporan harian
  $id = $_GET['id'];
  $tank = $_POST['tank'];
  $liqlv = $_POST['liqlv'];
  $liqtemp = $_POST['liqtemp'];
  $liqnet = $_POST['liqnet'];
  $den = $_POST['den'];
  $volcor = $_POST['volcor'];
  $lit15 = $_POST['lit15'];
  $mult = $_POST['mult'];
  $liqkg = $lit15 * $mult;
  $vapheig = $_POST['vapheig'];
  $vaptemp = $_POST['vaptemp'];
  $press = $_POST['press'];
  $vapnet = $_POST['vapnet'];
  $presfac = $_POST['presfac'];
  $tempfac = $_POST['tempfac'];
  $denfac = $_POST['denfac'];
  $vapkg = $vapnet*$presfac*$tempfac*$denfac;
  $tgl = Date('Y-m-d');
  $query = "INSERT INTO laporan_harianpp(mastercable_id,tank,liquid_level,liquid_temp,nett_litre,density,vol_correc,litres_15,multiplier,liquid_kg,vapour_height,vapour_temp,pressure,vapour_nett,press_factor,temp_factor,density_factor,vapour_kg,tanggal) VALUES ('".$id."','".$tank."','".$liqlv."','".$liqtemp."','".$liqnet."','".$den."','".$volcor."','".$lit15."','".$mult."','".$liqkg."','".$vapheig."','".$vaptemp."','".$press."','".$vapnet."','".$presfac."','".$tempfac."','".$denfac."','".$vapkg."','".$tgl."');";
  $tambahdata = $con->query($query);

  //insert data sebelum laporan
  $query1 = "select * from tank_stock_lpg where tank_name='$tank'";
  $result = $con->query($query1);
  $row = $result->fetch_object();
  $querysb = "INSERT INTO stock_before(mastercable_id,tank,liquid_level,liquid_temp,nett_litre,density,vol_correc,litres_15,multiplier,liquid_kg,vapour_height,vapour_temp,pressure,vapour_nett,press_factor,temp_factor,density_factor,vapour_kg,tanggal) VALUES ('".$id."','".$tank."','".$row->liquid_level."','".$row->liquid_temp."','".$row->liquid_nett."','".$row->density."','".$row->vcf."','".$row->litter."','".$row->multiplier."','".$row->liquid_kg."','".$row->vapour_level."','".$row->vapour_temp."','".$row->pressure."','".$row->vapour_nett."','".$row->press_factor."','".$row->temp_factor."','".$row->density_factor."','".$row->vapour_kg."','".$tgl."');";
  $tambahdata2 = $con->query($querysb);

  if ($tambahdata && $tambahdata2) {
    header("location:../transaksi/form-laporanharianpp.php?id=$id&status=1");
  } else {
    header('location:../transaksi/form-laporanharianp.php?id=$id&status=4');
  }

?>
