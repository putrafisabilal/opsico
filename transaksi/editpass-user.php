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
                                <div class="table table-striped table-inverse">
                                      <div class="col-12">
                                        <h1>Edit Menu</h1>
                                        <hr class="style1">
                                        <?php
                                          $nik = $_GET['nik'];
                                          $edit = "nik='".$nik."'";

                                         $result2 = $con->query("SELECT * FROM users WHERE ".$edit);
                                          $row=$result2->fetch_object();
                                          ?>
                                      <form class="" action="../functions/edit_user.php?nik=<?= $row->nik ?>" method="post">
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
                                          <input name="nik" type="text" class="form-control" required="required" value="<?= $row->nik ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="nama">Nama User :</label>
                                          <input name="nu" type="text" class="form-control" required="required" value="<?= $row->namauser ?>">
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
                                          <label for="jk">Hak :</label>
                                          <select name="hak" class="form-control" id="jk" required="required">
                                            <option <?php if($row->hak=='101') echo 'selected="selected"';?>>101</option>
                                            <option <?php if($row->hak=='102') echo 'selected="selected"';?>>102</option>
                                            <option <?php if($row->hak=='103') echo 'selected="selected"';?>>103</option>
                                            <option <?php if($row->hak=='104') echo 'selected="selected"';?>>104</option>
                                            <option <?php if($row->hak=='105') echo 'selected="selected"';?>>105</option>
                                            <option <?php if($row->hak=='106') echo 'selected="selected"';?>>106</option>
                                            <option <?php if($row->hak=='107') echo 'selected="selected"';?>>107</option>
                                            <option <?php if($row->hak=='108') echo 'selected="selected"';?>>108</option>
                                          </select>
                                        </div>
                                        <button type="submit" name="ubah" class="btn btn-primary">edit</button>
                                      </form>
                                    </div>
                                   </div>
                                  </div>
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <div class="col-lg-3 ds">
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

                  </div><!-- /col-lg-3 -->
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
