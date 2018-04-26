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
                                  <!-- Breadcrumbs-->
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Transaksi</li>
                                    <li class="breadcrumb-item active">Rekap Laporan Harian</li>
                                  </ol>
                                  <div class="table table-striped table-inverse">
                                    <h1>Laporan Harian</h1>
                                    <hr class="style1">
                               <table id="dataTable" class="table table-bordered">
                                 <thead>
                                   <tr>
                                     <th scope="col" ><center>NO</center></th>
                                     <th scope="col" ><center>SPBE / SPPBE</center></th>
                                     <th scope="col" ><center>NO PLANT</center></th>
                                     <th scope="col" ><center>THRUPUT HARIAN</center></th>
                                     <th scope="col" ><center>THRUPUT TOTAL</center></th>
                                     <th scope="col" ><center>TYPE</center></th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php
                                   $query = "select * from sppbe";
                                   $result = $con->query($query);
                                   $no = 1;
                                   while($row=mysqli_fetch_array($result)){
                                   echo "<tr>";
                                   echo "<td>".$no."</td>";
                                   echo "<td>".$row['sppbe']."</td>";
                                   echo"<td>".$row['nospa']."</td>";
                                   echo"<td>".$row['thruput_harian']."</td>";
                                   echo"<td>".$row['thruput_total']."</td>";
                                   echo"<td>".$row['type']."</td>";
                                   echo"</tr>";
                                   $no++;
                                 }?>
                               </tbody>
                             </table>
                             <button type="button" class="btn btn-success">Print</button>
                          </div>
                          <!-- data tables -->
                          <script src="../assets/js/jquery.dataTables.min.js"></script>
                          <script src="../assets/js/dataTables.bootstrap.min.js"></script>
                          <script type="text/javascript">
                              $('#dataTable').dataTable();
                          </script>
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
<?php include('../layout/footer.php') ?>
