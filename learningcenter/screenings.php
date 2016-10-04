<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Learning Center | The Villages Health</title>
<meta name="description" content="The Villages Health Learning Center provides health and wellness classes for patients to attend throughout the year.">
<meta name="keywords" content="stress management class, cholesterol class, learning center, villages health">
<meta name="robots" content="index,follow">
<link href="../tvh.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function SortByClassName() {
	document.getElementById('ClassByClassName').style.display = "block";
	document.getElementById('ClassByLocation').style.display = "none";
}
function SortByLocation() {
	document.getElementById('ClassByLocation').style.display = "block";
	document.getElementById('ClassByClassName').style.display = "none";
}
</script>
</head>

<body>
<?php include '../nav.php'; ?>
<div id="homewrapper">
	<div id="content">	
		<?php 
			$page = "scr";
			include "learning-center-summary.php"; 
		?>
  		<p><img src="images/line.png" width="980" height="30" /></p>
		<div style='width:980px;'>
			<ul class='square'>
		        <li class='learningclasses'><b>Memory screenings</b>:<br>
		        	&emsp;Whether you have concerns about your memory or are just looking to establish a baseline, sign up for a free, confidential memory 
		        	screening with a certified registered nurse. The Villages Health is proud to partner with the USF Health Byrd Alzheimer's Institute to 
		        	provide these screenings in the community.
		        	<br><br>
		        	&emsp;Please call 352-753-6214 or email <a mailto="Amy.Wixted@thevillageshealth.com">Amy.Wixted@thevillageshealth.com</a> to schedule a memory screening appointment
		        	</li>
            		<?php
            			$ClassDate = date('F j', strtotime($health[$i]["ClassTime"])); 
	              		$ClassStart = date('g:i a', strtotime($health[$i]["ClassTime"]));
	              		$this_ClassRegisterLink = "<a href='learning-center.php?this_class=Memory%20Screenings'";
	              		$this_ClassRegisterLink .= " onclick='window.open(this.href,  null, 'height=520, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false'>REGISTER</a><br>";            
	            		//echo "&emsp;" . $this_ClassRegisterLink;
            		?>

        		<br><br>
				<li class='learningclasses'><b>Body Composition Analysis screenings</b>:<br>
					&emsp;You can learn your weight, body mass index, body fat percentage, basal metabolic rate, fat mass, total body water mass, and 
					hydration level. Participants receive a print out of their results and a review sheet. The Body Composition Analysis Screening uses 
					bioelectric impedance in its analysis, so we are not able to allow those with pacemakers or other internally implanted electrical 
					devices to participate.
					<br><br>
					&emsp;WALK-IN SCREENING TIMES
            		<?php 
            			include "screenings-data.php"; 
            			$today = date('Y-m-d');
            			for ($i=0; $i<count($screenings); $i++) {
            				$class_month_number = date('Y-m-d',strtotime($screenings[$i]["ClassTime"]));
            				if ($class_month_number >= $today) {
            					echo "<br>&emsp;" . date('l, F j', strtotime($screenings[$i]["ClassTime"])) . ' from ' . date('g:i', strtotime($screenings[$i]["ClassTime"])) . ' - ' . date('g:i A', strtotime($screenings[$i]["ClassEnd"]));
            					echo " at " . $screenings[$i]["CareCenter"];
            				}
            			}
						  

            		?>
	        		</li>
	        		<br><br>					
			</ul>
		</div>
	</div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php include '../footer.php'; ?>

</div>
<?php include "../form-submit-successful.php"; ?>
</body>
</html>