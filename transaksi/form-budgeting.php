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
                                  <li class="breadcrumb-item active">Form budgeting</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>Form budgeting</h1>
                                        <hr class="style1">
                                        <?php $nik =  $_SESSION['adminnik']; ?>
                                      <form class="" id="formNilai" name="formNilai" action="../functions/simpan_anggaran.php?nik=<?php echo $nik ?>" onsubmit="return validateForm()" method="post">
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
                                              <div class="form-group">
                                                <label for="nama">detail Kegiatan/barang :</label>
                                                <input name="dk" type="text" class="form-control" pattern="[a-zA-Z].{3,}" maxlength="50" required="harap masukan nama anda">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">jumlah tenaga/barang :</label>
                                                <input name="jt" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">satuan :</label>
                                                <input name="s" type="text" class="form-control" required="required">
                                              </div>
                                              <div class="form-group">
                                                <label for="nama">cost code :</label>
                                                <input name="cc" type="text" class="form-control" required="required">
                                              </div>
                                              <!-- <div class="form-group">
                                                <label for="jk">Bulan :</label>
                                                <select name="bln" class="form-control" id="jk">
                                                  <option value="januari">januari</option>
                                                  <option value="februari">februari</option>
                                                  <option value="maret">maret</option>
                                                  <option value="april">april</option>
                                                  <option value="mei">mei</option>
                                                  <option value="juni">juni</option>
                                                  <option value="juli">juli</option>
                                                  <option value="agustus">agustus</option>
                                                  <option value="september">september</option>
                                                  <option value="oktober">oktober</option>
                                                  <option value="november">november</option>
                                                  <option value="desember">desember</option>
                                                </select>
                                              </div> -->
                                              <div class="form-group">
                                                <label for="jk">uraian kegiatan :</label>
                                                <select name="uk" class="form-control" id="jk">
                                                  <option value="lembur">lembur</option>
                                                  <option value="peralatan">peralatan sampling</option>
                                                  <option value="perlengkapan">perlengkapan operasi</option>
                                                  <option value="suplemen">suplemen</option>
                                                  <option value="operasional">operasional uji timbang</option>
                                                  <option value="bongkar">bongkar uji timbang</option>
                                                  <option value="uji">uji pemakaian house</option>
                                                  <option value="sampling">biaya sampling</option>
                                                  <option value="transportasi">biaya transportasi</option>
                                                  <option value="stock">stock opname & invoice</option>
                                                  <option value="print_lapgasdom">biaya representasi gas domestik</option>
                                                  <option value="lain">lain-lain</option>
                                                </select>
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
