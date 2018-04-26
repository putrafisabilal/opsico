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
                          <div class="col-md-6">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bulan
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <?php
                                $querytgl = "select tanggal as tanggal from laporan_harianpp GROUP BY MONTH(tanggal)";
                                $tanggal = $con->query($querytgl);
                                while($gettgl=mysqli_fetch_array($tanggal)){
                                  $tgl = $gettgl['tanggal'];
                                  echo "<li><a href='cetak-laphar.php?tanggal=$tgl'>".date('F', strtotime($tgl))."</a></li>";
                                }?>
                              </ul>
                            </div>
                          </div>
                          <?php if(isset($_GET['tanggal'])){ $t = $_GET['tanggal']?>

                        <br>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Laporan</th>
                              <th scope="col"><center>Action</center></th>
                            </tr>

                          </thead>
                          <tbody>
                            <?php
                            $no = 1;
                            // $laporan = array();
                            $laporan = array('Laporan 1','Laporan2','Laporan 3','laporan4','laporan5','laporan6');
                            for($i=0;$i<6;$i++){
                              echo "<tr>";
                              echo "<th scope=row>".$no."</th>";
                              echo "<td>".$laporan[$i]."</td>";
                              echo "<td>";
                              echo "<button type='button' class='btn btn-success'>Print</button>";
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
