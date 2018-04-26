<?php
include 'db_login.php';

$id = $_POST['idadmin'];
$password = md5($_POST['passadmin']);


$login_admin = $conn->query("SELECT * FROM users WHERE nik='$id' AND password='$password'");
$row = mysqli_num_rows($login_admin);
if ($row == 1) {
  $hasil_login = $login_admin->fetch_object();
  session_start();
  $_SESSION['admin'] = $hasil_login;
  $_SESSION['adminnama'] = $hasil_login->namauser;
  $_SESSION['adminhak'] = $hasil_login->hak;
  if($hasil_login->hak == '101'){
  header('location:../');
} else if($hasil_login->hak == '102'){
    header('location:../manager.php');
  } else if($hasil_login->hak == '103'){
      header('location:../kadept.php');
    } else if($hasil_login->hak == '104'){
        header('location:../supervisor-ad.php');
      } else if($hasil_login->hak == '105'){
          header('location:../supervisor-pp.php');
        } else if($hasil_login->hak == '106'){
            header('location:../supervisor-p.php?dashboard=harian');
          } else if($hasil_login->hak == '107'){
              header('location:../operatorp.php');
            } else if($hasil_login->hak == '108'){
                header('location:../operatorpp.php');
              }
} else {
  header('location:../login.php?status=4');
}
?>
