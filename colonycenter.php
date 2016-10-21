<?php
  $carecenter = array('Name' => 'Colony', 
            'Short' => 'colony',
            'Location' => 'Colony Professional Plaza',
            'Address' => '280 Farner Place',
            'image' => 'cc_bldg_ colony',
            'map_include' => 'colony_info_and_map'
            );
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
  $doctor[] = array('NameTitle' => 'David Jordahl, MD - Medical Director',
          'DoctorPage' => 'jordahl.php',
          'PhotoName' => 'jordahl',
          'Hometown' => 'Midland, Michigan',
          'Undergrad' => 'Wayne State University',
          'Medical' => 'Wayne State University School of Medicine',
          'Intern' => 'St. Mary’s Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Brooks Betts II, DO',
          'DoctorPage' => 'betts.php',
          'PhotoName' => 'betts',
          'Hometown' => 'Eaton, Pennsylvania',
          'Undergrad' => 'Colgate University and Pennsylvania State University',
          'Medical' => 'Philadelphia College of Osteopathic Medicine',
          'Intern' => 'Osteopathic Hospital of Maine',
          'Board' => 'American Osteopathic Board of Family Physicians with added qualifications in Geriatric Medicine'
          );
  $doctor[] = array('NameTitle' => 'Michael Clifford, MD',
          'DoctorPage' => 'clifford.php',
          'PhotoName' => 'clifford',
          'Hometown' => 'Coon Rapids, Minnesota',
          'Undergrad' => 'University of St. Thomas',
          'Medical' => 'University of Minnesota',
          'Intern' => 'Bethesda Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'John E. Hocutt, Jr., MD, FAAFP',
          'DoctorPage' => 'hocutt.php',
          'PhotoName' => 'hocutt',
          'Hometown' => 'Wilmington, Delaware',
          'Undergrad' => 'University of North Carolina',
          'Medical' => 'Jefferson Medical School',
          'Intern' => 'Medical Center of Delaware',
          'Board' => 'American Board of Family Medicine with special interest and training in Sports Medicine'
          );
  $doctor[] = array('NameTitle' => 'J. Stephen Long, MD',
          'DoctorPage' => 'long.php',
          'PhotoName' => 'long',
          'Hometown' => 'Allentown, Pennsylvania',
          'Undergrad' => 'Moravian College',
          'Medical' => 'Jefferson Medical College, Thomas Jefferson University',
          'Intern' => 'York Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Uyen Anh Nguyen, DO',
          'DoctorPage' => 'nguyen.php',
          'PhotoName' => 'nguyen',
          'Hometown' => 'Allentown, Pennsylvania',
          'Undergrad' => 'Wilkes University',
          'Medical' => 'Philadelphia College of Osteopathic Medicine',
          'Intern' => 'Allentown Osteopathic Medical Center, St. Luke’s Hospital',
          'Board' => 'American Osteopathic Board of Family Physicians'
          );
  $doctor[] = array('NameTitle' => 'Denise Ollivierre, MD',
          'DoctorPage' => 'ollivierre.php',
          'PhotoName' => 'ollivierre',
          'Hometown' => 'Leesburg, Florida',
          'Undergrad' => 'Howard University',
          'Medical' => 'Howard University',
          'Intern' => 'Howard University Hospital Cabrini Medical Center',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Heidi Zimmerman, MD, FAAFP',
          'DoctorPage' => 'zimmerman.php',
          'PhotoName' => 'zimmerman',
          'Hometown' => 'Reinholds, Pennsylvania',
          'Undergrad' => 'Eastern Mennonite University',
          'Medical' => 'Medical College of Virginia Richmond and Pennsylvania State University School of Medicine',
          'Intern' => 'Reading Hospital and Medical Center',
          'Board' => 'American Board of Family Medicine',
          'Fellowship' => 'American Academy of Family Physicians'
          );
  $pa = array();
  $pa[] = array('NameTitle' => 'Beverly Elmore, MMS, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'ElmoreBeverlyPA',
          'Hometown' => 'Orlando, Florida',
          'Undergrad' => 'University of South Florida',
          'Medical' => 'Mercer University',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $pa[] = array('NameTitle' => 'David Fischer, MPAS, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'Fischer-David-PA',
          'Hometown' => 'Leesburg, Florida',
          'Undergrad' => 'University of Florida',
          'Medical' => 'University of Florida',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $rpn = array();
  $rpn[] = array('NameTitle' => 'Ann Lundy, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'Lundy-Ann-ARNP',
          'Hometown' => 'Wolcott, New York',
          'Undergrad' => 'University of Phoenix',
          'Medical' => 'South University',
          'Board' => 'American Academy of Nurse Practitioners'
          );
  $rpn[] = array('NameTitle' => 'Linda Wheeling, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'Wheeling-Linda-ARNP',
          'Hometown' => 'Anderson, Indiana',
          'Undergrad' => 'Indiana University of Nursing',
          'Medical' => 'Old Dominion University',
          'Board' => 'American Academy of Nurse Practitioners'
          );
  $audio = array();
  $audio[] = array('NameTitle' => 'Laura Bradley Pratesi, AuD',
          'DoctorPage' => 'audiology.php',
          'PhotoName' => 'pratesi',
          'Undergrad' => 'Auburn University',
          'Medical' => 'Auburn University',
          'Intern' => 'Columbus Speech and Hearing Center, Columbus, GA',
          'Board' => 'Fellow of the American Academy of Audiology (F-AAA) <br>Certificate of Clinical Competence from the American Speech, Language and Hearing Association (CCC-A)'
          );
  $psr = array('NameTitle' => 'Patty Sidoti',
          'DoctorPage' => '#.php',
          'PhotoName' => 'SidotiPatty'
          );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include( 'gtm_head.php' ); ?>
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
  <?php include( 'gtm_body.php' ); ?>
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