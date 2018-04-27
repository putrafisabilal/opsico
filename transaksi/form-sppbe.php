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
                                  <li class="breadcrumb-item active">Tambah SPPBE</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>Form Tambah SPPBE</h1>
                                        <hr class="style1">
                                      <form class="" name="formSppbe" action="../functions/simpan_sppbe.php" method="post">
                                        <!-- alert -->
                                          <?php if(isset($_GET['status'])):?>
                                                <?php if ($_GET['status'] == 4):?>
                                                  <div class="alert alert-danger" alert-respons" role="alert"">
                                                      <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                                                  </div>
                                                <?php elseif ($_GET['status'] == 1):?>
                                                  <div class="alert alert-success" alert-respons" role="alert"">
                                                      <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      <strong><i class="fa fa-times" aria-hidden="true"></i> Berhasil ! </strong> Sukses memasukan data!
                                                  </div>
                                                <?php elseif ($_GET['status'] == 3):?>
                                                  <div class="alert alert-danger" alert-respons" role="alert"">
                                                      <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                      <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data karena nospa sama!
                                                  </div>
                                              <?php endif; ?>
                                          <?php endif; ?>
                                        <!-- end alert -->
                                        <div class="form-group">
                                          <label for="nama">Nama SPPBE :</label>
                                          <input name="sppbe" type="text" class="form-control" pattern="[a-zA-Z].{3,}" maxlength="50" required="harap masukan nama sppbe">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">No. SPA :</label>
                                          <input name="nospa" type="text" class="form-control" pattern="[A-Z0-9].{1,}" maxlength="50" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Thruput Harian :</label>
                                          <input name="thrh" type="text" class="form-control" pattern="[0-9].{3,}" maxlength="50" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Thruput Total :</label>
                                          <input name="thrt" type="text" class="form-control" pattern="[0-9]{1,}" maxlength="50" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Type :</label>
                                          <input name="t" type="text" class="form-control" pattern="[a-zA-Z].{5,}" maxlength="50" required="required">
                                        </div>
                                        <button type="submit" class="btn btn-primary">add</button>
                                      </form>
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
