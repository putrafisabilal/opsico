<?php include ('../layout/headertransaksi.php'); ?>
<?php include ('../layout/sidebar-usertransaksi.php'); ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-9 main-chart">
                  <div class="container-fluid">
                                  <!-- Breadcrumbs-->
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Transaksi</li>
                                    <li class="breadcrumb-item active">Rekap Laporan Harian</li>
                                  </ol>
                                  <div class="table table-striped table-inverse">
                                    <?php
                                    $queryhari = "select tanggal as hari from bangsal1 GROUP BY tanggal";
                                    $hari = $con->query($queryhari);
                                    while ($gethari=mysqli_fetch_array($hari)) {
                                      $har = $gethari['hari'];
                                     ?>
                                     <hr class="style1">
                                    <h2><center>REKAPITULASI PENYALURAN HARIAN</center></h2>
                                    <h3><center>TERMINAL LPG SEMARANG</center></h3>
                                    <h4><center><?php echo date('d-m-Y', strtotime($har)); ?></center></h4>
                               <table class="table table-bordered">
                                 <thead>
                                   <tr>
                                     <th scope="col" >LO Number</th>
                                     <th scope="col" >Transportir</th>
                                     <th scope="col" >No.SPA</th>
                                     <th scope="col" ><center>SPPBE</center></th>
                                     <th scope="col" ><center>Kapasitas</center></th>
                                     <th scope="col" ><center>Driver</center></th>
                                     <th scope="col" ><center>No.Polisi</center></th>
                                     <th scope="col" ><center>Bangsal Pengisian</center></th>
                                     <th scope="col" ><center>Jam Masuk</center></th>
                                     <th scope="col" ><center>Jam Keluar</center></th>
                                     <th scope="col" ><center>Durasi</center></th>
                                     <th scope="col" ><center>Qty(Kg)</center></th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php
                                   $query = "select * from bangsal1 where tanggal='$har'";
                                   $result = $con->query($query);
                                   $no = 1;
                                   while($row=mysqli_fetch_array($result)){
                                   echo "<tr>";
                                   echo "<td>".$row['lonumber']."</td>";
                                   echo"<td>".$row['tranportirtujuan']."</td>";
                                   echo"<td>".$row['nospa']."</td>";
                                   echo"<td>".$row['sppbe']."</td>";
                                   echo"<td>".$row['kapasitas']."</td>";
                                   echo"<td>".$row['driver']."</td>";
                                   echo"<td>".$row['nopol']."</td>";
                                   echo"<td>".$row['bangsal']."</td>";
                                   echo"<td>".date('H:i', strtotime($row['masuk']))."</td>";
                                   echo"<td>".date('H:i', strtotime($row['keluar']))."</td>";
                                   echo"<td>".date('H:i', strtotime($row['durasi']))."</td>";
                                   echo"<td>".$row['isi']."</td>";
                                   echo"</tr>";
                                   $no++;
                                 }?>
                               </tbody>
                             </table>
                             <button type="button" class="btn btn-success">Print</button>
                           <?php } ?>
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
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
<?php include('../layout/footer.php') ?>
