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
    <div id="SubmitThankYouDiv"></div>
    <img src="img/medicare-header.png"></img><br><br>
    <span style="font-family:'Levenim MT'; font-size:28px">MEDICARE ENROLLMENT</span><br><br>
    <span style="font-weight:bolder; font-size:20px">The Villages Health and Medicare Advantage team up to bring you the best in healthcare!</span><br><br>

    Thank you for your interest in becoming a patient of The Villages Health! Getting an Insurance Checkup will help you see why the level of care provided by The Villages Health is best supported by Medicare Advantage.
    <br><br>Please call <b>352-559-6004</b> or complete the simple form below, and someone from The Villages Health will call you. Thanks again!
    <br><br>

    <!--<img src="img/medicare-3ways.png"></img><br><br>-->
    <span style="font-weight:bolder; font-size:20px">Request an Insurance Checkup!</span><br><br>
    <!--<span style="font-family:Arial; font-size:12px; font-style:italic">FREE Insurance Checkups available to current Villages residents only, throughout the Medicare Enrollment period.<br><br>-->
    </span>
    
    <!--<div id="FormDiv">
      <?php //include "forms-medicare.php"; 
      ?>
    </div>-->
  
    <iframe id="ContactFormFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-medicare.php" frameborder="0" style="width:500px; height:350px; border:none;" scrolling="no"></iframe>
  </div>
</div>
<?php include '../footer.php'; ?>
</div>
</body>
</html>