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
                    <li class="breadcrumb-item active">skenario bongkar</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>skenario pembongkaran</h1>
                          <hr class="style1">
                          <!-- button id -->
                          <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">id master cable
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu">
                                <?php
                                $queryid = "select id as id from master_cable";
                                $id = $con->query($queryid);
                                while($getid=mysqli_fetch_array($id)){
                                  $ids = $getid['id'];
                                  echo "<li><a href='skenario-bongkar.php?id=$ids'>".$ids."</a></li>";
                                }?>
                              </ul>
                            </div>
                            <br>
                            <!-- ======================================================= -->
                          <div class="row">
                            <div class="col-md-6">
                                <!-- form start -->
                                  <?php if(isset($_GET['id'])){
                                    $idn = $_GET['id'];?>
                                    <form class="" action="../functions/simpan_skenario.php?id=<?php echo $idn?>" method="post">
                                      <?php if(isset($_GET['status'])){?>
                                        <?php if ($_GET['status'] == 4){?>
                                          <div class="alert alert-danger" alert-respons" role="alert"">
                                              <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                                          </div>
                                          <?php } ?>
                                      <?php };  ?>
                                <div class="form-group">
                                  <label for="jk">Tank :</label>
                                  <select name="tank" class="form-control" id="jk">
                                    <option value="V110">V110</option>
                                    <option value="V120">V120</option>
                                    <option value="V130">V130</option>
                                    <option value="V140">V140</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="nama">Butane :(isi 4-5 karakter dan harus angka)</label>
                                  <input name="butane" type="text" pattern="[1-9]{4,5}" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Propane :(isi 4-5 karakter dan harus angka)</label>
                                  <input name="propane" type="text" pattern="[1-9]{5}" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                  <label for="nama">waktu perkiraan :</label>
                                  <input type="time" name="wp" class="form-control" required="required">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <!-- form end -->
                              </div>
                              <!-- master cable -->
                              <?php
                              $idm = $_GET['id'];
                              $query = "select * from master_cable where id=$idm";
                              $result = $con->query($query);
                              $row = $result->fetch_object(); ?>
                              <div class="col-md-6">
                                  <div class="project-wrapper">
                                            <div class="project">
                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                      <a class="fancybox" href="<?php echo $row->url_file ?>"><img class="img-responsive" src="<?php echo $row->url_file ?>" alt=""></a>
                                                    </div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                              </div>
                              <!-- end master cable -->
                            </div>
                          </form>
                        <?php };  ?>








                        <!-- ======================================================= -->
                        <?php if(isset($_GET['id'])){?>
                          <br>
                          <?php  ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col" rowspan="2"><center><p>PARCEL</p></center></th>
                                <th scope="col" rowspan="2"><center><p>GRADE</p></center></th>
                                <th scope="col" rowspan="2"><center><p>Percent composition</p></center></th>
                                <th scope="col" rowspan="2"><center><p>TANK</p></center></th>
                                <th scope="col" rowspan="2"><center><p>QUANTITY</p></center></th>
                                <th scope="col" rowspan="2"><center>TOTAL</center></th>
                                <th scope="col" colspan="2"><center>Temp*C</center></th>
                                <th scope="col" colspan="2"><center>Press(BarG)</center></th>
                                <th scope="col" colspan="2"><center>FLOWRATE</center></th>
                                <th scope="col" rowspan="2"><center>EXPECTED TIME</center></th>
                              </tr>
                              <tr>
                                <th scope="col">Min.</th>
                                <th scope="col" ><center>Max.</center></th>
                                <th scope="col" ><center>Min.</center></th>
                                <th scope="col" ><center>Max.</center></th>
                                <th scope="col" ><center>Initial</center></th>
                                <th scope="col" ><center>Max.</center></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $query = "select * from skenario where (mastercable_id=$idn)";
                              $result = $con->query($query);
                              $no = 1;
                              while($row=mysqli_fetch_array($result)){
                              echo "<tr>";
                              echo "<td rowspan='2'>".$no."</td>";
                              echo "<td>Butane</td>";
                              echo "<td><center>50%</center></td>";
                              echo "<td rowspan='2'>".$row['tank']."</td>";
                              echo "<td>".$row['butane']."</td>";
                              echo "<td rowspan='2'><center>".$row['total']."</center></td>";
                              echo "<td rowspan='2'><center>4 *C</center></td>";
                              echo "<td rowspan='2'><center>+08 *C</center></td>";
                              echo "<td rowspan='2'><center>6 BarG</center></td>";
                              echo "<td rowspan='2'><center>13 BarG</center></td>";
                              echo "<td rowspan='2'><center>100 MT/H</center></td>";
                              echo "<td rowspan='2'><center>300 MT/H</center></td>";
                              echo "<td rowspan='2'>".$row['waktu_perkiraan']."</td>";
                              echo "</tr>";
                              echo "<tr>";
                              echo "<td>Propane</td>";
                              echo "<td><center>50%</center></td>";
                              echo "<td>".$row['propane']."</td>";
                              echo "</tr>";
                              $no++;
                            }?>
                          </tbody>
                        </table>
                        <?php } ?>
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
