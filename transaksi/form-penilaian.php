<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-usertransaksi.php'); ?>
<?php include('../validasi/validasi-nilai.php') ?>
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
                                  <li class="breadcrumb-item active">Form Penilaian</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>Form Penilaian</h1>
                                        <hr class="style1">
                                      <form class="" name="formNilai" action="../functions/simpan_nilai.php?hak=<?php echo $hak ?>" onsubmit="return validateForm()" method="post">
                                        <?php if(isset($_GET['status'])){?>
                                          <?php if ($_GET['status'] == 4){?>
                                            <div class="alert alert-danger" alert-respons" role="alert"">
                                                <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                                            </div>
                                            <?php } ?>
                                        <?php };  ?>
                                        <div class="form-group">
                                          <label for="nama">Nama yang dinilai :(minimal 3 huruf dan tanpa angka)</label>
                                          <input name="nd" type="text" class="form-control" pattern="[a-zA-Z].{3,}" maxlength="50" required="harap masukan nama anda">
                                        </div>
                                        <div class="form-group">
                                          <label for="jk">jenis penilaian :</label>
                                          <select name="po" class="form-control" id="jk" required="required">
                                            <option>kepala departemen</option>
                                            <option>supervisor</option>
                                            <option>operator</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Nama penilai :</label>
                                          <input name="np" type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="jk">jenis penilaian :</label>
                                          <select name="jp" class="form-control" id="jk" required="required">
                                            <option>Sendiri</option>
                                            <option>Atasan</option>
                                            <option>Bawahan</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="alamat">Tanggal :</label>
                                          <input name="t" type="date" class="form-control" required="required">
                                        </div>
                                        <div class="panel-heading">
                                          <h3>Key Performance Indikator</h3>
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Kesatuan :  (Bobot 25%) (Nilai 1-4)</label>
                                          <input name="ke" type="text" class="form-control" pattern="[1-4]{1}" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Fokus :  (Bobot 25%) (Nilai 1-4)</label>
                                          <input name="fo" type="text" class="form-control" pattern="[1-4]{1}" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Kapabilitas :  (Bobot 25%) (Nilai 1-4)</label>
                                          <input name="kap" type="text" class="form-control" pattern="[1-4]{1}" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Sinergi :  (Bobot 25%) (Nilai 1-4)</label>
                                          <input name="si" type="text" class="form-control" pattern="[1-4]{1}" required="required">
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
