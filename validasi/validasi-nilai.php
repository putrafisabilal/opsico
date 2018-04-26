<script src="../assets/js/jqueryvalidate/jquery.js"></script>
<script src="../assets/js/jqueryvalidate/jquery.validate.js"></script>
<script src="../assets/js/jqueryvalidate/jquery.validate.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        $("#formNilai").validate({
            rules: {
                nd: {
                  required: true,
                  minleghth: 5,
                  maxleghth: 50
                  }
                },
                messages: {
                  nd: {
                           required: "harap masukan nama anda",
                           minlength: "minimal 5 karakter",
                            maxlength: "maksimal 50 karakter"
                         }
                }
        });
      });
</script>
