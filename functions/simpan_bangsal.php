<?php
  include 'db_connect.php';

  $tt = $_POST['tt'];
  $np = $_POST['np'];
  $k = $_POST['k'];
  $i = $_POST['i'];
  $t = $_POST['k']+$_POST['i'];
  $rot = $_POST['rot'];
  $bcu = $_POST['bcu'];
  $sb = $_POST['sb'];
  $ss = $_POST['sb']+$_POST['bcu'];
  $bang = $_POST['bang'];

  $query = "INSERT INTO bangsal1(tranportirtujuan,nopol,kosong,isi,total,rotto,bcu,sebelum,sesudah,bangsal) VALUES ('".$tt."','".$np."','".$k."','".$i."','".$t."','".$rot."','".$bcu."','".$sb."','".$ss."','".$bang."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/form-laporanharianp.php?Bangsal=$bang");
  } else {
    header('location:../transaksi/form-laporanharianp.php?status=4');
  }

?>
