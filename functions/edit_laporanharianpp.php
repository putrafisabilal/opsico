<?php
  include 'db_connect.php';

  //update data laporan harian
  $no = $_GET['no'];
  $tgl = $_GET['tgl'];
  if(isset($_POST['edit'])){
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
  $query = "UPDATE laporan_harianpp SET mastercable_id='$id', tank='$tank', liquid_level='$liqlv', liquid_temp='$liqtemp', nett_litre='$liqnet', density='$den', vol_correc='$volcor', litres_15='$lit15', multiplier='$mult', liquid_kg='$liqkg', vapour_height='$vapheig', vapour_temp='$vaptemp', pressure='$press', vapour_nett='$vapnet', press_factor='$presfac', temp_factor='$tempfac', density_factor='$denfac', vapour_kg='$vapkg' WHERE no='$no'";
  $editdata = $con->query($query);

  if ($editdata) {
    header("location:../transaksi/cqd.php?tanggal=$tgl&status=0");
  } else {
    echo "<script>alert('Update Gagal')</script>";
  }
}
?>
