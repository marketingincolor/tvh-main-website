<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( '../gtm_head.php' ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Learning Center | Pinellas Care Center classes</title>
<meta name="description" content="The Villages Health Learning Center provide health and wellness classes for patients to attend throughout the year.">
<meta name="keywords" content="cholesterol class, learning center, villages health">
<meta name="robots" content="index,follow">
<link href="../tvh.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}	
.months{
	font-family:Arial, Helvetica, sans-serif;
	font-size:30px;
	line-height:40px;
	text-align:left;
	color:#5c4f3c;
}
.center{
	font-family:Arial, Helvetica, sans-serif;
	font-size:19px;
	line-height:25px;
	text-align:left;
	color:#004812;
}
.class{
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	font-weight:bold;
	color:#5c4f3c;
	text-align:left;
	line-height: 28px;
	}
.signup{
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	line-height:25px;
	text-align:center;
	color:#5c4f3c;
}
.intro{
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	color:#5c4f3c;
	text-align:left;
	line-height:28px;
}

a:link {
	color: #004712;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #054615;
}
a:hover {
	text-decoration: underline;
	color: #0CF;
}
a:active {
	text-decoration: none;
	color: #094518;
}
.red {font-family:Arial, Helvetica, sans-serif;
	font-size:22px;
	line-height:25px;
	text-align:left;
	color: #F00;
}
</style>
<script src="OpenLearningCenterForm.js"></script>
<?php 
  $care_center = "Pinellas";
?>

</head>

<body>
<?php include( '../gtm_body.php' ); ?>
<?php include '../nav.php'; ?>
<div id="homewrapper">
<div id="content"> <img src="images/learningcenter_lg.png" width="399" height="142" vspace="15" border="0" align="top" /><br />
  <?php include 'lc-nav.php'; ?>
<form method="post" name="openLearningCenterForm" target="blank" action="learning-center.php">
  <input type=hidden name="this_location" id="this_location" value="<?php echo $care_center; ?>">
  <input type=hidden name="this_class" id="this_class">
  <input type=hidden name="start_date" id="start_date">
  <input type=hidden name="start_time" id="start_time">
</form>
  
  <p class="center">PINELLAS CARE CENTER<br />
    <span class="text">2485 Pinellas Place<br />
The Villages, Florida 32163<br />
<span class="h1">352-674-1720 </span></span>  </p>
  <p class="center">Registrations must be received by 4:00 PM the day before the scheduled class.<br />
  Patients can register for classes at any Villages Health location.<br />
  To register, click on the &quot;Register&quot; link beside the appropriate class below.<br />
  To register by phone, please call 352-753-6200. </p>
  <table width="975" border="0" align="center" cellpadding="16" cellspacing="4" class="text">

    <?php
      
          $row_color = "#f9d587";
          $register_color = "#fba63f";
    include "display-class-schedule.php";
  ?>


  </table>

</div>
<?php include '../footer.php'; ?>
</div>
</body>
</html>