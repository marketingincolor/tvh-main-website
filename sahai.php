<?php
	$carecenter = array('Name' => 'Mulberry Grove', 
						'Short' => 'mulberry');
	$doctor = array('Lastname' => 'Sahai', 
					'Firstname' => 'Lisa',
					'NameTitle' => 'Lisa R. Sahai, M.D.',
					'PhotoName' => 'SahaiLisa',
					'Undergrad' => 'The American University<br>Washington, DC',
					'Medical' => 'American University of The Caribbean<br>Saint Maarten, Netherland Antilles',
					'Intern' => 'Kingston Hospital<br>Kingston, NY',
					'Board' => 'American Board of Family Medicine',
					'Quote' => 'I feel obligated to inform and educate my patients so they can make patient guided informed health care decisions to add "life to years versus years to life".'
					)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( 'gtm_head.php' ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lisa R. Sahai | <?php echo $carecenter['Name']; ?> Care Center</title>
<meta name="description" content="Doctor <?php echo $doctor['Firstname'] . ' ' . $doctor['Lastname']; ?> at The Villages Health <?php echo $carecenter['Name']; ?> Care Center.">
<meta name="keywords" content="Doctor <?php echo $doctor['Lastname']; ?>, <?php echo $carecenter['Name']; ?> Care Center, Health care in The Villages">
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
<?php include( 'gtm_body.php' ); ?>
<?php include 'nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
<img src="images/cc_bldg_<?php echo $carecenter['Short']; ?>.jpg" width="730" height="309" />
<div id="smnav"><?php include 'navmin.php'; ?>
</div>
</div>

<div id="centerwrap">
<img src="images/a-spacer.jpg" width="900" height="50" />
<table width="920" border="0" cellpadding="9">
      <tr>
        <td width="153" height="402" valign="top"><img src="images/smdocs/<?php echo $doctor['PhotoName']; ?>.jpg" width="132" height="184" /></td>
        <td width="333" valign="top" class="text"><span class="docnames"><?php echo $doctor['NameTitle']; ?><br />
        </span></p>
 <p> <span class="bio"><strong>Undergraduate School</strong><br />
  <?php echo $doctor['Undergrad']; ?></span></p>
<p class="bio"> <strong>Medical School</strong><br />
  <?php echo $doctor['Medical']; ?></p>
<p class="bio"><strong>Internship/Residency</strong><br />
  <?php echo $doctor['Intern']; ?></p>
<p class="bio"><strong>Board Certified</strong><br />
  <?php echo $doctor['Board']; ?></p>
 </td>
		 <td width="372" valign="top" class="text"><hr color="#004712" style="height:2px;"> <p class="quote"><em>&quot;<?php echo $doctor['Quote']; ?>&quot; </em><em><br />
<span class="text">-- Dr. <?php echo $doctor['Lastname']; ?></span></em></p>
   
      </td>
      </tr>
  </table>
	
  <?php include_once("includes/".$carecenter['Short']."_info_and_map.php"); ?>

  <div id="mapspacer"></div>

</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>