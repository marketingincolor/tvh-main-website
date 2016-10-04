
<div id='FormSubmitted' style='display:none;'>
	Form Submitted Successfully
</div>
<?php
  if (isset($_REQUEST["FormSubmitted"])) {
?>
    <script>
    	document.getElementById('FormSubmitted').style.display='block';
    	setTimeout(function () {document.getElementById('FormSubmitted').style.display='none'},3000);
    </script>
<?php
  }
?>
