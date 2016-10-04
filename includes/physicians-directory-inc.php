<?php 
for ($j=0; $j<count($groups); $j++) 
{
  $g = ${$groups[$j]["array_name"]};
  if (count($g) > 0) 
  {
?>
    <p class="h1" style="margin:20px 0 10px !important;"><?php echo $groups[$j]["group_title"]; ?></p>
    <div style="width:100%; height:auto; clear:both;">
<?php
  }
?>
    

<?php
  for ($i=0; $i<count($g); $i++) {
?>
      <div style="width:45%; float:left;">
        <div style="width:100%;">
            <a href="<?php echo $g[$i]['DoctorPage']; ?>"><?php echo $g[$i]['NameTitle']; ?></a>
        </div>
        <div style="width:100%;">
          <div style="width:35%; float:left;">
              <img src="images/smdocs/<?php echo $g[$i]['PhotoName']; ?>.jpg" width="130" />
          </div>
          <div style="width:65%; float:right;">
              <ul>
                <?php 
                  if (isset($g[$i]['Hometown'])) echo '<li><strong>Hometown</strong><br />'.$g[$i]['Hometown'].'</li>';
                  if (isset($g[$i]['Undergrad'])) echo '<li><strong>Undergraduate</strong><br />'.$g[$i]['Undergrad'].'</li>';
                  if (isset($g[$i]['Medical'])) echo '<li><strong>Graduate School</strong><br />'.$g[$i]['Medical'].'</li>';
                  if (isset($g[$i]['Intern'])) echo '<li><strong>Internship/Residency</strong><br />'.$g[$i]['Intern'].'</li>';
                  if (isset($g[$i]['Board'])) echo '<li><strong>Board Certified</strong><br />'.$g[$i]['Board'].'</li>';
                  if (isset($g[$i]['BoardEligible'])) echo '<li><strong>Board Eligible</strong><br />'.$g[$i]['BoardEligible'].'</li>';
                  if (isset($g[$i]['Fellowship'])) echo '<li><strong>Fellowship</strong><br />'.$g[$i]['Fellowship'].'</li>';
                ?>
              </ul>
          </div>
        </div>
      </div>
<?php 
    if ($i%2 == 0) {
?> 
      <div style="width:10%; height:1px; float:left;"></div>
<?php
    }
    else {
?>
      <div style="clear:both; float:none; height:20px;"></div>
<?php 
    }
  }

  if (count($g) > 0) 
  {
?>
    </div>
    <div style="clear:both; float:none; height:60px;"></div>
    <hr />  
    <div style="clear:both; float:none; height:30px;"></div>
<?php
  }
}
?>