<?php include ('../layout/headertransaksi.php'); ?>
<?php include ('../layout/sidebar-usertransaksi.php'); ?>
<?php
 // $date = '2018-01-30';
  $query  = "select * from bangsal1";
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
                                    <li class="breadcrumb-item active">Rekap Laporan Bulanan</li>
                                  </ol>
                                  <div class="table table-striped table-inverse">
                                    <h1>Laporan Bulanan</h1>
                                    <hr class="style1">
                               <?php
                               $querybln = "select month(tanggal) as bulan from bangsal1 GROUP BY month(tanggal)";
                               $bulan = $con->query($querybln);
                               while ($getbln=mysqli_fetch_array($bulan)) {
                                 $bul = $getbln['bulan'];
                                ?>
                               <table class="table table-bordered">
                                 <thead>
                                   <tr>
                                     <th  scope="col" rowspan="2" ><center>Tanggal</center></th>
                                     <th scope="col" colspan="6"><center>Pengisian Per Bangsal</center></th>
                                     <th scope="col" rowspan="2"><center>Thruput(Kg)</center></th>
                                     <th scope="col" colspan="3"><center>Waktu Pengisian</center></th>
                                     <th scope="col" rowspan="2"><center>Keterangan</center></th>
                                   </tr>
                                   <tr>
                                     <th scope="col" ><center>BAY-1 (Kg)</center></th>
                                     <th scope="col" ><center>BAY-2 (Kg)</center></th>
                                     <th scope="col" ><center>BAY-3 (Kg)</center></th>
                                     <th scope="col" ><center>BAY-4 (Kg)</center></th>
                                     <th scope="col" ><center>BAY-5 (Kg)</center></th>
                                     <th scope="col" ><center>BAY-6 (Kg)</center></th>
                                     <th scope="col" ><center>Mulai</center></th>
                                     <th scope="col" ><center>Selesai</center></th>
                                     <th scope="col" ><center>Durasi</center></th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php
                                   $querytgl = "select tanggal, min(masuk) as jam_masuk, max(keluar) as jam_keluar, day(tanggal) as hari from bangsal1 where month(tanggal)=$bul GROUP BY tanggal";
                                   $tanggal = $con->query($querytgl);
                                   while ($getgl=mysqli_fetch_array($tanggal)) {
                                     $tgl = $getgl['tanggal'];
                                     $day = $getgl['hari'];
                                     $mulai = date('H:i', strtotime($getgl['jam_masuk']));
                                     $selesai = date('H:i', strtotime($getgl['jam_keluar']));
                                     echo "<tr>";
                                     echo "<td>".$tgl."</td>";
                                     $sum = 0;
                                     for($i=1;$i<=6;$i++){
                                       // select SUM(IF(YEAR(tanggal)=2018 and month(tanggal)=01 and day(tanggal)=29, isi,0)) as jumlah_isi FROM bangsal1 WHERE bangsal=1
                                       $querysum = "select SUM(IF(day(tanggal) = $day , isi,0)) as jumlah_isi FROM bangsal1 WHERE bangsal=$i";
                                       $result1 = $con->query($querysum);
                                       while($r=mysqli_fetch_array($result1)){
                                         echo "<td>".$r['jumlah_isi']."</td>";
                                         $sum = $sum + $r['jumlah_isi'];
                                       }
                                     }
                                     echo "<td>".$sum."</td>";
                                     if($mulai<="05:00:00"){
                                       echo "<td>06:00</td>";
                                       echo "<td>06:00</td>";
                                       echo "<td>24:00</td>";
                                       echo "<td>24 jam operasional</td>";
                                       echo "</tr>";
                                     } else {
                                     echo "<td>".$mulai."</td>";
                                     echo "<td>".$selesai."</td>";
                                     $start_time = strtotime($mulai);
                                     $end_time = strtotime($selesai);
                                     $difference = $end_time - $start_time;
                                     $seconds = $difference % 60;            //seconds
                                     $difference = floor($difference / 60);
                                     $min = $difference % 60;              // min
                                     $difference = floor($difference / 60);
                                     $hours = $difference;  //hours
                                     $durasi = "$hours:$min";
                                     echo "<td>".$durasi."</td>";
                                       if($durasi>="16:00:00"){
                                         echo "<td>standby pukul ".$selesai." WIB</td>";
                                       } else if($durasi=="00:00:00" || $durasi>="23:00:00"){
                                         echo "<td>24 jam operasional</td>";
                                       } else if($durasi>=NULL){
                                       echo "<td>libur</td>";
                                       }
                                     echo "</tr>";
                                     }
                               }?>
                               </tbody>
                             </table>
                             <a href="../functions/print_data.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-success">Print</a>
                             <hr class="style1">
                         <?php  }?>
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
