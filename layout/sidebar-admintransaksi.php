<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<?php
  //QUERY
  session_start();
  $_SESSION['adminhak'];
  $_SESSION['adminnama'];

  include '../functions/db_connect.php';

  $hak =   $_SESSION['adminhak'];
  $nama =  $_SESSION['adminnama'];
  //query all records from the database
  $query = "select * from sidemenu where hak=$hak and jenis='transaksi'";
  $query2 = "select * from sidemenu where hak=$hak and jenis='laporan'";

  //execute the query
  $result = $con->query($query);
  $result2 = $con->query($query2);
  ?>
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="../profile.html"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?php echo $nama; ?></h5>

            <li class="mt">
                <a href="/opsico4">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="../javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>transaksi</span>
                </a>
                <ul class="sub">
                <?php
                  while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.
                    {
                        $no=$row[0];
                        $menu=$row[1];
                        $href=$row[3];
                    ?>
                    <li ><a  href="../<?php echo $href;?>"><?php echo $menu;?></a></li>
                    <?php
                  }
                ?>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="../javascript:;" >
                    <i class="fa fa-cogs"></i>
                    <span>laporan</span>
                </a>
                <ul class="sub">
                  <?php
                    while($row=mysqli_fetch_array($result2))//while look to fetch the result and store in a array $row.
                      {
                          $no=$row[0];
                          $menu=$row[1];
                          $href=$row[3];
                      ?>
                      <li><a  href="../<?php echo $href;?>"><?php echo $menu;?></a></li>
                      <?php
                    }
                  ?>
                </ul>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
