<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( 'gtm_head.php' ); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact The Villages Health</title>
<link href="tvh.css" rel="stylesheet" type="text/css" />
<link href="forms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}
</style>


<SCRIPT LANGUAGE="JavaScript">
function MyPopUpWin() {
var iMyWidth;
var iMyHeight;
//half the screen width minus half the new window width (plus 5 pixel borders).
iMyWidth = (window.screen.width/2) - (75 + 10);
//half the screen height minus half the new window height (plus title and status bars).
iMyHeight = (window.screen.height/2) - (100 + 50);
//Open the window.
var win2 = window.open("newparadigm.htm","Window2","status=no,height=500,width=600,resizable=yes,left=" + iMyWidth + ",top=" + iMyHeight + ",screenX=" + iMyWidth + ",screenY=" + iMyHeight + ",toolbar=no,menubar=no,scrollbars=yes,location=no,directories=no");
win2.focus();
}
</SCRIPT>

</head>

<body>
<?php include( 'gtm_body.php' ); ?>
<?php include 'nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
  <p class="text"><img src="images/contact.jpg" width="184" height="33" alt="" /></p>
  <div id="warning">
    <p class="warn"><strong>WARNING</strong>: This is not a secure web page, please <strong>DO NOT</strong> use to send any personal
    medical information.</p>
  </div>
  
  <div class="docs-care-centers" id="phones"> <img src="images/cc_phonelist.png" width="170" height="40" /><br />
    For more information<strong><br />
    352-674-1700</strong>
    <p>BELLEVIEW<br />
      <strong>352-674-1730</strong>    
    </p>
    <p>COLONY<br />
  <strong>352-674-1710</strong></p>
    <p>SANTA BARBARA<br />
    <strong>352-674-1740</strong></p>
    <p>PINELLAS<br />
    <strong>352-674-1720</strong></p>
    <p>MULBERRY GROVE<br />
    <strong>352-674-1750</strong></p>
    <p>CREEKSIDE<br />
    <strong>352-674-1760</strong></p>
    <p>SPECIALTY CARE<br />
    <strong>352-674-8700</strong></p>
  </div>

  
  <iframe id="ContactFormFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-contact-us.php" frameborder="0" style="width:500px; height:650px; border:none;" scrolling="no"></iframe>
<script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script></div>

<?php include 'footer.php'; ?>
</div>
</body>
</html>