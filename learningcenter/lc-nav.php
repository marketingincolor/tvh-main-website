<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
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
</head>

<body onload="MM_preloadImages('images/cc-col-btn-ro.png','images/cc-sb-btn-ro.png','images/cc-pin-btn-ro.png','images/cc-mul-btn-ro.png','images/cc-creek-btn-ro.png')">
<table width="970" border="0" cellspacing="5">
  <tr>
    <td width="189"><a href="colonyschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/cc-col-btn-ro.png',1)"><img src="images/cc-col-btn.png" name="Image1" width="189" height="94" border="0" id="Image1" /></a></td>
    <td width="189"><a href="sbschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/cc-sb-btn-ro.png',1)"><img src="images/cc-sb-btn.png" name="Image2" width="189" height="94" border="0" id="Image2" /></a></td>
    <td width="189"><a href="pinellasschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/cc-pin-btn-ro.png',1)"><img src="images/cc-pin-btn.png" name="Image3" width="189" height="94" border="0" id="Image3" /></a></td>
    <td width="189"><a href="mulberryschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/cc-mul-btn-ro.png',1)"><img src="images/cc-mul-btn.png" name="Image4" width="189" height="94" border="0" id="Image4" /></a></td>
    <td width="189"><a href="creeksideschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/cc-creek-btn-ro.png',1)"><img src="images/cc-creek-btn.png" name="Image5" width="189" height="94" border="0" id="Image5" /></a></td>
    <!--<td width="189"><a href="belleviewschedule.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/cc-belle-btn-ro.png',1)"><img src="images/cc-belle-btn.png" name="Image6" width="189" height="94" border="0" id="Image6" /></a></td>-->
  </tr>
</table>
</body>
</html>