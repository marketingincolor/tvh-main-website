<?php 
  include_once("includes/drs.php"); 

  $DrId = 0;
  if (isset($_REQUEST["DrId"]))
    $DrId = $_REQUEST["DrId"];
  $doctors_fullname = $doctors[$DrId]["Firstname"] . " " . $doctors[$DrId]["Lastname"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $doctors_fullname; ?> | <?php echo $doctors[$DrId]["CareCenter"]; ?> Care Center</title>
<meta name="description" content="Doctor <?php echo $doctors_fullname; ?> practices at The Villages Health Care Center at <?php echo $doctors[$DrId]["CareCenter"]; ?>.">
<meta name="keywords" content="Doctor <?php echo $doctors[$DrId]["Lastname"] . ', ' . $doctors[$DrId]["CareCenter"]; ?> Care Center, Health care in The Villages">
<meta name="robots" content="index,follow">
<link href="tvh.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}
#smnav{
	float:right;
	padding: 20px 0px 0px 0px;
	width:240px;
}
.docnames{
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	color:#004812;
	text-align:left;
	font-weight:bold;
	letter-spacing:0.6px;
}
.quote{
	font-family:"Times New Roman", Times, serif;
	font-size:19px;
	color:#5c4f3c;
	text-align:left;
	line-height: 25px;
	}
	.dir{
	font-family:"Times New Roman", Times, serif;
	font-size:16px;
	color:#004812;
	text-align:left;
	line-height: 22px;
	font-style:italic;
}
</style>

<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=750,width=1250,resizable=yes,scrollbars=no');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31120753-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<?php include 'nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
<img src="images/<?php echo $CareCenterInfo[$doctors[$DrId]["CareCenter"]]["image"]; ?>" width="730" height="309" />
<div id="smnav"><?php include 'navmin.php'; ?>
</div>
</div>

<div id="centerwrap">
<img src="images/a-spacer.jpg" width="900" height="50" />
<table width="920" border="0" cellpadding="9">
      <tr>
        <td width="153" height="402" valign="top"><img src="images/<?php echo $doctors[$DrId]["Image"]; ?>" width="132" height="184" /></td>
        <td width="333" valign="top" class="text"><span class="docnames"><?php echo $doctors_fullname . ", " . $doctors[$DrId]["Title"]; ?><br />
        </span><span class="dir"><?php echo $doctors[$DrId]["JobTitle"]; ?></span></p>
  <p class="bio"><strong>Undergraduate School</strong><br />
    <?php echo $doctors[$DrId]["Undergrad"]; ?> <br />
    <?php echo $doctors[$DrId]["UndergradLocation"]; ?></p>
  <p class="bio"><strong>Medical School</strong><br />
    <?php echo $doctors[$DrId]["MedSchool"]; ?> <br />
    <?php echo $doctors[$DrId]["MedSchoolLocation"]; ?></p>
  <p class="bio"><strong>Internship/Residency </strong><br />
    <?php echo $doctors[$DrId]["Intern"]; ?><br />
    <?php echo $doctors[$DrId]["InternLocation"]; ?></p>
  <p class="bio"><strong>Board Certified</strong><br />
    <?php echo $doctors[$DrId]["BoardCertified"]; ?></p>
 </td>
		 <td width="372" valign="top" class="text"><hr color="#004712" style="height:2px;"> <p class="quote"><?php echo $doctors[$DrId]["Quote"]; ?></p>
<hr color="#004712" style="height:2px;" />
  <?php 
    if ($doctors[$DrId]["Video"] != "none") 
    {
  ?>
      <iframe width="368" height="276" src="//www.youtube.com/embed/<?php echo $doctors[$DrId]["Video"]; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
  <?php 
    }
  ?>
      </td>
      </tr>
  </table>
	<!--<img src="images/a-spacer.jpg" width="900" height="50" />
    <table width="920" border="0">
  <tr>
    <td width="600"><img src="images/teams/team_0016_Rosenblum.jpg" width="600" height="300" /></td>
    <td width="310" ><ol>
      <li class="text"><strong>Kelly Wellman</strong><br />
        <em>LPN</em></li>
      <li class="text"><strong>Donna Dugas</strong><br />
        <em>LPN</em></li>
      <li class="text"><strong>Connie Henderon</strong><br />
        <em>LPN</em></li>
      <li class="text"><strong>Riddhi Patel</strong><br />
        <em>PA</em></li>
    </ol></td>
  </tr>
</table>-->
  <?php
    include($CareCenterInfo[$doctors[$DrId]["CareCenter"]]["info_and_map"]);
  ?>

<div id="mapspacer"> </div>

</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>