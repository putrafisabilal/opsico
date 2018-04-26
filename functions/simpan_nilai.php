<?php
  include 'db_connect.php';
    $hak = $_GET['hak'];
    $nd = $_POST['nd'];
    $po = $_POST['po'];
    $np = $_POST['np'];
    $jp = $_POST['jp'];
    $t = $_POST['t'];
    $ke = $_POST['ke'];
    $fo = $_POST['fo'];
    $kap = $_POST['kap'];
    $si = $_POST['si'];

  $query = "INSERT INTO penilaian(namadinilai,posisi,namapenilai,jenis,tanggal,kesatuan,fokus,kapabilitas,sinergi,hak) VALUES ('".$nd."','".$po."','".$np."','".$jp."','".$t."','".$ke."','".$fo."','".$kap."','".$si."','".$hak."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/tabel-penilaian.php?save");
  } else {
    header('location:../transaksi/form-penilaian.php?status=4');
  }

?>
