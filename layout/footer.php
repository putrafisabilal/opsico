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
<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<!-- <script src="../assets/js/jquery-3.3.1.min.js"></script> -->
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../assets/js/jquery.sparkline.js"></script>
<!-- jquery validate -->
<!-- <script src="../assets/js/jqueryvalidate/jquery.js"></script> -->
<!-- <script src="../assets/js/jqueryvalidate/jquery.validate.js"></script> -->


<!--common script for all pages-->
<script src="../assets/js/common-scripts.js"></script>

<script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
<script src="../assets/js/Chart.min.js"></script>
<script src="../assets/js/charts-custom.js"></script>
<script src="../assets/js/charts-home.js"></script>

<!-- fancy box -->
<!-- <script src="../assets/js/jquery.js"></script> -->
<script src="../assets/js/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(function() {
      //    fancybox
        jQuery(".fancybox").fancybox();
    });
</script>

<!--script for this page-->
<script src="../assets/js/sparkline-chart.js"></script>
<script src="../assets/js/zabuto_calendar.js"></script>


<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
       function printData()
       {
          var divToPrint=document.getElementById("printableTable");
          newWin= window.open("");
          newWin.document.write(divToPrint.outerHTML);
          newWin.print();
          newWin.close();
       }
</script>


</body>
</html>
