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
                    <li class="breadcrumb-item active">laporan harian</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>Laporan Harian</h1>
                          <hr class="style1">
                            <br>

                            <?php
                              $tgl = $_GET['tgl'];
                              $no = $_GET['no'];
                              $id = $_GET['id'];

                             $result2 = $con->query("SELECT * FROM laporan_harianpp WHERE tanggal = '$tgl' and no = '$no' and mastercable_id='$id'");
                              $row=$result2->fetch_object();
                              ?>

                              <!-- start form -->
                        <?php if(isset($_GET['id'])){?>
                          <?php $idn = $_GET['id'];  ?>
                        <form class="" action="../functions/edit_laporanharianpp.php?id=<?php echo $idn?>&no=<?php echo $no?>&tgl=<?php echo $tgl?>" method="post">
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
                                  <option value="V110" <?php if($row->tank=='V110') echo 'selected="selected"';?>>V110</option>
                                  <option value="V120" <?php if($row->tank=='V120') echo 'selected="selected"';?>>V120</option>
                                  <option value="V130" <?php if($row->tank=='V130') echo 'selected="selected"';?>>V130</option>
                                  <option value="V140" <?php if($row->tank=='V140') echo 'selected="selected"';?>>V140</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="nama">Liquid level :</label>
                                <input name="liqlv" type="text" class="form-control" value="<?= $row->liquid_level?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">Liquid temperature :</label>
                                <input name="liqtemp" type="text" class="form-control" value="<?= $row->liquid_temp?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">nett litre :</label>
                                <input type="liqnet" name="liqnet" class="form-control" value="<?= $row->nett_litre?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">density :</label>
                                <input type="text" name="den" class="form-control" required="required" value="<?= $row->density?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">volume Correc :</label>
                                <input type="text" name="volcor" class="form-control" value="<?= $row->vol_correc?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">Litres at 15'C :</label>
                                <input type="text" name="lit15" class="form-control" value="<?= $row->litres_15?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">Multiplier :</label>
                                <input type="text" name="mult" class="form-control" value="<?= $row->multiplier?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Vapour Height :</label>
                                <input type="text" name="vapheig" class="form-control" value="<?= $row->vapour_height?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">Vapour temp :</label>
                                <input name="vaptemp" type="text" class="form-control" value="<?= $row->vapour_temp?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">pressure :</label>
                                <input name="press" type="text" class="form-control" value="<?= $row->pressure?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">Vapour nett :</label>
                                <input type="text" name="vapnet" class="form-control" value="<?= $row->vapour_nett?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">press factor :</label>
                                <input type="text" name="presfac" class="form-control" value="<?= $row->press_factor?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">temperature factor :</label>
                                <input type="text" name="tempfac" class="form-control" value="<?= $row->temp_factor?>">
                              </div>
                              <div class="form-group">
                                <label for="nama">density factor :</label>
                                <input type="text" name="denfac" class="form-control" value="<?= $row->density_factor?>">
                              </div>
                            </div>
                          </div>

                          <button type="submit" name="edit" class="pull-right btn btn-primary">Edit</button>
                        </form>
                        <?php } ?>
                        <!-- end form -->
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
