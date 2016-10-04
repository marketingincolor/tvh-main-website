 <?php

 
  $this_class = "";
  $today = date('Y-m-d');
  $first = 1;

  $row_color = "#fcefa1";
  $register_color = "#fae126";

  $CareCenterLinks = array( "/colonycenter.php" => "Colony",
                            "/creeksidecenter.php" => "Creekside",
                            "/pinellascenter.php" => "Pinellas",
                            "/santabarbaracenter.php" => "Santa Barbara",
                            "/mulberrycenter.php" => "Mulberry Grove",
                            "/communitycenter.php" => "Community Center",
                            "/belleviewcenter.php" => "Belleview"
                      );
  $this_CareCenter = "";
  $this_ClassDateTime = "";

// get class calendar
  include "class-calendar.php";
  include "isClassFull.php";

 // sort class calendar by Class Name and Class Time 
 foreach ($school as $key => $value) {
            $ClassName[$key] = $value["ClassName"];
            $ClassTime[$key] = $value["ClassTime"];
  }
 array_multisort($ClassName, SORT_ASC, $ClassTime, SORT_ASC, $school); 
 
  for ($i=0; $i<count($school); $i++) {
    //$class_month_number = date('m-d',strtotime($school[$i]["ClassDate"]));
    $class_month_number = date('Y-m-d',strtotime($school[$i]["ClassTime"]));
    if ($class_month_number >= $today) {
      $ClassDateAndTime = date('D, M j @ g:i a', strtotime($school[$i]["ClassTime"]));
        if ($this_class != $school[$i]["ClassName"]) {
          // if not the first class, close the previous row
          if ($first < 1) { 
            ?>
              <td width="275" bgcolor="<?php echo $register_color; ?>">
                <div id="carecenter" style="float:left"><?php echo $this_CareCenter; ?></div>
                <div id="classdate" align="right" style="float:right" ><?php echo $this_ClassRegisterLink; ?></div>
              </td>
            <?php
            echo "</tr>"."\r\n"; 
          }
          else { 
            $first = 0; 
          }
          ?>
            <tr bgcolor="<?php echo $row_color; ?>">
              <td width="325" class="text"><span class="class"><?php echo $school[$i]["ClassName"]; ?></span><br />
                <?php echo $school[$i]["ClassDesc"]; ?>
              </td>
                
          <?php
          $this_class = $school[$i]["ClassName"];
          $this_CareCenter = "";
          $this_ClassRegisterLink = "";
        }
      
      $ClassDate = date('F j', strtotime($school[$i]["ClassTime"])); 
      $ClassStart = date('g:i a', strtotime($school[$i]["ClassTime"]));
                      if (array_search($school[$i]["CareCenter"], $CareCenterLinks) != "none")
                      {
                        $this_CareCenter .= '<a href="' . array_search($school[$i]["CareCenter"], $CareCenterLinks) .'">' .$school[$i]["CareCenter"] . '</a>:<br>';
                      }
                      else {
                        $this_CareCenter .= $school[$i]["CareCenter"] . ":<br>";
                      }

                      $classid =  $school[$i]["ClassName"] . ":" . $school[$i]["CareCenter"] . ":" . $ClassDate . " " . $ClassStart;
                      $s = simplexml_load_file('attendance.xml'); 
                      $classes = $s->xpath('//Class[ClassId="'.$classid.'"]');
                      $registered = "";
                      foreach($classes as $class) {
                        $registered = $class->Registered;
                      }
                      $FullClass = isClassFull($classid, $classes);

                      $this_ClassRegisterLink .= $ClassDateAndTime;

                      if ($FullClass > 0) {
                        $this_ClassRegisterLink .= "&nbsp;&nbsp;CLASS FULL " . $registered . "<br>";
                      }
                      else { 
                        $this_ClassRegisterLink .= "&nbsp;&nbsp;<a href='learning-center.php?this_location={$school[$i]["CareCenter"]}&this_class={$school[$i]["ClassName"]}&start_date={$ClassDate}&start_time={$ClassStart}'";
                        $this_ClassRegisterLink .= " onclick='window.open(this.href,  null, 'height=520, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false'>REGISTER</a> " . $registered . "<br>";
                      }
                      
    }

   }
   ?>
    <td width="250" bgcolor="<?php echo $register_color; ?>">
                <div id="carecenter" style="float:left"><?php echo $this_CareCenter; ?></div>
                <div id="classdate" align="right" style="float:right" ><?php echo $this_ClassRegisterLink; ?></div>
              </td>
   </tr>

 