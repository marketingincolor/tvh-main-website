<?php
  $carecenter = array('Name' => 'Belleview', 
            'Short' => 'belleview',
            'Location' => 'Belleview',
            'Address' => '5051 SE 110th Street',
            'image' => 'cc_bldg_ belleview',
            'map_include' => 'belleview_info_and_map');
  $groups = array();
  $groups[] = array("array_name" => "doctor", 
                "group_title" => strtoupper($carecenter['Name']).' CENTER PHYSICIANS');
  $groups[] = array("array_name" => "pa",
                "group_title" => 'PHYSICIAN ASSISTANTS');
  $groups[] = array("array_name" => "rpn",
                "group_title" => 'NURSE PRACTITIONERS');
  $groups[] = array("array_name" => "audio",
                "group_title" => 'AUDIOLOGIST');
  $doctor = array();
  $doctor[] = array('NameTitle' => 'J.D. Steed, MD – Medical Director',
          'DoctorPage' => 'steed.php',
          'PhotoName' => 'steed',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'University of Florida',
          'Medical' => 'Wake Forest University',
          'Intern' => 'Florida Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Stephen Fischer, MD',
          'DoctorPage' => 'fischer.php',
          'PhotoName' => 'fischer',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'University of Virginia',
          'Medical' => 'University of Louisville School of Medicine',
          'Intern' => 'Good Samaritan Medical Center in both Internal Medicine and Pediatrics',
          'Board' => 'American Board of Pediatrics',
          'BoardEligible' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'David Modders, PhD',
          'DoctorPage' => 'modders.php',
          'PhotoName' => 'modders',
          'Hometown' => 'Alma, Michigan',
          'Undergrad' => 'Alma College',
          'Medical' => 'Wayne State University',
          'Intern' => 'University of South Florida’s Louis de la Parte Florida Mental Health Institute'
          );
  $doctor[] = array('NameTitle' => 'Aya Olejeme, MD',
          'DoctorPage' => 'olejeme.php',
          'PhotoName' => 'olejeme',
          'Hometown' => 'Decatur, Georgia',
          'Undergrad' => 'University of Virginia',
          'Medical' => 'University of Cincinnati College of Medicine',
          'Intern' => 'The Christ Hospital',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Brent Stabler, MD',
          'DoctorPage' => 'stabler.php',
          'PhotoName' => 'stabler',
          'Hometown' => 'Covington, Louisiana',
          'Undergrad' => 'Auburn University at Montgomery',
          'Medical' => 'University of Alabama',
          'Intern' => 'University of Arkansas Spartanburg Regional Healthcare Center',
          'Board' => 'American Board of Family Medicine'
          );
  // $doctor[] = array('NameTitle' => 'Michael Vogt, MD',
  //         'DoctorPage' => 'vogt.php',
  //         'PhotoName' => 'vogt',
  //         'Hometown' => 'Erie, Pennsylvania',
  //         'Undergrad' => 'University of West Florida',
  //         'Medical' => 'University of South Florida',
  //         'Intern' => 'Florida Hospital',
  //         'Board' => 'American Board of Family Medicine'
  //         );
  $doctor[] = array('NameTitle' => 'Daniel Whinnen, MD',
          'DoctorPage' => 'whinnen.php',
          'PhotoName' => 'whinnen',
          'Hometown' => 'Covington, Louisiana',
          'Undergrad' => 'Indiana Wesleyan University',
          'Medical' => 'Wayne State University',
          'Intern' => 'Eglin Air Force Base',
          'Board' => 'American Board of Family Medicine'
          );
  $pa = array();
  $pa[] = array('NameTitle' => 'Susan Bonenclark, MPAS, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'BonenclarkSusanPA',
          'Hometown' => 'Annandale, Virginia',
          'Undergrad' => 'James Madison University',
          'Medical' => 'University of Florida',
          'Intern' => 'Eglin Air Force Base',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $pa[] = array('NameTitle' => 'Brittany Gagnon, MPAS, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'GagnonBrittanyPA',
          'Hometown' => 'Summerfield, Florida',
          'Undergrad' => 'University of Florida',
          'Medical' => 'University of Florida Physician Assistant Program',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $pa[] = array('NameTitle' => 'Jamie Kinsey, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'KinseyJamiePA',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'College of Central Florida',
          'Medical' => 'Miami-Dade College',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $rpn = array();
  $audio = array();
  $audio[] = array('NameTitle' => 'Al Turri, AuD',
          'DoctorPage' => 'audiology.php',
          'PhotoName' => 'turri',
          'Hometown' => 'Rochester, New York',
          'Undergrad' => 'University of South Florida',
          'Medical' => 'Salus University School of Audiology',
          'Intern' => 'Veterans Administrtaion Medical Center',
          'Board' => 'American Board of Audiology'
          );
  $psr = array('NameTitle' => 'Kayla Stephens',
          'DoctorPage' => '#.php',
          'PhotoName' => 'StephensKayla'
          );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $carecenter['Name']; ?> Care Center | The Villages</title>
<meta name="description" content="The Villages Health Care Center at <?php echo $carecenter['Location']; ?> is located at <?php echo $carecenter['Address']; ?> in The Villages Florida.">
<meta name="keywords" content="The Villages Health Care Center, <?php echo $carecenter['Name']; ?> Care Center, Health care in The Villages">
<meta name="robots" content="noindex, nofollow">
<link href="tvh.css" rel="stylesheet" type="text/css" />
<link href="pd.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31120753-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
  <?php include 'nav.php'; ?>
  <div id="homewrapper">
    <div class="text" id="content">
        <img src="images/<?php echo $carecenter['image']; ?>.jpg" width="730" height="309" />
        <div id="smnav"><?php include 'navmin.php'; ?>
      </div>
    </div>

    <div id="centerwrap"> 
      <span class="h1">Welcome to The Villages Health Care Center at <?php echo $carecenter['Location']; ?></span>
      <div class="bolders">
        <?php 
        include ("includes/physicians-directory-inc.php");
        include ("includes/patient-services-rep-inc.php");
        ?>

        <div style="clear:both; float:none; height:60px;"></div>
      </div>
      <?php include("includes/".$carecenter['map_include'].".php"); ?>
      <div id="mapspacer"></div> 
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>
</html>