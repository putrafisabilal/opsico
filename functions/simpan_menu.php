<?php
  include 'db_connect.php';

      $menu  = $_POST['menu'];
      $hak = $_POST['hak'];
      $href   = $_POST['href'];
      $jenis  = $_POST['jenis'];

      $tambahmenu = $con->query("INSERT INTO sidemenu(menu,hak,href,jenis) VALUES ('".$menu."','".$hak."','".$href."','".$jenis."');");
      if ($tambahmenu) {
        header('location:../transaksi/management-menu.php?status=1');
      } else {
        header('location:../transaksi/management-menu.php?status=4');
        }

?>
