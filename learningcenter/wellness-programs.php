<?php

if (!isset($wpButtonClass))
	$wpButtonClass = "WellnessProgramsButtons";
if (!isset($page))
	$page = "";
?>

  <div id="WellnessProgramsButtonsDiv">
  	<?php if ($wpButtonClass == "IndexWellnessProgramsButtons") echo "<br><br>"; ?>
	<button id="semButton" class="<?php echo $wpButtonClass; ?>" onclick="<?php echo ($page == "sem" ? "return false;\" style=\"cursor:default; background-color:#ccc;\";" : "document.location='/learningcenter/wellness-seminars.php';"); ?>"><span>Health<br>Seminars</span></button>
	<button id="hepButton" class="<?php echo $wpButtonClass; ?>" onclick="<?php echo ($page == "hep" ? "return false;\" style=\"cursor:default; background-color:#ccc;\";" : "document.location='/learningcenter/health-education-programs.php';"); ?>"><span>Health Education Programs</span></button>

	<?php if ($wpButtonClass == "IndexWellnessProgramsButtons") echo "<br><br>"; ?>
	<button id="scrButton" class="<?php echo $wpButtonClass; ?>" onclick="<?php echo ($page == "scr" ? "return false;\" style=\"cursor:default; background-color:#ccc;\";" : "document.location='/learningcenter/screenings.php';"); ?>"><span>Health<br>Screenings</span></button>
	<button id="chpButton" class="<?php echo $wpButtonClass; ?>" onclick="<?php echo ($page == "chp" ? "return false;\" style=\"cursor:default; background-color:#ccc;\";" : "document.location='/learningcenter/community-health-presentations.php';"); ?>"><span>Community Health Presentations</span></button>
  </div>
