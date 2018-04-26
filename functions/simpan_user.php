<?php
  include 'db_connect.php';

    if($_POST['pass'] == $_POST['rpass']){
      $niki  = $_POST['nik'];
      $passw = md5($_POST['pass']);
      $nus   = $_POST['nu'];
      $hak  = $_POST['haka'];

      // $query = "INSERT INTO users(nik,password,nama_user,hak) VALUES ('".$nik."','".$pass."','".$nu."','".$hak."');";
      // $tambahusers = $con->query($query);
      $tambahusers = $con->query("INSERT INTO users(nik,password,namauser,hak) VALUES ('".$niki."','".$passw."','".$nus."','".$hak."');");
      if ($tambahusers) {
        header('location:../transaksi/user-management.php?status=1');
      } else {
        header('location:../transaksi/user-management.php?status=4');
        }

    } else {
      header('location:../transaksi/user-management.php?status=3');
    }
?>
