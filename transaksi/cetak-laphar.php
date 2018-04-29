<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-usertransaksi.php'); ?>
<?php

 ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-7 main-chart">
                  <div class="container-fluid">
                  <!-- Breadcrumbs-->
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Cetak Laporan</li>
                    <li class="breadcrumb-item active">laporan Harian</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-10">
                          <h1>Laporan Harian</h1>
                          <hr class="style1">
                          <div class="row">
                          <div class="col-md-6">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tanggal
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <?php
                                $querytgl = "select tanggal as tanggal from laporan_harianpp GROUP BY tanggal";
                                $tanggal = $con->query($querytgl);
                                while($gettgl=mysqli_fetch_array($tanggal)){
                                  $tgl = $gettgl['tanggal'];
                                  echo "<li><a href='cetak-laphar.php?tanggal=$tgl'>".$tgl."</a></li>";
                                }?>
                              </ul>
                            </div>
                          </div>
                          <br>
                          </div>
                          <?php if(isset($_GET['tanggal'])){ $t = $_GET['tanggal']?>

                        <br>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Laporan</th>
                              <th scope="col"><center>PDF</center></th>
                              <th scope="col"><center>Excel</center></th>
                            </tr>

                          </thead>
                          <tbody>
                            <?php
                            $no = 1;
                            // $laporan = array();
                            $laporan = array('Laporan 1','Laporan 2','Laporan 3','Laporan 4','Laporan 5','Laporan Gasdom','FD-235');
                            $href = array('print_laporan1','print_laporan2','print_laporan3','print_laporan4','print_laporan5','print_lapgasdom','print_fd235');
                            $hrefi = array('#','laporan_lembar2','#','laporan_lembar4','laporan_lembar5','laporan_gasdom','fd-235');
                            for($i=0;$i<7;$i++){
                              echo "<tr>";
                              echo "<th scope=row>".$no."</th>";
                              echo "<td>".$laporan[$i]."</td>";
                              echo "<td>";
                              echo "<center><a class='btn btn-primary' href='../functions/$href[$i].php?tgl=$t'>Print</a></center>";
                              echo"</td>";
                              echo "<td>";
                              echo "<center><a class='btn btn-primary' href='../functions/$hrefi[$i].php?tgl=$t'>Print</a></center>";
                              echo"</td>";
                              echo"</tr>";
                              $no++;

                          }?>
                        </tbody>
                      </table>
                        <?php } ?>
                        </div>
                   </div>
                 </div>
              </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
  <?php include('../layout/footer.php') ?>
