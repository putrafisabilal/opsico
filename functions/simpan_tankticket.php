<?php
  include 'db_connect.php';
    $tank = $_POST['tank'];
    $liqlv = $_POST['liqlv'];
    $liqtemp = $_POST['liqtemp'];
    $vaptemp = $_POST['vaptemp'];
    $press = $_POST['press'];
    $den = $_POST['den'];

  $query = "INSERT INTO tank_ticket(tank_name,liquid_level,temp_liquid,temp_vapour,vapour_press,density) VALUES ('".$tank."','".$liqlv."','".$liqtemp."','".$vaptemp."','".$press."','".$den."');";
  $tambahdata = $con->query($query);


  if ($tambahdata) {
    header("location:../transaksi/tankticket.php?save");
  } else {
    header('location:../transaksi/tankticket.php?status=4');
  }

?>
