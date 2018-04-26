<?php
  include 'db_connect.php';

    $no = $_GET['no'];
  if(isset($_POST['ubah'])){
    $tt = $_POST['tt'];
    $np = $_POST['np'];
    $k = $_POST['k'];
    $i = $_POST['i'];
    $t = $_POST['k']+$_POST['i'];
    $rot = $_POST['rot'];
    $bcu = $_POST['bcu'];
    $sb = $_POST['sb'];
    $ss = $_POST['sb']+$_POST['bcu'];
    $bang = $_POST['bang'];
    $lo = $_POST['lo'];
    $nospa = $_POST['nospa'];
    $sppbe = $_POST['sppbe'];
    $nd = $_POST['nd'];
    $kap = $_POST['kap'];
    $jm = $_POST['jm'];
    $jk = $_POST['jk'];
    //fungsi durasi
    $start_time = strtotime($jm);
    $end_time = strtotime($jk);
    $difference = $end_time - $start_time;
    $seconds = $difference % 60;            //seconds
    $difference = floor($difference / 60);
    $min = $difference % 60;              // min
    $difference = floor($difference / 60);
    $hours = $difference;  //hours
    $d = "$hours:$min:$seconds";
  // $tanggal = date("Y-m-d", strtotime($tanggali));
  // $date = date('Y-m-d', $tanggal);

    $update = "UPDATE bangsal1 SET tranportirtujuan='$tt', nopol='$np', kosong='$k', isi='$i', total='$t', rotto='$rot',bcu='$bcu' , sebelum='$sb', sesudah='$ss' , bangsal='$bang' ,lonumber='$lo',nospa='$nospa',sppbe='$sppbe',kapasitas='$kap',driver='$nd',masuk='$jm',keluar='$jk',durasi='$d' WHERE no='$no'";
		$result = $con->query($update);

		if ($result) {
			  header("location:../transaksi/laporan-harianp.php?Bangsal=$bang");
		}else {
			echo "<script>alert('Update Gagal')</script>";
		}
  }
?>
