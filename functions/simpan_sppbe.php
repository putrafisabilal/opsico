<?php
  include 'db_connect.php';
    $sppbe = $_POST['sppbe'];
    $nospa = $_POST['nospa'];
    $thrh = $_POST['thrh'];
    $thrt = $_POST['thrt'];
    $t = $_POST['t'];

  $cek = "SELECT nospa FROM sppbe where nospa='$nospa'";
  $cekcek = $con->query($cek);
  $row = $cekcek->fetch_object();
  $v = $row->nospa;
  if(empty($v)){

      $query = "INSERT INTO sppbe(sppbe,nospa,thruput_harian,thruput_total,type) VALUES ('".$sppbe."','".$nospa."','".$thrh."','".$thrt."','".$t."');";
      // echo die($query);
      $tambahdata = $con->query($query);

      if ($tambahdata) {
        header("location:../transaksi/form-sppbe.php?status=1");
      } else {
        header('location:../transaksi/form-sppbe.php?status=4');
      }
  } else{
    header('location:../transaksi/form-sppbe.php?status=3');
  }
?>
