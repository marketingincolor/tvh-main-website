<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Become a patient | The Villages Health</title>
<meta name="description" content="Become a patient of The Villages Health by requesting a New Patient Form packet.">
<meta name="keywords" content="become a patient, new patient forms>
<meta name="robots" content="index,follow">
<link href="tvh.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #fdfcf8;
}
</style>
<link href="forms.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include 'nav.php'; ?>
<div id="homewrapper">
<div class="text" id="content">
<?php include 'navmin.php'; ?>
<img src="images/become_patient.jpg" width="610" height="330" />
<p class="text">
<p class="text">&nbsp;</p>
<p class="text"><img src="images/becomepatient_tag.png" width="418" height="33" alt="care centers" /></p>
<blockquote>
  <p><span class="h1">Thank you for your interest in becoming a patient of The Villages Health Care Centers.</span></p>
  <p>    You may begin the process by calling <strong>352-674-1700 </strong>between 9:00am and 5:00pm or submitting your information using the form below.</p>
  <p>We look forward to meeting you and getting you started on a long and healthy relationship with your Villages Health Care Center medical family!</p>
  <iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-new-patient.php" frameborder="0" style="width:450px; height:1100px; border:none;" scrolling="no"></iframe>
 <?php 
 //include 'forms-new-patient.php'; 
 ?>
<script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script>
  <p>
    <script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script>
  </p>
</blockquote>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>