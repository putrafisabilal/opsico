<?php
  include 'db_connect.php';

      $tank            = $_POST['tank'];
      $butane          = $_POST['butane'];
      $propane         = $_POST['propane'];
      $waktu_perkiraan = $_POST['wp'];
      $total           = $butane + $propane;
      $id_skenario     = $_GET['id'];
      $tambahskenario = $con->query("INSERT INTO skenario(mastercable_id,tank,butane,propane,total,waktu_perkiraan) VALUES ('".$id_skenario."','".$tank."','".$butane."','".$propane."','".$total."','".$waktu_perkiraan."');");
      if ($tambahskenario) {
        header('location:../transaksi/skenario-bongkar.php?id='.$id_skenario.'&status=1');
      } else {
        header('location:../transaksi/skenario-bongkar.php?id='.$id_skenario.'&status=4');
        }

?>
