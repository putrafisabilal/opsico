<script type="text/javascript">
// $().ready(function() {
//   $("#formNilai").validate({
//       rules: {
//           nd: {
//             required: true,
//             minleghth: 5,
//             maxleghth: 50
//             }
//           },
//           messages: {
//             nd: {
//                      required: "harap masukan nama anda",
//                      minlength: "minimal 5 karakter",
//                       maxlength: "maksimal 50 karakter"
//                    }
//           }
//   });
// });
function validateForm() {
    // var x = document.forms["formNilai"]["np"].value;
    // if (x == "") {
    //     alert("Name must be filled out");
    //     return false;
    // }

    // var y, text;
    //
    // // Get the value of the input field with id="numb"
    // y = document.getElementById("ke").value;
    var y = document.forms["formNilai"]["ke"].value;
    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 4) {
        text = "tidak tepat";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
