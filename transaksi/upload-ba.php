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
                    <li class="breadcrumb-item active">Berita Acara</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>Berita Acara</h1>
                          <hr class="style1">
                        <form class="" action="../functions/simpan_ba.php" method="post" enctype="multipart/form-data">
                          <!-- alert -->
                            <?php if(isset($_GET['status'])){?>
                              <?php if ($_GET['status'] == 4){?>
                                <div class="alert alert-danger" alert-respons" role="alert"">
                                    <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal mengupload file!
                                </div>
                              <?php }else if($_GET['status'] == 1){?>
                                <div class="alert alert-success" alert-respons" role="alert"">
                                    <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-times" aria-hidden="true"></i> Berhasil ! </strong> Sukses mengupload file!
                                </div>
                              <?php} ?>
                            <?php }  ?>
                          <?php }  ?>
                          <!-- end alert -->

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Upload Berita Acara:</label>
                                <input type="file" name="ba" class="form-control">
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
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
