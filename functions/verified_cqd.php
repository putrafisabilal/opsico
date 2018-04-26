<?php
  include 'db_connect.php';

  //update data laporan harian
  // $no = $_GET['no'];
  $tgl = $_GET['tgl'];
  $query = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl'";
  $result = $con->query($query);
  while($row=mysqli_fetch_array($result)){
  $tank = $row['tank'];
  $liqlv = $row['liquid_level'];
  $liqtemp = $row['liquid_temp'];
  $liqnet = $row['nett_litre'];
  $den = $row['density'];
  $volcor = $row['vol_correc'];
  $lit = $row['litres_15'];
  $mult = $row['multiplier'];
  $liqkg = $row['liquid_kg'];
  $vapheig = $row['vapour_height'];
  $vaptemp = $row['vapour_temp'];
  $press = $row['pressure'];
  $vapnet = $row['vapour_nett'];
  $presfac = $row['press_factor'];
  $tempfac = $row['temp_factor'];
  $denfac = $row['density_factor'];
  $vapkg = $row['vapour_kg'];
  $query = "UPDATE tank_stock_lpg SET liquid_level='$liqlv', liquid_temp='$liqtemp', liquid_nett='$liqnet', density='$den', vcf='$volcor', litter='$lit', multiplier='$mult', liquid_kg='$liqkg', vapour_level='$vapheig', vapour_temp='$vaptemp', pressure='$press', vapour_nett='$vapnet', press_factor='$presfac', temp_factor='$tempfac', density_factor='$denfac', vapour_kg='$vapkg' WHERE tank_name='$tank'";
  $editdata = $con->query($query);

  //set status
  $querystat = "UPDATE laporan_harianpp SET status = 1";
  $setstat = $con->query($querystat);
  }

  if ($editdata && $setstat) {
      $querys = "select tanggal as tanggal, status as status from laporan_harianpp GROUP BY tanggal";
      $ss = $con->query($querys);
      $row=$ss->fetch_object();
      $stt = $row->status;
    header("location:../transaksi/cqd.php?tanggal=$tgl&status=$stt");
  } else {
    echo "<script>alert('Update Gagal')</script>";
  }
?>
