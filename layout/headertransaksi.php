<!DOCTYPE html>
<html lang="en">
<?php
 session_start();
 if (empty($_SESSION['adminnama'])) {
 header("location:../login.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>OPSICO</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/responsive.bootstrap.min.css">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">
    <link href="../assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Dropzone css -->
    <link href="../assets/js/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/js/dropify/dist/css/dropify.min.css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/chart-master/Chart.js"></script>


    <!-- <script src="../assets/js/jquery.js"></script> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="../index.html" class="logo"><b>OPSICO</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->

                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../functions/logout.php">Logout</a></li>
            	</ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><p class="hiname">Hi, <?php echo $_SESSION['adminnama']?></p>
                      <!-- <a class="logout" href="../login.php" style="Background-color:#000"></a> -->
                    </li>
            	</ul>
            </div>
        </header>
      <!--header end-->
<?php } ?>
