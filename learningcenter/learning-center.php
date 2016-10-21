<!DOCTYPE html>
<html class="safari">
<head>
    <?php include( '../gtm_head.php' ); ?>
    <script src="../jquery-1.9.1.js"></script>
    <script src="../jquery.validity.min.js"></script>
    <link href="../jquery.validity.css" rel="stylesheet" type="text/css" />

    <script>
      $(document).ready(function () {
        
        $("#LearningCenterForm").validity(function() {
          $("#Field1").require();
          $("#Field3").require();
        });

        /*
        // untested
        $(".form-submit-button").on("click",function() {
          $(this).prop("disabled",true);
        });*/

      });
    
    	/*function SubmitForm() {
            document.getElementById("Phone").value = document.getElementById("Phone1").value + "-"document.getElementById("Phone2").value + "-"document.getElementById("Phone3").value;
            document.LearningCenterForm.submit();
        }
        */
        /*
        function getQueryVariable(variable) {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
                if (pair[0] == variable) { return pair[1]; }
            }
            return (false);
        }
       */
        //var location = "here";
        //var this_class = "hi";
        
        
        
        /*this_class = unescape(getQueryVariable("this_class"));
        this_location = unescape(getQueryVariable("this_location"));
        start_time = unescape(getQueryVariable("start_time"));
        start_date = unescape(getQueryVariable("start_date"));
        */

        this_class = '<?php echo $_REQUEST["this_class"]; ?>';	
        this_location = '<?php echo $_REQUEST["this_location"]; ?>';
        start_date = '<?php echo $_REQUEST["start_date"]; ?>';
        start_time = '<?php echo $_REQUEST["start_time"]; ?>';

		document.write("<title>"+ this_location + ", " + this_class + "</title>"); 
	</script>


<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="canonical" href="https://andreap.wufoo.com/forms/r1x67b0x09cgtpq/">
<link href="learningcenter.css" rel="stylesheet" type="text/css" /

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body id="public" class="noI" onorientationchange="window.scrollTo(0, 1)">
<?php include( '../gtm_body.php' ); ?>



<div id="container" class="ltr">
	<h1 id="logo">
				<a>Wufoo</a>
			</h1>
	
	<?php include 'forms-learning-center.php'; ?>
 

</div><!--container-->


<!-- JavaScript -->
<script src="/scripts/public/dynamic.0157.js?language=english"></script>

<script>
	__RULES = [];
	__ENTRY = [];
	__PRICES = null;

	</script>


</body>
</html>
