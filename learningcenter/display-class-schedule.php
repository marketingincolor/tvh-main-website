 <?php
  $this_month = "";
  $today = date('Y-m-d');

  include "class-calendar.php";
  
   for ($i=0; $i<count($school); $i++) {
      if ($school[$i]["CareCenter"] == $care_center) {
        $class_month_number = date('Y-m-d',strtotime($school[$i]["ClassTime"]));
        $class_start_time = date('g:i a', strtotime($school[$i]["ClassTime"]));
        $class_end_time = date('g:i a', strtotime($school[$i]["ClassTime"])+3600);
        if ($class_month_number >= $today) {
          if ($this_month != date('F', strtotime($school[$i]["ClassTime"]))) {
            ?>
              </table>
              <table width="975" border="0" align="center" cellpadding="16" cellspacing="4" class="text">
              <tr><td width="400" class="months"><?php echo strtoupper(date('F Y', strtotime($school[$i]["ClassTime"]))); ?></td></tr>
            <?php
          }
          $this_month = date('F', strtotime($school[$i]["ClassTime"]));
        ?>
          <tr bgcolor="<?php echo $row_color; ?>">
            <td width="400" class="text"><span class="class"><?php echo $school[$i]["ClassName"]; ?></span><br />
              <?php echo $school[$i]["ClassDesc"]; ?></td>
            <td width="85"><?php echo date('F j', strtotime($school[$i]["ClassTime"])); ?></td>
            <td width="115" padding ><?php echo $school[$i]["ClassTime"] == "" ? "" : ($class_start_time . " - " . $class_end_time); ?></td>
            <td width="100" bgcolor="<?php echo $register_color; ?>">
                <a href="learning-center.php?this_location=<?php echo $care_center; ?>&this_class=<?php echo $school[$i]["ClassName"]; ?>&start_date=<?php echo date('F j', strtotime($school[$i]["ClassTime"])); ?>&start_time=<?php echo $class_start_time; ?>" 
                  onclick="window.open(this.href,  null, 'height=520, width=680, toolbar=0, location=0, status=1, scrollbars=1, resizable=1'); return false;">REGISTER</a>
            </td>    
          </tr>

      <?php
        }
      }
   }
 ?>