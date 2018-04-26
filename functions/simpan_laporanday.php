<?php
  include 'db_connect.php';

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
  if($kap>'2000'){
    $type = 'reguler';
  } else {
    $type = 'industri';
  }
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
  $tgl = Date('Y-m-d');
  $query = "INSERT INTO bangsal1(tranportirtujuan,nopol,kosong,isi,total,rotto,bcu,sebelum,sesudah,bangsal,lonumber,nospa,sppbe,kapasitas,driver,masuk,keluar,durasi,tanggal,type) VALUES ('".$tt."','".$np."','".$k."','".$i."','".$t."','".$rot."','".$bcu."','".$sb."','".$ss."','".$bang."','".$lo."','".$nospa."','".$sppbe."','".$kap."','".$nd."','".$jm."','".$jk."','".$d."','".$tgl."','".$type."');";
  $tambahdata = $con->query($query);

  if ($tambahdata) {
    header("location:../transaksi/form-laporanday.php");
  } else {
    header('location:../transaksi/form-laporanharianp.php?status=4');
  }

?>
