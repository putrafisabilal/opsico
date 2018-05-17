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
                                  <li class="breadcrumb-item active">Form rekam absen</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>Form Rekam Absen</h1>
                                        <hr class="style1">
                                        <?php $nik =  $_SESSION['adminnik']; ?>
                                      <form class="" id="formNilai" name="formNilai" action="../functions/simpan_absen.php?nik=<?php echo $nik ?>" onsubmit="return validateForm()" method="post">
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
                                              <?php endif; ?>
                                          <?php endif; ?>
                                        <!-- end alert -->
                                        <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="nama">Nama karyawan :</label>
                                                <input name="nk" type="text" class="form-control" pattern="[a-zA-Z].{3,}" maxlength="50" required="harap masukan nama anda">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Datang Terlambat :(isi dengan jam)</label>
                                                <input name="dt" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Pulang Cepat :(isi dengan jam)</label>
                                                <input name="pc" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Istirahat Lebih :(isi dengan jam)</label>
                                                <input name="il" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Lembur :(isi dengan jam)</label>
                                                <input name="l" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Hadir :(isi dengan jam)</label>
                                                <input name="h" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Hadir Izin :(isi dengan jam)</label>
                                                <input name="hi" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Tidak Hadir :(isi dengan jam)</label>
                                                <input name="th" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Izin :(isi dengan jam)</label>
                                                <input name="i" type="text" class="form-control" required="required">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="nama">Cuti :(isi dengan jam)</label>
                                                <input name="c" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Sakit :(isi dengan jam)</label>
                                                <input name="s" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">Libur :(isi dengan jam)</label>
                                                <input name="li" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">CAD1 :(isi dengan jam)</label>
                                                <input name="c1" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">CAD2 :(isi dengan jam)</label>
                                                <input name="c2" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">CAD3 :(isi dengan jam)</label>
                                                <input name="c3" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">aktiv1 :(isi dengan jam)</label>
                                                <input name="a1" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">aktiv2 :(isi dengan jam)</label>
                                                <input name="a2" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">aktiv3 :(isi dengan jam)</label>
                                                <input name="a3" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="alamat">Bulan :</label>
                                                <input name="bln" type="text" class="form-control" required="required">
                                              </div>
                                          </div>
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
