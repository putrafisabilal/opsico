<?php include('layout/header.php'); ?>
<?php include('layout/sidebar-user.php'); ?>
<?php
if(isset($_GET['dashboard'])){
  $dashboard = $_GET['dashboard'];
}
 ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="row">
                  <div class="col-lg-12 main-chart">

                    <div class="row">
                      <div class="col-md-1">
                        <a href="supervisor-p.php?dashboard=tahunan" class="dashboard">tahunan</a></li>
                      </div>
                      <div class="col-md-1">
                        <a href="supervisor-p.php?dashboard=bulanan" class="dashboard">bulanan</a></li>
                      </div>
                      <div class="col-md-1">
                        <a href="supervisor-p.php?dashboard=harian" class="dashboard">harian</a></li>
                      </div>
                    </div>
                    <hr>
                    <!-- chart -->
                    <div class="row mtbox">
                    <?php if(isset($_GET['dashboard'])){
                          if($dashboard == "harian"){?>
                  		<div class="col-md-3 col-sm-2 box0" >
                  			<div class="box1">
					  			<span class="">Total Distribusi</span>
					  			<h1>93%</h1>
                  			</div>
					  			<p>Total distribusi</p>
                  		</div>
                      <div class="col-md-3 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="">rata waktu pengisian</span>
					  			<h1>50%</h1>
                  			</div>
					  			<p>aman</p>
                  		</div>
                      <div class="col-md-3 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="">rata waktu pengisian</span>
					  			<h1>50 <span>menit/Kg</span></h1>
                  			</div>
					  			<p>aman</p>
                  		</div>
                  		<div class="col-md-3 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="">banding <?php echo $dashboard ?> Lalu</span>
					  			<h1>50%</h1>
                  			</div>
					  			<p>aman</p>
                  		</div>
                    <?php } else if ($dashboard == "bulanan"){
                        ?>
                        <div class="col-md-4 col-sm-2 box0" >
                    			<div class="box1">
  					  			<span class="">Total Distribusi</span>
  					  			<h1>93%</h1>
                    			</div>
  					  			<p>Total distribusi</p>
                    		</div>
                        <div class="col-md-4 col-sm-2 box0">
                    			<div class="box1">
  					  			<span class="">varian to last month</span>
  					  			<h1>50%</h1>
                    			</div>
  					  			<p>aman</p>
                    		</div>
                        <div class="col-md-4 col-sm-2 box0">
                    			<div class="box1">
  					  			<span class="">Presentasi achivement</span>
  					  			<h1>99%</h1>
                    			</div>
  					  			<p>aman</p>
                    		</div>
                      <?php } else if ($dashboard == "tahunan"){
                         ?>
                         <?php
                         $query = "SELECT sum(isi) as througput FROM bangsal1 where YEAR(tanggal)=YEAR(CURRENT_DATE)";
                         $result = $con->query($query);
                         $ttahunan = $result->fetch_object();
                         ?>
                         <div class="col-md-4 col-sm-2 box0" >
                     			<div class="box1">
   					  			<span class="">Total Distribusi</span>
   					  			<h1><?php echo $ttahunan->througput; ?> <span>MT</span></h1>
                     			</div>
   					  			<p>Total distribusi</p>
                     		</div>
                         <div class="col-md-4 col-sm-2 box0">
                     			<div class="box1">
   					  			<span class="">varian to last year</span>
   					  			<h1>50%</h1>
                     			</div>
   					  			<p>aman</p>
                     		</div>
                         <div class="col-md-4 col-sm-2 box0">
                     			<div class="box1">
   					  			<span class="">Presentasi achivement tahunan</span>
   					  			<h1>99%</h1>
                     			</div>
   					  			<p>aman</p>
                     		</div>
                      <?php }
                      } ?>
                  	</div><!-- /row mt -->


                      <div class="row mt" style="margin-left:0px">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-6 col-sm-4 mb">
                      		<div class="white-panel1 pn">
                      			<div class="white-header">
						  			        <h5>Througput by capacity</h5>
                      			</div>
	                      		<div class="centered">
                              <canvas id="tbc" height="49" width="120"></canvas>
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->

                        <?php if(isset($_GET['dashboard'])){
                              if($dashboard == "tahunan"){?>
                        <div class="col-md-6 col-sm-4 mb">
                      		<div class="white-panel1 pn">
                      			<div class="white-header">
						  			        <h5>Througput by capacity</h5>
                      			</div>
	                      		<div class="centered">
                              <canvas id="pie_tipe_truk" height="49" width="120"></canvas>
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      <?php }
                        }?>

                              <?php if(isset($_GET['dashboard'])){
                                    if($dashboard == "harian"){?>
                                      <div class="col-md-6 col-sm-4 mb">
                                        <div class="white-panel1 pn">
                                          <div class="white-header">
                                      <h5>Bay Performance</h5>
                                      </div>
                                      <div class="centered">
                                        <canvas id="bay" height="49" width="120"></canvas>
                                      </div>
                                    </div>
                                  </div><!-- /col-md-4 -->
                              <?php }

                                    if($dashboard == "bulanan"){?>
                                      <div class="col-md-6 col-sm-4 mb">
                                        <div class="white-panel1 pn">
                                          <div class="white-header">
                                      <h5>Bay Performance</h5>
                                      </div>
                                      <div class="centered">
                                        <canvas id="bay" height="49" width="120"></canvas>
                                      </div>
                                    </div>
                                  </div><!-- /col-md-4 -->
                              <?php }
                                }?>



                        <div class="col-md-12">
                          <div class="white-panel1 pn">
                            <div class="white-header">
                    <h5>Througput <?php echo $dashboard ?></h5>
                            </div>
                            <div class="centered" style="width: 100%;margin: 20px auto;" >
                              <canvas id="<?php echo $dashboard ?>" height="100px"></canvas>
                            </div>
                          </div>
                        </div><!-- /col-md-4 -->


                    </div><!-- /row -->
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
<?php include('layout/footerawal.php'); ?>
