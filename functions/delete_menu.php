<?php
  include 'db_connect.php';

  $no= $_GET['no'];
  $bangsal = $_GET['Bangsal'];
  // // $hal="../Dashboard/data_barang";


  $hapusdata = $con->query("DELETE FROM sidemenu WHERE no='".$no."'");

  if ($hapusdata) {
     header("location:../transaksi/list-menu.php");
  } else {
    echo "<script><alert>Tidak dapat menghapus data</alert><script>";
  }
?>
