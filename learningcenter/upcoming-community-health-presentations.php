<?php

        $shown = 0;
        $now = date("Y-m-d H:i", strtotime("now"));
        echo "<ul class='square'>";
        for ($i=0; $i<=count($presentation); $i++) {
          if ($shown >= $classesToShow) {
            break;
          }
          //echo $school[$i]["ClassTime"] . " "  . $now . "<br>";
          if ($presentation[$i]["ClassTime"] > $now) {
            echo "<div style='width:750px;'><li class='learningclasses'><b>" . $presentation[$i]["ClassName"] . "</b>";
            echo "<br>&emsp;<i class='small-section-content'>";
            $first = 1;
            echo date("F jS, g:i A", strtotime($presentation[$i]["ClassTime"]));
            echo "</i> </li>";
            $shown++;
          }
        }
        echo "</ul>";

  
?>