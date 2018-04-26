<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-usertransaksi.php'); ?>
<?php

  $query = "select * from penilaian where hak=$hak ORDER by id_penilaian DESC";
  $result = $con->query($query);
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
                                  <li class="breadcrumb-item active"> Penilaian</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                    <?php while($row=mysqli_fetch_array($result)){ ?>
                                      <div class="col-12" id="printableTable">
                                        <h2><center><strong>LEMBAR PENILAIAN KINERJA</strong></center></h2>
                                        <h3><center>Penilaian Kinerja Tengah / Akhir Tahun</center></h3>
                                        <div class="col-md-6">
                                          <p>Dinilai</p>
                                          <p>Nama       :<?php echo $row['namadinilai'] ?></p>
                                          <p>Posisi     :<?php echo $row['posisi'] ?></p>
                                          <p>Departement:operasi</p>
                                        </div>
                                        <div class="col-md-offset-1 ">
                                          <p>Penilai</p>
                                          <p>Nama       :<?php echo $row['namapenilai'] ?></p>
                                          <p>Jenis      :<?php echo $row['jenis'] ?></p>
                                          <p>Tanggal    :<?php echo date('d F Y', strtotime($row["tanggal"])); ?></p>
                                        </div>

                                        <br>
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th width="35%" scope="col" ><center>Key Performance Indicator</center></th>
                                              <th width="15%" scope="col" ><center>Bobot</center></th>
                                              <th width="15%" scope="col" ><center>Target</center></th>
                                              <th width="35%" scope="col" ><center>Nilai</center></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>Kesatuan</td>
                                              <td>25%</td>
                                              <td>3</td>
                                              <td><?php echo $row['kesatuan'];?></td>
                                            </tr>
                                            <tr>
                                              <td>Fokus</td>
                                              <td>25%</td>
                                              <td>3</td>
                                              <td><?php echo $row['fokus'];?></td>
                                            </tr>
                                            <tr>
                                              <td>Kapabilitas</td>
                                              <td>25%</td>
                                              <td>3</td>
                                              <td><?php echo $row['kapabilitas'];?></td>
                                            </tr>
                                            <tr>
                                              <td>Sinergi</td>
                                              <td>25%</td>
                                              <td>3</td>
                                              <td><?php echo $row['sinergi'];?></td>
                                            </tr>
                                        </tbody>
                                      </table>
                                      </div>
                                      <a href="../functions/print_data.php?id=<?php echo $row['id_penilaian'];?>" type="button" class="btn btn-success">Print</a>
                                      <hr>
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

<?php include('../layout/footer.php') ?>
