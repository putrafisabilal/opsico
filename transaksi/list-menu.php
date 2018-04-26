<?php include('../layout/headertransaksi.php'); ?>
<?php include('../layout/sidebar-admintransaksi.php'); ?>
<?php
    $query = "select * from sidemenu";

    //execute the query
    $result = $con->query($query);
 ?>
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
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">menu</th>
                              <th scope="col">Hak</th>
                              <th scope="col">Href</th>
                              <th scope="col">Jenis</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no = 1;
                            while($row=mysqli_fetch_array($result)){
                            echo "<tr>";
                            echo "<th scope=row>".$no."</th>";
                            echo "<td>".$row['menu']."</td>";
                            echo"<td>".$row['hak']."</td>";
                            echo"<td>".$row['href']."</td>";
                            echo"<td>".$row['jenis']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary' href=editlist-menu.php?no=".$row['no'].">";
                            echo "<i class='fa fa-edit'></i>";
                            echo "</a> ";
                            echo "&nbsp;";
                            echo "<a onclick='return konfirmasi()' class='btn btn-danger' href=../functions/delete_menu.php?no=".$row['no'].">";
                            echo "<i class='fa fa-eraser'></i>";
                            echo "</a> ";
                            echo"</td>";
                            echo"</tr>";
                            $no++;
                          }?>
                        </tbody>
                      </table>
                      <!-- <button type="button" class="btn btn-success">Print</button> -->
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
