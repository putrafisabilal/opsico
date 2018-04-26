<?php
  include 'db_connect.php';

    $nik = $_GET['nik'];
    if(isset($_POST['ubah'])){
      if($_POST['pass'] == $_POST['rpass']){
        $niki  = $_POST['nik'];
        $passw = md5($_POST['pass']);
        $nus   = $_POST['nu'];
        $hak  = $_POST['hak'];
    // $tanggal = date("Y-m-d", strtotime($tanggali));
    // $date = date('Y-m-d', $tanggal);

      $update = "UPDATE users SET nik='$niki', password='$passw', namauser='$nus', hak='$hak' WHERE nik='$nik'";
		  $result = $con->query($update);

		  if ($result) {
			   header("location:../transaksi/change-userpassword.php");
		    }else {
			   echo "<script>alert('Update Gagal')</script>";
		  }
    } else {
      header('location:../transaksi/change-userpassword.php?status=3');
           }
  }
?>
