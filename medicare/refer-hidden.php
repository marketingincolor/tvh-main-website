<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( '../gtm_head.php' ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Medicare Contect : The Villages Health</title>
<link href="/tvh.css" rel="stylesheet" type="text/css" />
<link href="/forms.css" rel="stylesheet" type="text/css" />

    <script src="../jquery-1.9.1.js"></script>
    <!--<script src="../jquery.validity.min.js"></script>-->
    <!--<link href="../jquery.validity.css" rel="stylesheet" type="text/css" />-->
    <!--<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>-->


<style type="text/css">
body {
	background-color: #fdfcf8;
}
</style>

<script type="text/javascript">


		$(document).on("click", "#formSubmitButton", function(){
				
			//if (ValidateFields()) {
				var FormName = "MedicareReferred";
				var myData = { "FormName" : FormName, 
								"referrerName" : $("#referrerName").val(), 
								"referrerEmail" : $("#referrerEmail").val(), 
								"referredName" : $("#referredName").val(), 
								"referredEmail" : $("#referredEmail").val(), 
								"OptionalMessage"  : $("#OptionalMessage").val()
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


function ValidateFields() {

/*
	$.validity.start();

	  $("#referrerName").require();
      $("#referrerEmail").require().match("email");
      $("#referredName").require();
      $("#referredEmail").require().match("email");
    
    var result = $.validity.end();

    return result.valid;
  */

/*
  $("#referForm").validate({

  		rules: {
  			referrerName: { required: true }
  		},
  		submitHandler: function (form) {
  			alert("valid form submitted");
  			return false;
  		}
  });
*/
}

</script>

</head>

<body>
<?php include( '../gtm_body.php' ); ?>
<?php include '../nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
  <div id="smnav"><?php include '../navmin.php'; ?></div>
  <div style="width:600px">
  	<img src="img/medicare-refer-header.jpg"></img><br><br>
    <span style="font-family:'Levenim MT'; font-size:28px">REFER A FRIEND!</span><br><br>

    <span style="font-weight:bold; font-size:larger">Do you know of any Villagers who may be interested in learning more about The Villages Health and Medicare Advantage?</span><br><br>

    <span style="font-family:Arial; font-style:italic;">Simply fill out and send the form below.  Your friend will receive an email with <u><a href="index.php" target="_newwindow">a link to this page to get more information.</a></u><br><br></span>

	<div id="warning" style="width:590px;">
		<p class="warn"><strong>WARNING</strong>: Please do not include any personal medical information about yourself or those you are referring. </p>  
	</div>

	<div id="spacer"></div>
	<div id="FormDiv">
		<?php include "forms-refer.php"; ?>
	</div>
	<div id="spacer"></div>
	<!--<iframe name="ContactFormFrame" id="ContactFormFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-refer.php" frameborder="0" style="width:650px; height:400px; border:none;" scrolling="no"></iframe>-->
	
<script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script>



</div>

<?php include '../footer.php'; ?>
</div>
</body>
</html>