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
                <div class="col-lg-9 main-chart">
                  <div class="container-fluid">
                  <!-- Breadcrumbs-->
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">laporan harian</li>
                  </ol>

                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>Laporan Harian Bangsal</h1>
                          <hr class="style1">
                          <div class="col-md-6">
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tanggal
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <?php
                                $querytgl = "select tanggal as tanggal from bangsal1 GROUP BY tanggal";
                                $tanggal = $con->query($querytgl);
                                while($gettgl=mysqli_fetch_array($tanggal)){
                                  $tgl = $gettgl['tanggal'];
                                  echo "<li><a href='laporan-harianp.php?Bangsal=1&tanggal=$tgl'>".$tgl."</a></li>";
                                }?>
                              </ul>
                            </div>
                          </div>
                          <?php if(isset($_GET['tanggal'])){ $t = $_GET['tanggal']?>
                          //button bangsal
                          <div class="col-md-offset-1">
                          <div class="col-md-offset-1 dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Bangsal
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <li><a href="laporan-harianp.php?Bangsal=1&tanggal=<?php echo $t ?>">Bangsal 1</a></li>
                                <li><a href="laporan-harianp.php?Bangsal=2&tanggal=<?php echo $t ?>">Bangsal 2</a></li>
                                <li><a href="laporan-harianp.php?Bangsal=3&tanggal=<?php echo $t ?>">Bangsal 3</a></li>
                                <li><a href="laporan-harianp.php?Bangsal=4&tanggal=<?php echo $t ?>">Bangsal 4</a></li>
                                <li><a href="laporan-harianp.php?Bangsal=5&tanggal=<?php echo $t ?>">Bangsal 5</a></li>
                                <li><a href="laporan-harianp.php?Bangsal=6&tanggal=<?php echo $t ?>">Bangsal 6</a></li>
                              </ul>
                            </div>
                          </div>
                        <?php } ?>
                        <?php if(isset($_GET['Bangsal'])){ ?>
                            <h4>Bangsal : <?php echo $_GET['Bangsal'];?></h4>
                        <br>
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col" rowspan="2">No</th>
                              <th scope="col" rowspan="2">Tranportir - Tujuan</th>
                              <th scope="col" rowspan="2">No.Polisi</th>
                              <th scope="col" colspan="3"><center>Timbangan(Kg)</center></th>
                              <th scope="col" rowspan="2">Rotto G.R/L</th>
                              <th scope="col" rowspan="2">BCU(Kg)</th>
                              <th scope="col" colspan="2"><center>Totalizer(Kg)</center></th>
                              <th scope="col" rowspan="2"><center>Action</center></th>
                            </tr>
                            <tr>
                              <th scope="col">Kosong</th>
                              <th scope="col">Isi</th>
                              <th scope="col">Total</th>
                              <th scope="col">Sebelum</th>
                              <th scope="col">Sesudah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if(isset($_GET['Bangsal'])){
                              $bang = $_GET['Bangsal'];
                            }
                            $query = "select * from bangsal1 where (bangsal=$bang) and (tanggal='$t')";
                            $result = $con->query($query);
                            $no = 1;
                            while($row=mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<th scope=row>".$no."</th>";
                            echo "<td>".$row['tranportirtujuan']."</td>";
                            echo"<td>".$row['nopol']."</td>";
                            echo"<td>".$row['kosong']."</td>";
                            echo"<td>".$row['isi']."</td>";
                            echo"<td>".$row['total']."</td>";
                            echo"<td>".$row['rotto']."</td>";
                            echo"<td>".$row['bcu']."</td>";
                            echo"<td>".$row['sebelum']."</td>";
                            echo"<td>".$row['sesudah']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary' href=form-editdatabangsal.php?Bangsal=".$row['bangsal']."&no=".$row['no'].">";
                            echo "<i class='fa fa-edit'></i>";
                            echo "</a> ";
                            echo "&nbsp;";
                            echo "<a onclick='return konfirmasi()' class='btn btn-danger' href=../functions/delete_databangsal.php?Bangsal=".$row['bangsal']."&no=".$row['no'].">";
                            echo "<i class='fa fa-eraser'></i>";
                            echo "</a> ";
                            echo"</td>";
                            echo"</tr>";
                            $no++;
                          }?>
                        </tbody>
                      </table>
                      <button type="button" class="btn btn-success">Print</button>
                          <?php }?>
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
