<?php
  include 'db_connect.php';

  $nik= $_GET['nik'];
  // // $hal="../Dashboard/data_barang";


  $hapusdata = $con->query("DELETE FROM users WHERE nik='".$nik."'");

  if ($hapusdata) {
     header("location:../transaksi/change-userpassword.php?status=1");
  } else {
    echo "<script><alert>Tidak dapat menghapus data</alert><script>";
  }
?>
