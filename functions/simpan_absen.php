<?php
  include 'db_connect.php';

  $nk = $_POST['nk'];
  $dt = $_POST['dt'];
  $pc = $_POST['pc'];
  $il = $_POST['il'];
  $l = $_POST['l'];
  $h = $_POST['h'];
  $hi = $_POST['hi'];
  $th = $_POST['th'];
  $i = $_POST['i'];
  $c = $_POST['c'];
  $s = $_POST['s'];
  $li = $_POST['li'];
  $c1 = $_POST['c1'];
  $c2 = $_POST['c2'];
  $c3 = $_POST['c3'];
  $a1 = $_POST['a1'];
  $a2 = $_POST['a2'];
  $a3 = $_POST['a3'];
  $bln = $_POST['bln'];
  $nik = $_GET['nik'];

  $query = "INSERT INTO absen(karyawan,datang_terlambat,pulang_cepat,istirahat_lebih,lembur,hadir,hadir_izin,tidak_hadir,izin,cuti,sakit,libur,cad1,cad2,cad3,aktiv1,aktiv2,aktiv3,bulan,nik) VALUES ('".$nk."','".$dt."','".$pc."','".$il."','".$l."','".$h."','".$hi."','".$th."','".$i."','".$c."','".$s."','".$li."','".$c1."','".$c2."','".$c3."','".$a1."','".$a2."','".$a3."','".$bln."','".$nik."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/form-rekamabsen.php?status=1");
  } else {
    header('location:../transaksi/form-rekamabsen.php?status=4');
  }

?>
