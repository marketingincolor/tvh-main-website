<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( 'gtm_head.php' ); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Staff jobs at The Villages Health</title>
  <meta name="description" content="The Villages Health is currently hiring medical staff for all care center locations.">
  <meta name="keywords" content="villages health, staff jobs">
  <meta name="robots" content="index,follow">

  

  <link href="tvh.css" rel="stylesheet" type="text/css" />
  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  

  <script src="vallenato/vallenato.js" type="text/javascript"></script>

  <link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen">
  <link rel="stylesheet" href="forms.css" type="text/css" media="screen">

  <style type="text/css">
    body {
    	background-color: #fdfcf8;
    }
  </style>
</head>

<body>
<?php include( 'gtm_body.php' ); ?>
<?php include 'nav.php'; ?>
<div id="homewrapper">
<div id="content">
  <p><img src="images/staffjobs.jpg" width="252" height="33" alt="About Us" /></p>
  <p class="bolds">We are currently hiring for all of our care centers. <a href="TVHCC-locations-map-9.15.14.pdf" target="_blank">See our locations.</a></p>
  
<div id="accordion-container">

  <?php 
    include_once("includes/jobs-list.php");

    for ($i=0; $i<count($jobsList); $i++) {
      if ($jobsList[$i]["Active"] > 0) {
  ?>

        <h2 class="accordion-header"><?php echo $jobsList[$i]["Title"]; ?></h2>
        <div class="accordion-content">
         <p> <strong>Job Description:</strong></p>
         <p><?php echo $jobsList[$i]["Description"]; ?></p> 	
         <p><strong>Minimum Qualifications:</strong></p>
         <ul>
            <?php 
              for ($j=0; $j<count($jobsList[$i]["Qualifications"]); $j++) {
                echo "<li>" . $jobsList[$i]["Qualifications"][$j] . "</li>";
              }
            ?>
         </ul> 	 
         <p><strong>Essential Duties and Responsibilities:</strong></p>
         <ul>
            <?php 
              for ($j=0; $j<count($jobsList[$i]["EssentialDuties"]); $j++) {
                echo "<li>" . $jobsList[$i]["EssentialDuties"][$j] . "</li>";
              }
            ?>
         </ul> 	  
        <?php
          if (count($jobsList[$i]["Skills"]) > 0) 
          {
        ?>
          <p><strong>Skills and knowledge:</strong></p>       
          <ul>         
            <?php 
              for ($j=0; $j<count($jobsList[$i]["Skills"]); $j++) {
                echo "<li>" . $jobsList[$i]["Skills"][$j] . "</li>";
              }
            ?>
          </ul> 	  
        <?php 
          }
        ?>
        <p><strong>Rate of Pay:<br> </strong>Based on experience</p> <p class="apply">APPLY BELOW</p>
      </div>
    
  <?php
      }
    }
  ?>
    

  </div>

<iframe id="staffjobsframe" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="forms-staff-jobs.php" frameborder="0" style="width:650px; height:1100px; border:none;" scrolling="no"></iframe>
<?php include 'footer.php'; ?>
</div>
</body>
</html>