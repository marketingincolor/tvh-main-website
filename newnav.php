<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
<script type="text/javascript" src="/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="/jquery.naviDropDown.1.0.js"></script>
<script type="text/javascript">
$(function(){
	
	$('#navigation_horiz').naviDropDown({
		dropDownWidth: '220px',
		slideDownDuration: 100, //easing duration for slideDown
		slideUpDuration: 100 //easing duration for slideUp
	});
	
	$('#navigation_vert').naviDropDown({
		dropDownWidth: '300px',
		orientation: 'vertical'

	});
});



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
</script>
<style type="text/css">

.dropdown {
	margin:0;
	padding:0;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	line-height:22px
}
.container {
	margin:0px 0px 0px 0px;
	width:1160px;
	height:70px;
	padding:10px 0 0 0;
	z-index: 10000;
}
/* ----------------------------------------------------- */
	/* navigation styles - BEGIN */ 
	
	/* style for horizontal nav */	
	#navigation_horiz {
	width:1160px;
	clear:both;
	padding:0 0 0 0;
	margin:0 auto;
}
#navigation_horiz ul {
	height:50px;
	display:block;
	padding: 0px;

}
#navigation_horiz ul li {
	display:block;
	float:left;
	width:289px;
	height:63px;
	margin:0 1px 0 0;
	position:relative;
	background-image: url(/images/menu/navbtn.png);
	background-repeat: no-repeat;
}
#navigation_horiz ul li a.navlink {
	display:block;
	width:289px;
	height:63px;
	padding:10px 0 0 0;
	text-align:center;
	color:#ddd6cb;
	text-decoration:none
}
#navigation_horiz .dropdown {
	position:absolute;
	padding:20px;
	width: 90px;
}
/* style for each drop down - horizontal */
		#navigation_horiz ul li #dropdown_one {
	background:#ccc;
	color: #fff;
}
#navigation_horiz ul li #dropdown_one a {
;
}
#navigation_horiz ul li #dropdown_two {
	background:#ccc;
}
#navigation_horiz ul li #dropdown_two a {
}
#navigation_horiz ul li #dropdown_three {
	background:#ccc;
	color:#fff
}
#navigation_horiz ul li #dropdown_three a {
}
/* navigation styles - END */ 
	/* ----------------------------------------------------- */
	
a:link {
	text-decoration: none;
	color: #5c4f3c;
}
a:visited {
	text-decoration: none;
	color: #5c4f3c;
}
a:hover {
	text-decoration: none;
	color: #093;
}
a:active {
	text-decoration: none;
	color: #5c4f3c;
}
</style>
<style type="text/css">
body {
	margin-top: 0px;
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
</head>

<body onload="MM_preloadImages('/images/home_btn_ro.png','/images/contact_btn_ro.png','/images/login_btn_ro.png','/images/map.png','/images/map_ro.png')">
<div id="nav">
<a href="http://thevillageshealth.com/">
	<?php
		if ($_SERVER["SCRIPT_NAME"] == "/learningcenter/index.php") {
			?><img src="/images/the_villages_logo.png" style="margin-bottom:-100px;" border="0"/><?php
		}
		else {
			?><img src="/images/logo.png" style="margin-bottom:-100px;" border="0"/><?php
		}
	?>
</a>
  <div id="topnav">
		<a href="/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','/images/home_btn_ro.png',1)">
			<img src="/images/home_btn.png" name="home" width="56" height="34" border="0" align="middle" id="home" />
		</a>
		<a href="/contactus.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact us','','/images/contact_btn_ro.png',1)">
			<img src="/images/contact_btn.png" name="contact us" width="97" height="34" border="0" align="middle" id="contact us" />
		</a>
		<a href="/TVHCC-locations-map-9.15.14.pdf" target="_blank" onmouseover="MM_swapImage('locations','','/images/map_ro.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="/images/map.png" alt="locations" name="locations" width="86" height="72" border="0" align="middle" id="locations" />
		</a>
		<a href="https://mycw42.eclinicalweb.com/portal4749/jsp/login.jsp"  onclick="trackOutboundLink('https://mycw42.eclinicalweb.com/portal4749/jsp/login.jsp'); return false;" target="_blank"  onmouseover="MM_swapImage('login','','/images/login_btn_ro.png',1)" onmouseout="MM_swapImgRestore()">
			<img src="/images/login_btn.png" name="login" width="175" height="65" border="0" align="top" id="login" />
		</a>
	</div>
  <div class="container">
    <div id="navigation_horiz">
      <ul>
        <li> <a href="/aboutus.php" class="navlink"><img src="/images/menu/btn_1.png" width="145" height="38" align="absmiddle" /></a>
          <div class="dropdown" id="dropdown_one"> <a href="/aboutus.php">About Us</a><br />
            <!--<a href="http://villages.health.usf.edu" target="_blank">USF Health®</a><br />-->
            <a href="/news.php">Newsroom</a><br />
            <a href="/links.php">Links</a> <br><br>
        	<a href="/careers.php">Physicians, PA, NP</a><br />
            <a href="/staffjobs.php">Staff Positions</a><br /></div>
          <!-- .dropdown_menu --> 
        </li>
        <li> <a href="/welcome.php" class="navlink"><img src="/images/menu/btn_2.png" width="106" height="38" align="absmiddle" /></a>
          <div class="dropdown" id="dropdown_two"> <a href="/welcome.php">Welcome</a>
            <p><a href="/belleviewcenter.php">Belleview Care Center</a><br />
              <a href="/colonycenter.php">Colony Care Center</a><br />
              <a href="/creeksidecenter.php">Creekside Care Center</a><br />
              <a href="/mulberrycenter.php">Mulberry Grove Care Center</a><br />
              <a href="/pinellascenter.php">Pinellas Care Center</a><br />
              <a href="/santabarbaracenter.php">Santa Barbara Care Center</a></p>
            <p> <a href="/specialtycarecenter.php">Specialty Care Center</a><br />	
	            <a href="/audiology.php">Audiology</a></p>
          </div>
          <!-- .dropdown_menu --> 
        </li>
        <li> <a href="/becomeapatient.php" class="navlink"><img src="/images/menu/btn_4.png" width="168" height="38" align="absmiddle" /></a>
          <div class="dropdown" id="dropdown_one"> <a href="/becomeapatient.php">Start the Process</a><br />
            <a href="/insurance.php">Accepted Insurance</a><br />
            <a href="/faqs.php">FAQs</a><br />
            <a href="/newpatientinformation.php">New Patient Information</a> <BR>
        	<a href="/learningcenter">The Learning Center</a>
    	  </div>
          <!-- .dropdown_menu --> 
        </li>
        <li> <a href="#" class="navheader">EXISTING PATIENTS</a>
          <div class="dropdown" id="dropdown_two"> 
          	<!-- <a href="#.php">New for Patients</a><br /> -->
            <a href="/insurance">Insurance Changes</a><br />
            <!-- <a href="/staffjobs.php">Tricare for Life</a><br /> -->
            <!-- <a href="/staffjobs.php">Patient Portal</a><br /> -->
            <!-- <a href="/staffjobs.php">TVH App</a><br /> -->
            <!-- <a href="/staffjobs.php">Telemedicine</a><br /> -->
            <!--<a href="/volunteer.php">Volunteer</a><br />-->
          </div>
          <!-- .dropdown_menu --> 
        </li>
      </ul>
    </div>
    <!-- #navigation_horiz --> 
    
  </div>
  <!-- .container --><!-- .container --> 
</div>
</body>
</html>
