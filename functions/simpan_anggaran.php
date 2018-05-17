<?php
  include 'db_connect.php';

  $dk = $_POST['dk'];
  $jt = $_POST['jt'];
  $s = $_POST['s'];
  $cc = $_POST['cc'];
  $uk = $_POST['uk'];
  $nik = $_GET['nik'];

  $query = "INSERT INTO anggaran(kegiatan,jml,satuan,cost_code,nik,flag) VALUES ('".$dk."','".$jt."','".$s."','".$cc."','".$nik."','".$uk."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/form-budgeting.php?status=1");
  } else {
    header('location:../transaksi/form-budgeting.php?status=4');
  }

?>
