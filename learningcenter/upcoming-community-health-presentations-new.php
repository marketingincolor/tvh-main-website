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
            if (isset($presentation[$i]["PresenterImage"]))
              echo "<br><div style='float:left; padding:5px;'><img src='/" . $presentation[$i]["PresenterImage"] . "' style='vertical-align:top; height:80px;'></div>";
            else 
              echo "<li class='learningclasses'>";
            echo "<b>" . $presentation[$i]["ClassName"] . "</b>";
            echo "<br>&emsp;<i class='small-section-content'>";
            $first = 1;
            echo date("F jS, g:i A", strtotime($presentation[$i]["ClassTime"]));
            echo "</i> </li>";
            if (isset($presentation[$i]["PresenterImage"]))
              echo "<br><br><br><br>";
            $shown++;
          }
        }
        echo "</ul>";

  
?>