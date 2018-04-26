<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-admintransaksi.php'); ?>
<script type="text/javascript">
function confirm_delete() {
  return confirm('anda yakin?');
}
</script>

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
                    <li class="breadcrumb-item active">list menu</li>
                  </ol>
                  <div class="table table-striped table-inverse">
                        <div class="col-12">
                          <h1>list menu</h1>
                          <hr class="style1">
                        <br>
                        <!-- alert -->
                          <?php if(isset($_GET['status'])){?>
                            <?php if ($_GET['status'] == 4){?>
                              <div class="alert alert-danger" alert-respons" role="alert"">
                                  <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong><i class="fa fa-times" aria-hidden="true"></i> Gagal !</strong> Gagal menghapus data!
                              </div>
                            <?php }else if($_GET['status'] == 1){?>
                              <div class="alert alert-success" alert-respons" role="alert"">
                                  <button type="button" class="close" style="margin-left:8px;line-height:0.8;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong><i class="fa fa-times" aria-hidden="true"></i> Berhasil ! </strong> Sukses menghapus data!
                              </div>
                            <?php} ?>
                          <?php }  ?>
                        <?php }  ?>
                        <!-- end alert -->
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">NIK</th>
                              <th scope="col">Nama User</th>
                              <th scope="col">Password</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $query = "select * from users";
                            //execute the query
                            $result = $con->query($query);
                            $no = 1;
                            $anda = "anda yakin?";
                            while($row=mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<th scope=row>".$no."</th>";
                            echo "<td>".$row['nik']."</td>";
                            echo "<td>".$row['namauser']."</td>";
                            echo "<td>".$row['password']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary' href=editpass-user.php?nik=".$row['nik'].">";
                            echo "<i class='fa fa-edit'></i>";
                            echo "</a> ";
                            echo "&nbsp;";
                            echo "<button class='btn btn-danger' data-toggle='modal' data-target='#myModal".$row['nik']."'><i class='fa fa-eraser'></i></button>";
                            echo "<div class='modal fade' id='myModal".$row['nik']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                            $niik = $row['nik'];
                						echo "<div class='modal-dialog'>";
                						echo "<div class='modal-content'>";
                						echo      "<div class='modal-header'>";
                						echo      "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
                						echo        "<h4 class='modal-title' id='myModalLabel'>Delete User</h4>";
                					  echo	      "</div>";
                						echo      "<div class='modal-body'>";
                						echo        "anda yakin ingin menghapus user ini?";
                  					echo	      "</div>";
                  					echo	      "<div class='modal-footer'>";
                  					echo	        "<button type='button' class='btn btn-default' data-dismiss='modal'>Tidak</button>";
                  					echo	        "<a type='button' class='btn btn-primary' href='../functions/delete_user.php?nik=$niik'>Hapus</a>";
                  					echo	      "</div>";
                  					echo	    "</div>";
                  					echo	  "</div>";
                  					echo	"</div>";
                            echo "</a> ";
                            echo"</td>";
                            echo"</tr>";
                            $no++;
                          }?>
                        </tbody>
                      </table>

                      <!-- <div class="modal fade" id="myModal240109" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          						  <div class="modal-dialog">
          						    <div class="modal-content">
          						      <div class="modal-header">
          						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          						        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          						      </div>
          						      <div class="modal-body">
          						        Hi there, I am a Modal Example for Dashgum Admin Panel.
          						      </div>
          						      <div class="modal-footer">
          						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          						        <a type='button' class='btn btn-primary' href="../functions/delete_user.php?nik="<?php  ?>>""Hapus</a>
          						      </div>
          						    </div>
          						  </div>
          						</div> -->

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

    <!-- js placed at the end of the document so the pages load faster -->
  <?php include('../layout/footer.php') ?>
