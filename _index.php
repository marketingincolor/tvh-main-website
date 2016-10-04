<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Villages Health | The Villages, Florida</title>
<style type="text/css">
body {
	background-color: #fdfcf8;
	margin-top: 0px;
	margin-bottom: 0px;
}
#wrapper{
	margin:auto;
	width:927px;
	background-image:url(images/rosen-patient.png);
	background-position:center top;
	background-repeat:no-repeat;
	height: 700px;
}

#wrapper table tr td {
	text-align: center;
}
#login{
	margin:auto;
	width:927px;
	text-align:right;
	}
#spacer{
	margin:auto;
	width:927px;
	height:400px;
	}
#cr{
	margin:auto;
	width:927px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
	line-height:18px;
	text-align:center;
	color:#5c4f3c;
	}
</style>
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

<body onload="MM_preloadImages('images/login_btn_ro.png')">
<div id="wrapper">
<div id="login"><a href="https://mycw42.eclinicalweb.com/portal4749/jsp/login.jsp" target="_blank" onmouseover="MM_swapImage('Image4','','images/login_btn_ro.png',1)" onmouseout="MM_swapImgRestore()" ><img src="images/login_btn.png" name="Image4" width="175" height="65" border="0" id="Image4" /></a>
</div>
<div id="spacer"></div>
<table width="900" border="0" align="center">
    <tr>
      <td width="290" height="120" background="images/home-green-btn.png"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/landing-tvhcc-ro.png',1)"><img src="images/landing-tvhcc.png" name="Image1" width="213" height="57" border="0" id="Image1" /></a></td>
      <td width="290" background="images/home-green-btn.png"><a href="specialtycarecenter.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/landing-usf-ro.png',1)"><img src="images/landing-usf.png" name="Image2" width="239" height="57" border="0" id="Image2" /></a></td>
      <td width="290" background="images/home-green-btn.png"><a href="https://field.uhcmedicaresolutions.com/2014/offline/LP-1516?WT.mc_id=881806" onmouseover="MM_swapImage('Image3','','images/landing-uhc-ro.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/landing-uhc.png" name="Image3" width="211" height="57" border="0" id="Image3" /></a></td>
    </tr>
  </table>
  </div>
<div id="cr">© Holding Company of The Villages, Inc., 2013 All Rights Reserved. The Villages is a registered trademark of Holding Company of The Villages, Inc. </div>

<?php 
echo phpinfo();
?>
</body>
</html>
