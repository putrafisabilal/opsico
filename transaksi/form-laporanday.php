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
                        <form class="" action="../functions/simpan_laporanday.php" method="post">
                          <?php if(isset($_GET['status'])){?>
                            <?php if ($_GET['status'] == 4){?>
                              <div class="alert alert-danger" alert-respons" role="alert"">
                                  <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menambahkan data!
                              </div>
                              <?php } ?>
                          <?php };  ?>
                          <div class="col-md-6 col-md-offset-6">
                            <div class="panel-heading">
                              <h4>Timbang(Kg)</h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="jk">Bangsal :</label>
                                <select name="bang" class="form-control" id="jk">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="nama">Transportir - Tujuan :</label>
                                <input name="tt" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">No.Polisi</label>
                                <input name="np" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">LO Number :</label>
                                <input type="text" name="lo" class="form-control">
                              </div>
                               <div class="form-group">
                                 <label for="jk">No. SPA :</label>
                                 <select name="nospa" class="form-control" id="jk">
                                   <?php
                                       $nospa = "SELECT nospa FROM alokasi where pakai ='0'";
                                       $rno = $con->query($nospa);
                                       while($row=mysqli_fetch_array($rno)){
                                         $data = explode('-',$row['nospa']);
                                         $arr = array($data[0],$data[4]);
                                         $data1 =  implode('',$arr);
                                         echo "<option value=".$data1.">".$data1."</option>";
                                       }
                                    ?>
                                 </select>
                               </div>
                              <!-- <div class="form-group">
                                <label for="nama">No. SPA :</label>
                                <input type="text" name="nospa" class="form-control" required="required">
                              </div> -->
                              <div class="form-group">
                                <label for="nama">SPPBE :</label>
                                <input type="text" name="sppbe" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Nama Driver :</label>
                                <input type="text" name="nd" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nama">Kapasitas (Kg) :</label>
                                <input type="text" name="kap" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Kosong :</label>
                                <input name="k" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Isi :</label>
                                <input name="i" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Jam Masuk :</label>
                                <input type="time" name="jm" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">Jam Keluar :</label>
                                <input type="time" name="jk" class="form-control">
                              </div>
                              <!-- <br> -->
                              <div class="form-group">
                                <label for="nama">Rotto G.R/L :</label>
                                <input name="rot" type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="nama">BCU(Kg) :</label>
                                <input name="bcu" type="text" class="form-control">
                              </div>
                              <div class="panel-heading">
                                <h4>Totalizer(Kg)</h4>
                              </div>
                              <div class="form-group">
                                <label for="nama">Sebelum :</label>
                                <input name="sb" type="text" class="form-control">
                              </div>
                            </div>
                          </div>



                          <button type="submit" class="pull-right btn btn-primary">Simpan</button>
                        </form>
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
