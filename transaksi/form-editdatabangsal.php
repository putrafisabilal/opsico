<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-usertransaksi.php'); ?>
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
                          <h1>Laporan Harian</h1>
                          <hr class="style1">
                            <br>

                            <?php
                              $no = $_GET['no'];
                              $edit = "no='".$no."'";

                             $result2 = $con->query("SELECT * FROM bangsal1 WHERE ".$edit);
                              $row=$result2->fetch_object();
                              ?>

                        <form class="" action="../functions/edit_laporanday.php?no=<?= $row->no ?>" method="post">
                          <?php if(isset($_GET['status'])){?>
                            <?php if ($_GET['status'] == 4){?>
                              <div class="alert alert-danger" alert-respons" role="alert"">
                                  <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                              </div>
                              <?php } ?>
                            <?php }  ?>

                            <!-- bangsal -->
                              <?php if(isset($_GET['Bangsal'])){?>
                                <?php $bangsal = $_GET['Bangsal']; ?>
                          <div class="form-group">
                            <label for="nama">Bangsal :</label>
                            <input name="bang" type="text" class="form-control" value="<?php echo $bangsal?>">
                          </div>
                            <?php } ?>
                          <div class="form-group">
                            <label for="nama">Transportir - Tujuan :</label>
                            <input name="tt" type="text" class="form-control" value="<?= $row->tranportirtujuan ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">No.Polisi</label>
                            <input name="np" type="text" class="form-control" value="<?= $row->nopol ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">LO Number:</label>
                            <input name="lo" type="text" class="form-control" value="<?= $row->lonumber ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">No. SPA:</label>
                            <input name="nospa" type="text" class="form-control" value="<?= $row->nospa ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">SPPBE:</label>
                            <input name="sppbe" type="text" class="form-control" value="<?= $row->sppbe ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama Driver:</label>
                            <input name="nd" type="text" class="form-control" value="<?= $row->driver ?>">
                          </div>
                          <div class="panel-heading">
                            <h4>Timbang(Kg)</h4>
                          </div>
                          <div class="form-group">
                            <label for="nama">Kapasitas :</label>
                            <input name="kap" type="text" class="form-control" value="<?= $row->kapasitas ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">Kosong :</label>
                            <input name="k" type="text" class="form-control" value="<?= $row->kosong ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">Isi :</label>
                            <input name="i" type="text" class="form-control" value="<?= $row->isi ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">Jam Masuk :</label>
                            <input type="time" name="jm" class="form-control" value="<?= $row->masuk ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">Jam Keluar :</label>
                            <input type="time" name="jk" class="form-control" value="<?= $row->keluar ?>">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="nama">Rotto G.R/L :</label>
                            <input name="rot" type="text" class="form-control" value="<?= $row->rotto ?>">
                          </div>
                          <div class="form-group">
                            <label for="nama">BCU(Kg) :</label>
                            <input name="bcu" type="text" class="form-control" value="<?= $row->bcu ?>">
                          </div>
                          <div class="panel-heading">
                            <h4>Totalizer(Kg)</h4>
                          </div>
                          <div class="form-group">
                            <label for="nama">Sebelum :</label>
                            <input name="sb" type="text" class="form-control" value="<?= $row->sebelum ?>">
                          </div>
                          <button type="submit" name="ubah" class="btn btn-primary">ubah</button>
                        </form>
                      </div>
                   </div>
                 </div>
              </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <!-- <div class="col-lg-3 ds">
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                  </div><!-- /col-lg-3 --> -->
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
