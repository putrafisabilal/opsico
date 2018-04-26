/*global $, document, LINECHARTEXMPLE*/
$(document).ready(function () {
        var brandPrimary = 'rgba(51, 179, 90, 1)';
    //data tahunan
    $.ajax({
      url: "http://localhost/opsico4/functions/datatahunan.php",
      method: "GET",
      success: function(data) {
        var tanggal = [];
        var througput = [];

        for(var i in data) {
          tanggal.push(data[i].tanggal);
          througput.push(data[i].througput);
        }

        var chartdata = {
          labels: tanggal,
          datasets : [
            {
              label: 'Througput',
              backgroundColor: 'rgba(200, 200, 200, 0.75)',
              data: througput
            }
          ]
        };

        var ctx = $("#tahunan");

        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });

        // function update(){
        //     $.getJSON("http://localhost/opsico4/functions/datatahunan.php",function(data){
        //       var labeltanggalupdate = [];
        //       var labelthrougputupdate = [];
        //       for(var i in data) {
        //         labeltanggalupdate.push(data[i].tanggal);
        //         labelthrougputupdate.push(data[i].througput);
        //       }
        //       barGraph.data.datasets[0].data = labelthrougputupdate;
        //       barGraph.data.labels = labeltanggalupdate;
        //       barGraph.update();
        //     });
        // }

        // setInterval(function(){update()},3000);

      },
      error: function(data) {
      }
    });

    //data bulanan
        $.ajax({
          url: "http://localhost/opsico4/functions/databulanan.php",
          method: "GET",
          success: function(data) {
            var tanggal = [];
            var througput = [];

            for(var i in data) {
              tanggal.push(data[i].tanggal);
              througput.push(data[i].througput);
            }

            var chartdata = {
              labels: tanggal,
              datasets : [
                {
                  label: 'Througput',
                  backgroundColor: 'rgba(200, 200, 200, 0.75)',
                  data: througput
                }
              ]
            };

            var ctx = $("#bulanan");

            var barGraph = new Chart(ctx, {
              type: 'bar',
              data: chartdata
            });

            // function update(){
            //     $.getJSON("http://localhost/opsico4/functions/databulanan.php",function(data){
            //       var labeltanggalupdate = [];
            //       var labelthrougputupdate = [];
            //       for(var i in data) {
            //         labeltanggalupdate.push(data[i].tanggal);
            //         labelthrougputupdate.push(data[i].througput);
            //       }
            //       barGraph.data.datasets[0].data = labelthrougputupdate;
            //       barGraph.data.labels = labeltanggalupdate;
            //       barGraph.update();
            //     });
            // }

            // setInterval(function(){update()},3000);

          },
          error: function(data) {
            // console.log(data);
          }
        });

        //data harian
            $.ajax({
              url: "http://localhost/opsico4/functions/dataharian.php",
              method: "GET",
              success: function(data) {
                var tanggal = [];
                var througput = [];

                for(var i in data) {
                  tanggal.push(data[i].tanggal);
                  througput.push(data[i].througput);
                }

                var chartdata = {
                  labels: tanggal,
                  datasets : [
                    {
                      label: 'Througput',
                      backgroundColor: 'rgba(200, 200, 200, 0.75)',
                      data: througput
                    }
                  ]
                };

                var ctx = $("#harian");

                var barGraph = new Chart(ctx, {
                  type: 'bar',
                  data: chartdata
                });

                // function update(){
                //     $.getJSON("http://localhost/opsico4/functions/dataharian.php",function(data){
                //       var labeltanggalupdate = [];
                //       var labelthrougputupdate = [];
                //       for(var i in data) {
                //         labeltanggalupdate.push(data[i].tanggal);
                //         labelthrougputupdate.push(data[i].througput);
                //       }
                //       barGraph.data.datasets[0].data = labelthrougputupdate;
                //       barGraph.data.labels = labeltanggalupdate;
                //       barGraph.update();
                //     });
                // }

                // setInterval(function(){update()},3000);

              },
              error: function(data) {
                // console.log(data);
              }
            });


            //bay performance
                $.ajax({
                  url: "http://localhost/opsico4/functions/bay_performance.php",
                  method: "GET",
                  success: function(data) {
                    var bangsal = [];
                    var througput = [];

                    for(var i in data) {
                      bangsal.push(data[i].bangsal);
                      througput.push(data[i].througput);
                    }

                    var chartdata = {
                      labels: bangsal,
                      datasets : [
                        {
                          label: 'througput',
                          backgroundColor: 'rgba(200, 200, 200, 0.75)',
                          data: througput
                        }
                      ]
                    };

                    var ctx = $("#bay");

                    var barGraph = new Chart(ctx, {
                      type: 'bar',
                      data: chartdata
                    });

                    // function update(){
                    //     $.getJSON("http://localhost/opsico4/functions/bay_performance.php",function(data){
                    //       var labelbayupdate = [];
                    //       var labelthrougputupdate = [];
                    //       for(var i in data) {
                    //         labelbayupdate.push(data[i].bangsal);
                    //         labelthrougputupdate.push(data[i].througput);
                    //       }
                    //       barGraph.data.datasets[0].data = labelthrougputupdate;
                    //       barGraph.data.labels = labelbayupdate;
                    //       barGraph.update();
                    //     });
                    // }
                    //
                    // setInterval(function(){update()},3000);

                  },
                  error: function(data) {
                    // console.log(data);
                  }
                });

                //througput by capacity
                    $.ajax({
                      url: "http://localhost/opsico4/functions/througput_bycapacity.php",
                      method: "GET",
                      success: function(data) {
                        var kapasitas = [];
                        var jumlah = [];

                        for(var i in data) {
                          kapasitas.push(data[i].kapasitas);
                          jumlah.push(data[i].jumlah);
                        }

                        var chartdata = {
                          labels: kapasitas,
                          datasets : [
                            {
                              label: 'jumlah',
                              backgroundColor: 'rgba(200, 200, 200, 0.75)',
                              data: jumlah
                            }
                          ]
                        };

                        var ctx = $("#tbc");

                        var barGraph = new Chart(ctx, {
                          type: 'bar',
                          data: chartdata
                        });

                        // function update(){
                        //     $.getJSON("http://localhost/opsico4/functions/througput_bycapacity.php",function(data){
                        //       var labelkapupdate = [];
                        //       var labeljumupdate = [];
                        //       for(var i in data) {
                        //         labelkapupdate.push(data[i].kapasitas);
                        //         labeljumupdate.push(data[i].jumlah);
                        //       }
                        //       barGraph.data.datasets[0].data = labeljumupdate;
                        //       barGraph.data.labels = labelkapupdate;
                        //       barGraph.update();
                        //     });
                        // }
                        //
                        // setInterval(function(){update()},3000);

                      },
                      error: function(data) {
                        // console.log(data);
                      }
                    });
                    //by type
                    $.ajax({
                      url: "http://localhost/opsico4/functions/througput_bytype.php",
                      method: "GET",
                      success : function(data){
                        var tipe_truk = [];
                        var jumlah_truk = [];
                        for(var i in data) {
                          tipe_truk.push(data[i].type);
                          jumlah_truk.push(data[i].jumlah_truk);
                        }


                        var piedata = {
                          labels: tipe_truk,
                          datasets : [
                            {
                              data: jumlah_truk,
                              borderWidth: [1, 1],
                              backgroundColor: [
                                  brandPrimary,
                                  "rgba(75,192,192,1)"
                              ],
                              hoverBackgroundColor: [
                                  brandPrimary,
                                  "rgba(75,192,192,1)"
                              ]
                            }]
                        };

                        var ctx = $("#pie_tipe_truk");
                        var PieGraph = new Chart(ctx, {
                          type: 'doughnut',
                          data: piedata
                        });

                        // function update(){
                        //     $.getJSON("http://localhost/opsico4/functions/througput_bytype.php",function(data){
                        //       var tipe_truk = [];
                        //       var jumlah_truk = [];
                        //       for(var i in data) {
                        //         tipe_truk.push(data[i].type);
                        //         jumlah_truk.push(data[i].jumlah);
                        //       }
                        //
                        //       PieGraph.data.datasets[0].data = jumlah_truk;
                        //       PieGraph.data.labels = tipe_truk;
                        //       PieGraph.update();
                        //     });
                        // }
                        //
                        // setInterval(function(){update()},3000);
                      },
                      error: function(data) {
                        // console.log(data);
                      }
                    })
  //   $('#jk').on('change',function(){
  //   var select_data = $(this).val();
  //   $.ajax({
  //     url: "http://localhost/opsico4/functions/data.php?bulan="+select_data,
  //     method: "GET",
  //     success: function(data) {
  //       console.log(data);
  //       var tanggal = [];
  //       var througput = [];
  //
  //       for(var i in data) {
  //         tanggal.push(data[i].tanggal);
  //         througput.push(data[i].througput);
  //       }
  //
  //
  //
  //       var chartdata = {
  //         labels: tanggal,
  //         datasets : [
  //           {
  //             label: 'Througput',
  //             backgroundColor: 'rgba(200, 200, 200, 0.75)',
  //             data: througput
  //           }
  //         ]
  //       };
  //
  //       var ctx = $("#mycanvas");
  //
  //       var barGraph = new Chart(ctx, {
  //         type: 'bar',
  //         data: chartdata
  //       });
  //
  //       function update(){
  //           $.getJSON("http://localhost/opsico4/functions/data.php?bulan="+data,function(data){
  //             var labeltanggalupdate = [];
  //             var labelthrougputupdate = [];
  //             for(var i in data) {
  //               labeltanggalupdate.push(data[i].tanggal);
  //               labelthrougputupdate.push(data[i].througput);
  //             }
  //             barGraph.data.datasets[0].data = labelthrougputupdate;
  //             barGraph.data.labels = labeltanggalupdate;
  //             barGraph.update();
  //           });
  //       }
  //
  //       // setInterval(function(){update()},3000);
  //
  //     },
  //     error: function(data) {
  //       console.log(data);
  //     }
  //   });
  //
  //
  //
  // }).change();




      //
      // var LINECHARTEXMPLE   = $('#lineChartExample'),
      //     PIECHARTEXMPLE    = $('#pieChartExample'),
      //     BARCHARTEXMPLE    = $('#barChartExample'),
      //     RADARCHARTEXMPLE  = $('#radarChartExample'),
      //     POLARCHARTEXMPLE  = $('#polarChartExample');
      //
      //
      // var lineChartExample = new Chart(LINECHARTEXMPLE, {
      //     type: 'line',
      //     data: {
      //         labels: ["January", "February", "March", "April", "May", "June", "July"],
      //         datasets: [
      //             {
      //                 label: "Data Set One",
      //                 fill: true,
      //                 lineTension: 0.3,
      //                 backgroundColor: "rgba(51, 179, 90, 0.38)",
      //                 borderColor: brandPrimary,
      //                 borderCapStyle: 'butt',
      //                 borderDash: [],
      //                 borderDashOffset: 0.0,
      //                 borderJoinStyle: 'miter',
      //                 borderWidth: 1,
      //                 pointBorderColor: brandPrimary,
      //                 pointBackgroundColor: "#fff",
      //                 pointBorderWidth: 1,
      //                 pointHoverRadius: 5,
      //                 pointHoverBackgroundColor: brandPrimary,
      //                 pointHoverBorderColor: "rgba(220,220,220,1)",
      //                 pointHoverBorderWidth: 2,
      //                 pointRadius: 1,
      //                 pointHitRadius: 10,
      //                 data: [50, 20, 40, 31, 32, 22, 10],
      //                 spanGaps: false
      //             },
      //             {
      //                 label: "Data Set Two",
      //                 fill: true,
      //                 lineTension: 0.3,
      //                 backgroundColor: "rgba(75,192,192,0.4)",
      //                 borderColor: "rgba(75,192,192,1)",
      //                 borderCapStyle: 'butt',
      //                 borderDash: [],
      //                 borderDashOffset: 0.0,
      //                 borderJoinStyle: 'miter',
      //                 borderWidth: 1,
      //                 pointBorderColor: "rgba(75,192,192,1)",
      //                 pointBackgroundColor: "#fff",
      //                 pointBorderWidth: 1,
      //                 pointHoverRadius: 5,
      //                 pointHoverBackgroundColor: "rgba(75,192,192,1)",
      //                 pointHoverBorderColor: "rgba(220,220,220,1)",
      //                 pointHoverBorderWidth: 2,
      //                 pointRadius: 1,
      //                 pointHitRadius: 10,
      //                 data: [65, 59, 30, 81, 56, 55, 40],
      //                 spanGaps: false
      //             }
      //         ]
      //     }
      // });
      //
      // var pieChartExample = new Chart(PIECHARTEXMPLE, {
      //     type: 'doughnut',
      //     data: {
      //         labels: [
      //             "First",
      //             "Second",
      //             "Third"
      //         ],
      //         datasets: [
      //             {
      //                 data: [300, 50, 100],
      //                 borderWidth: [1, 1, 1],
      //                 backgroundColor: [
      //                     brandPrimary,
      //                     "rgba(75,192,192,1)",
      //                     "#FFCE56"
      //                 ],
      //                 hoverBackgroundColor: [
      //                     brandPrimary,
      //                     "rgba(75,192,192,1)",
      //                     "#FFCE56"
      //                 ]
      //             }]
      //         }
      // });
      //
      // var pieChartExample = {
      //     responsive: true
      // };
      //
      // var barChartExample = new Chart(BARCHARTEXMPLE, {
      //     type: 'bar',
      //     data: {
      //         labels: ["January", "February", "March", "April", "May", "June", "July"],
      //         datasets: [
      //             {
      //                 label: "Throughput",
      //                 backgroundColor: [
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)',
      //                     'rgba(51, 179, 90, 0.6)'
      //                 ],
      //                 borderColor: [
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)',
      //                     'rgba(51, 179, 90, 1)'
      //                 ],
      //                 borderWidth: 1,
      //                 data: [65, 59, 80, 81, 56, 55, 40],
      //             },
      //             {
      //                 label: "Alokasi",
      //                 backgroundColor: [
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)',
      //                     'rgba(203, 203, 203, 0.6)'
      //                 ],
      //                 borderColor: [
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)',
      //                     'rgba(203, 203, 203, 1)'
      //                 ],
      //                 borderWidth: 1,
      //                 data: [35, 40, 60, 47, 88, 27, 30],
      //             }
      //         ]
      //     }
      // });
      //
      //
      //
      // var polarChartExample = new Chart(POLARCHARTEXMPLE, {
      //     type: 'polarArea',
      //     data: {
      //         datasets: [{
      //             data: [
      //                 11,
      //                 16,
      //                 7
      //             ],
      //             backgroundColor: [
      //                 "rgba(51, 179, 90, 1)",
      //                 "#FF6384",
      //                 "#FFCE56"
      //             ],
      //             label: 'My dataset' // for legend
      //         }],
      //         labels: [
      //             "First",
      //             "Second",
      //             "Third"
      //         ]
      //     }
      // });
      //
      // var polarChartExample = {
      //     responsive: true
      // };
      //
      //
      // var radarChartExample = new Chart(RADARCHARTEXMPLE, {
      //     type: 'radar',
      //     data: {
      //         labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling"],
      //         datasets: [
      //             {
      //                 label: "My First dataset",
      //                 backgroundColor: "rgba(179,181,198,0.2)",
      //                 borderWidth: 2,
      //                 borderColor: "rgba(179,181,198,1)",
      //                 pointBackgroundColor: "rgba(179,181,198,1)",
      //                 pointBorderColor: "#fff",
      //                 pointHoverBackgroundColor: "#fff",
      //                 pointHoverBorderColor: "rgba(179,181,198,1)",
      //                 data: [65, 59, 90, 81, 56, 55]
      //             },
      //             {
      //                 label: "My Second dataset",
      //                 backgroundColor: "rgba(51, 179, 90, 0.2)",
      //                 borderWidth: 2,
      //                 borderColor: "rgba(51, 179, 90, 1)",
      //                 pointBackgroundColor: "rgba(51, 179, 90, 1)",
      //                 pointBorderColor: "#fff",
      //                 pointHoverBackgroundColor: "#fff",
      //                 pointHoverBorderColor: "rgba(51, 179, 90, 1)",
      //                 data: [28, 48, 40, 19, 96, 27]
      //             }
      //         ]
      //     }
      // });
      // var radarChartExample = {
      //     responsive: true
      // };
      //


});
