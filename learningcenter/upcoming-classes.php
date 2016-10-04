<?php

  include("class-calendar.php");

  $classesToShow = 5;
  $shown = 0;
  $now = date("Y-m-d H:i", strtotime("now"));
  echo "<ul class='square'>";
  for ($i=0; $i<=count($school); $i++) {
    if ($shown >= $classesToShow) {
      break;
    }
    //echo $school[$i]["ClassTime"] . " "  . $now . "<br>";
    if ($school[$i]["ClassTime"] > $now) {
      echo "<li class='learningclasses'><b>" . $school[$i]["ClassName"] . "</b>";
      echo "<br>&emsp;<i class='small-section-content'>" . date("F jS, g:i A", strtotime($school[$i]["ClassTime"])) . "</i> </li>";  
      $shown++;
    }
  }
  echo "</ul>";
  
?>