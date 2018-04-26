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
                    <li class="breadcrumb-item active">tank ticket</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>Tank Ticket</h1>
                          <hr class="style1">
                            <br>

                          <form class="" action="../functions/simpan_tankticket.php" method="post">
                            <?php if(isset($_GET['status'])){?>
                              <?php if ($_GET['status'] == 4){?>
                                <div class="alert alert-danger" alert-respons" role="alert"">
                                    <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                                </div>
                                <?php } ?>
                            <?php };  ?>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="panel-heading">
                                <h4>Liquid(Kg)</h4>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="panel-heading">
                                <h4>Vapour(Kg)</h4>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
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
                                <label for="nama">Liquid level :</label>
                                <input name="liqlv" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Liquid temperature :</label>
                                <input name="liqtemp" type="text" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Vapour temp :</label>
                                <input name="vaptemp" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Vapour pressure :</label>
                                <input name="press" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">density :</label>
                                <input type="text" name="den" class="form-control" required="required">
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="pull-right btn btn-primary">Simpan</button>
                        </form>
                        <!-- end form -->
                      </div>
                   </div>
                 </div>
              </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <!-- <div class="col-lg-3 ds">

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
                        </div>

                  </div> -->
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
