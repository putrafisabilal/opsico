<?php
  include 'db_connect.php';
    $sppbe = $_GET['sppbe'];
    $nospa = $_POST['nospa'];
    $thrh = $_POST['thrh'];
    $thrt = $_POST['thrt'];
    $t = $_POST['t'];

  $query = "INSERT INTO sppbe(sppbe,nospa,thruput_harian,thruput_total,type) VALUES ('".$sppbe."','".$nospa."','".$thrh."','".$thrt."','".$t."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/form-sppbe.php?save");
  } else {
    header('location:../transaksi/form-sppbe.php?status=4');
  }
  
?>
