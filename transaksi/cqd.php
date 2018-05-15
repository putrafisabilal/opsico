<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-usertransaksi.php'); ?>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-9">
                  <div class="container-fluid">
                  <!-- Breadcrumbs-->
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">CQD</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>Certificate of Quantity Discharge</h1>
                          <hr class="style1">

                          <div class="row">
                            <div class="col-md-6">
                              <!-- button id -->
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tanggal
                                  <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                    <?php
                                    $querytgl = "select tanggal as tanggal, status as status from laporan_harianpp GROUP BY tanggal";
                                    $tanggal = $con->query($querytgl);
                                    while($gettgl=mysqli_fetch_array($tanggal)){
                                      $tgl = $gettgl['tanggal'];
                                      $stat = $gettgl['status'];
                                      echo "<li><a href='cqd.php?tanggal=$tgl&status=$stat'>".$tgl."</a></li>";
                                    }?>
                                  </ul>
                                </div>
                                <br>
                              </div>
                            </div>
                                <!-- table cqd -->
                        <?php if(isset($_GET['tanggal'])){
                          $tgl = $_GET['tanggal']?>
                          <?php  ?>
                          <h4><center><strong>Liquid</strong></center></h4>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col" ><center><p>Date</p></center></th>
                                <th scope="col" ><center><p>Discharge</p></center></th>
                                <th scope="col" ><center><p>Tank Name</p></center></th>
                                <th scope="col" ><center><p>Product</p></center></th>
                                <th scope="col" ><center><p>Liquid level</p></center></th>
                                <th scope="col" ><center>Temp</center></th>
                                <th scope="col" ><center>Nett Litres</center></th>
                                <th scope="col" ><center>Density</center></th>
                                <th scope="col" ><center>Vol. correc</center></th>
                                <th scope="col" ><center>Litres</center></th>
                                <th scope="col" ><center>Multiplier</center></th>
                                <th scope="col" ><center>Kilograms</center></th>
                                <?php if(isset($_GET['status'])){?>
                                  <?php if ($_GET['status'] == 0){?>
                                <th scope="col" ><center><p>Action</p></center></th>
                                  <?php } ?>
                                <?php } ?>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $query = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl' and flag='after'";
                              $result = $con->query($query);
                              while($row=mysqli_fetch_array($result)){
                              $tank = $row['tank'];
                              echo "<tr>";
                              echo  "<td rowspan='2'><center><p>".$row['tanggal']."</p></center></td>";
                              echo  "<td>before</td>";
                              echo  "<td scope='col' rowspan='2'><center>LPG</center></td>";
                              echo  "<td scope='col' rowspan='2'><center>".$row['tank']."</center></td>";
                              $query1 = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl' and tank='$tank' and flag='before'";
                              $result1 = $con->query($query1);
                              $bef = $result1->fetch_object();
                              echo  "<td>".$bef->liquid_level."</td>";
                              echo  "<td>".$bef->liquid_temp."</td>";
                              echo  "<td>".$bef->nett_litre."</td>";
                              echo  "<td>".$bef->density."</td>";
                              echo  "<td>".$bef->vol_correc."</td>";
                              echo  "<td>".$bef->litres_15."</td>";
                              echo  "<td>".$bef->multiplier."</td>";
                              echo  "<td>".$bef->liquid_kg."</td>";
                              echo "</tr>";
                              echo "<tr>";
                              echo "<td>after</td>";
                              $query2 = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl' and tank='$tank' and flag='after'";
                              $result2 = $con->query($query2);
                              $af = $result2->fetch_object();
                              echo  "<td>".$af->liquid_level."</td>";
                              echo  "<td>".$af->liquid_temp."</td>";
                              echo  "<td>".$af->nett_litre."</td>";
                              echo  "<td>".$af->density."</td>";
                              echo  "<td>".$af->vol_correc."</td>";
                              echo  "<td>".$af->litres_15."</td>";
                              echo  "<td>".$af->multiplier."</td>";
                              echo  "<td>".$af->liquid_kg."</td>";
                              if(isset($_GET['status'])){
                                if ($_GET['status'] == 0){
                              echo "<td>";
                              echo "<a class='btn btn-primary' href='form-editcqd.php?tgl=$tgl&no=".$af->no."&id=".$af->mastercable_id."'>";
                              echo "<i class='fa fa-edit'></i>";
                              echo "</a> ";
                              echo"</td>";
                                }
                              }
                              echo "</tr>";
                              $nett =  $af->liquid_kg - $bef->liquid_kg;
                              echo "<tr>";
                              echo  "<td colspan='10'></td>";
                              echo  "<td colspan='12'>NETT :".$nett."</td>";
                              echo "</tr>";
                            }?>
                          </tbody>
                        </table>
                        <!-- data vapour -->
                        <h4><center><strong>Vapour</strong></center></h4>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col" ><center><p>Date</p></center></th>
                              <th scope="col" ><center><p>Discharge</p></center></th>
                              <th scope="col" ><center><p>Tank Name</p></center></th>
                              <th scope="col" ><center><p>Product</p></center></th>
                              <th scope="col" ><center><p>Vapour level</p></center></th>
                              <th scope="col" ><center><p>Temp</p></center></th>
                              <th scope="col" ><center><p>Pressure</p></center></th>
                              <th scope="col" ><center><p>Nett Litres</p></center></th>
                              <th scope="col" ><center><p>Pressure factor</p></center></th>
                              <th scope="col" ><center><p>Temperature Factor</p></center></th>
                              <th scope="col" ><center><p>Density Factor</p></center></th>
                              <th scope="col" ><center><p>Kilograms</p></center></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl'";
                            $result = $con->query($query);
                            while($row=mysqli_fetch_array($result)){
                            $tank = $row['tank'];
                            echo "<tr>";
                            echo  "<td rowspan='2'><center><p>".$row['tanggal']."</p></center></td>";
                            echo  "<td>before</td>";
                            echo  "<td scope='col' rowspan='2'><center>LPG</center></td>";
                            echo  "<td scope='col' rowspan='2'><center>".$row['tank']."</center></td>";
                            $query1 = "SELECT * FROM `stock_before` WHERE tanggal='$tgl' and tank='$tank'";
                            $result1 = $con->query($query1);
                            $bef = $result1->fetch_object();
                            echo  "<td>".$bef->vapour_height."</td>";
                            echo  "<td>".$bef->vapour_temp."</td>";
                            echo  "<td>".$bef->pressure."</td>";
                            echo  "<td>".$bef->vapour_nett."</td>";
                            echo  "<td>".$bef->press_factor."</td>";
                            echo  "<td>".$bef->temp_factor."</td>";
                            echo  "<td>".$bef->density_factor."</td>";
                            echo  "<td>".$bef->vapour_kg."</td>";

                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>after</td>";
                            $query2 = "SELECT * FROM `laporan_harianpp` WHERE tanggal='$tgl' and tank='$tank'";
                            $result2 = $con->query($query2);
                            $af = $result2->fetch_object();
                            echo  "<td>".$af->vapour_height."</td>";
                            echo  "<td>".$af->vapour_temp."</td>";
                            echo  "<td>".$af->pressure."</td>";
                            echo  "<td>".$af->vapour_nett."</td>";
                            echo  "<td>".$af->press_factor."</td>";
                            echo  "<td>".$af->temp_factor."</td>";
                            echo  "<td>".$af->density_factor."</td>";
                            echo  "<td>".$af->vapour_kg."</td>";
                            echo "</tr>";
                            $nett =  ($af->vapour_kg - $bef->vapour_kg) * -1;
                            echo "<tr>";
                            echo  "<td colspan='10'></td>";
                            echo  "<td colspan='12'>NETT :".$nett."</td>";
                            echo "</tr>";
                          }?>
                        </tbody>
                      </table>
                        <?php if(isset($_GET['status'])){?>
                          <?php if ($_GET['status'] == 0){?>
                      <a href="../functions/verified_cqd.php?tgl=<?php echo $tgl?>" type="button" class="btn btn-success">Verified</a><span> </span>
                          <?php } ?>
                          <?php if ($_GET['status'] == 1){?>
                      <a href="../functions/print_cqd.php?tgl=<?php echo $tgl?>" type="button" class="btn btn-success">Print</a>
                          <?php } ?>
                        <?php } ?>
                      <?php } ?>
                      <!-- end tabel cqd -->
                      </div>
                   </div>
                 </div>
                 </div>
              </div><!-- /col-lg-9 END SECTION MIDDLE -->

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

<?php include('../layout/footer.php') ?>
