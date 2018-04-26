<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-admintransaksi.php'); ?>
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
                                  <li class="breadcrumb-item active">Tambah User</li>
                                </ol>
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>tambah user</h1>
                                        <hr class="style1">
                                      <form class="" action="../functions/simpan_user.php" method="post">
                                        <?php if(isset($_GET['status'])){?>
                                          <?php if ($_GET['status'] == 4){?>
                                            <div class="alert alert-danger" alert-respons" role="alert"">
                                                <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                                            </div>
                                            <?php } ?>
                                        <?php };  ?>
                                        <div class="form-group">
                                          <label for="nama">NIK :</label>
                                          <input name="nik" type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Nama User :</label>
                                          <input name="nu" type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Password :</label>
                                          <input name="pass" type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Re-Password :</label>
                                          <input name="rpass" type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                          <label for="jk">Hak akses:</label>
                                          <select name="haka" class="form-control" id="jk" required="required">
                                            <option>102</option>
                                            <option>103</option>
                                            <option>104</option>
                                            <option>105</option>
                                            <option>106</option>
                                            <option>107</option>
                                            <option>108</option>
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
