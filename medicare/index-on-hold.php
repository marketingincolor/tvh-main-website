<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Medicare Contect : The Villages Health</title>
<link href="/tvh.css" rel="stylesheet" type="text/css" />
<link href="/forms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}
</style>

<script src="../jquery-1.9.1.js"></script>
    <script src="../jquery.validity.min.js"></script>
    <link href="../jquery.validity.css" rel="stylesheet" type="text/css" />

    <script>

        $(document).on("click", "#formSubmitButton", function(){
        
          //if (ValidateFields()) {
            var FormName = "Free Insurance Checkup Request";
            var myData = { "FormName" : FormName, 
                    "q4_fullName4" : $("#first_4").val(), 
                    "q5_email5" : $("#input_5").val(), 
                    "input_7_phone" : $("#input_7_phone").val(), 
                    "careCenter" : $("#careCenter").val()
                  };

            var output ="FormDiv";
                  var url = "../forms-submit.php";
                  
                  $.ajax({
                    method : 'POST',
              url : url,
              data: myData,
              dataType: "html",
              success: function(data){
                $("#"+output).html(data); 
              },
              error: function() {
                $("#"+output).html("An Error has occured!");
              }
            });
          //}
          
      });


    /*
      $(document).ready(function () {
        
        $("#contactus").validity(function() {
          $("#input_5").require().match("email");
          $("#first_4").require();
          $("#input_7_phone").require()
          $("#careCenter").require("Care Center is required.");
        });
*/
        /*$(".validity-tooltip-outer").on("click",function() {
            console.log("tooltip clicked outer");
        });
        $(".validity-tooltip-inner").on("click",function() {
            console.log("tooltip clicked inner");
        });
*/
/*          $(".form-submit-button").on("click",function() {
            $(this).prop("disabled",true);
          });
  */      
        

      //});
    </script>


</head>

<body>
<?php include '../nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
  <div id="smnav"><?php include '../navmin.php'; ?></div>
  <div style="width:600px">
    
    <span style="font-weight:bolder; font-size:24px">Thanks for your interest in the Villages Health and Medicare Advantage!</span><br><br>

    This web page is currently unavailable.
    <br>Please check back later, or you may call <b>352-559-6004</b>.
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    
    <!--<iframe id="ContactFormFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-medicare.php" frameborder="0" style="width:500px; height:350px; border:none;" scrolling="no"></iframe>-->
  </div>
</div>
<?php include '../footer.php'; ?>
</div>
</body>
</html>