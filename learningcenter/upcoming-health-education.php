<?php

        $shown = 0;
        $now = date("Y-m-d H:i", strtotime("now"));

        $found_one = 0;
          echo "<ul class='square'>";
          for ($i=0; $i<=count($health); $i++) {
            if ($shown >= $classesToShow) {
              break;
            }
            //echo $school[$i]["ClassTime"] . " "  . $now . "<br>";
            if ($health[$i]["ClassTime"][0] > $now) {
              $found_one = 1;
              echo "<div style='float:right;'><img src='" . $health[$i]["Image"] . "' style='max-width:160px;'></img></div>";
              echo "<div style='width:750px;'><li class='learningclasses'><b>" . $health[$i]["ClassName"] . "</b>";
              echo "<br>&emsp;" . $health[$i]["ClassDesc"]. "<br>";
              //echo "<br><br>&emsp;<i class='small-section-content'>";
              $first = 1;
              foreach ($health[$i]["ClassTime"] as $ct) {
                //if ($first == 0) echo "; ";
                //echo date("F jS, g:i A", strtotime($ct));
                $first = 0;
              } 
              echo "</i> </li><br>";
                $ClassDate = date('F j', strtotime($health[$i]["ClassTime"][0])); 
                $ClassStart = date('g:i a', strtotime($health[$i]["ClassTime"][0]));
                $this_ClassRegisterLink = "<a href='learning-center.php?this_class={$health[$i]["ClassName"]}&start_date={$ClassDate}&start_time={$ClassStart}'";
                $this_ClassRegisterLink .= " onclick='window.open(this.href,  null, 'height=520, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false'>REGISTER</a><br>";            
              //echo "&emsp;" . $this_ClassRegisterLink;
              echo "</div><br>";  
              echo "<br><br><br><br>";
              $shown++;
            }
          }
          echo "</ul>";
        
        if ($found_one < 1) {
            echo "There are no Health Education Programs currently scheduled.";
        }

  
?>