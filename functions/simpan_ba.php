<?php
  include 'db_connect.php';

  $berkas = $_FILES['ba']['name'];
  $berkastipe = $_FILES['ba']['type'];
  $berkassize = $_FILES['ba']['size'];

  $maxsize = 1024 * 1000;
  $target_dir = "../file/berita_acara/";
  $tempat_file = $target_dir.basename($_FILES["ba"]["name"]);

  if ($berkas !== NULL || $berkas !== '') {
  	if (move_uploaded_file($_FILES['mc']['tmp_name'], $tempat_file)) {
  		$insert_berkas = move_uploaded_file($_FILES['mc']['tmp_name'], $tempat_file);
      $tambahlomba = $con->query("INSERT INTO master_cable(url_file) VALUES ('".$tempat_file."');");
  	}
  }

  if ($tambahlomba) {
      header('location:../transaksi/upload-mc.php?status=1');
    } else {
  header('location:../transaksi/upload-mc.php?status=4');
}
 ?>
