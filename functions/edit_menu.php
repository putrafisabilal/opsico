<?php
  include 'db_connect.php';

    $no = $_GET['no'];
  if(isset($_POST['ubah'])){
    $menu  = $_POST['menu'];
    $hak = $_POST['hak'];
    $href   = $_POST['href'];
    $jenis  = $_POST['jenis'];
  // $tanggal = date("Y-m-d", strtotime($tanggali));
  // $date = date('Y-m-d', $tanggal);

    $update = "UPDATE sidemenu SET menu='$menu', hak='$hak', href='$href', jenis='$jenis' WHERE no='$no'";
		$result = $con->query($update);

		if ($result) {
			  header("location:../transaksi/list-menu.php");
		}else {
			echo "<script>alert('Update Gagal')</script>";
		}
  }
?>
