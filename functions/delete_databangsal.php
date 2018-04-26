<?php
  include 'db_connect.php';

  $no= $_GET['no'];
  $bangsal = $_GET['Bangsal'];
  // // $hal="../Dashboard/data_barang";


  $hapusdata = $con->query("DELETE FROM bangsal1 WHERE no='".$no."'");

  if ($hapusdata) {
    header("location:../transaksi/form-laporanharianp.php?Bangsal=$bangsal");
  } else {
    echo "<script><alert>Tidak dapat menghapus data</alert><script>";
  }
?>
