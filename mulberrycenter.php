<?php
  $carecenter = array('Name' => 'Mulberry Grove', 
            'Short' => 'mulberry grove',
            'Location' => 'Mulberry Grove',
            'Address' => '8877 SE 165th Mulberry Lane',
            'image' => 'cc_bldg_mulberry',
            'map_include' => 'mulberry_info_and_map');
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
  $doctor[] = array('NameTitle' => 'Christine Stopyra, MD – Medical Director',
          'DoctorPage' => 'stopyra.php',
          'PhotoName' => 'stopyra',
          'Hometown' => 'Alexandria, Virginia',
          'Undergrad' => 'Boston College',
          'Medical' => 'Eastern Virginia Medical School',
          'Intern' => 'Naval Medical Center Portsmouth',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Paul Daluga Jr., MD',
          'DoctorPage' => 'daluga.php',
          'PhotoName' => 'daluga',
          'Hometown' => 'Linton, Indiana',
          'Undergrad' => 'Indiana University',
          'Medical' => 'Indiana University School of Medicine',
          'Intern' => 'St. Frances Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Collette Mercier, MD',
          'DoctorPage' => 'mercier.php',
          'PhotoName' => 'mercier',
          'Hometown' => 'Saginaw, Michigan',
          'Undergrad' => 'Michigan State University',
          'Medical' => 'Michigan State University',
          'Intern' => 'Saginaw Cooperative Hospitals, State University of New York',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Glen A. Morgan, MD',
          'DoctorPage' => 'morgan.php',
          'PhotoName' => 'morgan',
          'Hometown' => 'Santa Monica, California',
          'Undergrad' => 'Wake Forest University',
          'Medical' => 'University of Florida College of Medicine',
          'Intern' => 'Florida Hospital',
          'Board' => 'American Board of Family Medicine with added qualifications in Sports Medicine'
          );
  $doctor[] = array('NameTitle' => 'Lisa Sahai, MD',
          'DoctorPage' => 'sahai.php',
          'PhotoName' => 'SahaiLisa',
          'Hometown' => 'Seacliff, New York',
          'Undergrad' => 'The American University',
          'Medical' => 'American University of The Caribbean',
          'Intern' => 'Kingston Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Michael Wald, MD',
          'DoctorPage' => 'wald.php',
          'PhotoName' => 'wald',
          'Hometown' => 'Pittsburgh, Pennsylvania',
          'Undergrad' => 'Washington and Jefferson College',
          'Medical' => 'Chicago Medical School',
          'Intern' => 'Montefiore Hospital and Medical Center',
          'Board' => 'American Board of Internal Medicine'
          );

  $doctor[] = array('NameTitle' => 'Linda Satterlee, MD',
          'DoctorPage' => '.php',
          'PhotoName' => 'linda',
          'Hometown' => 'Belding, Michigan',
          'Undergrad' => 'Philadelphia College of Osteopathic Medicine',
          'Medical' => 'Philadelphia College of Osteopathic Medicine',
          'Intern' => 'Grand Rapids Metropolitan Hospital',
          'Board' => 'American Osteopathic Board of Family Physicians'
          );
  $pa = array();
  $rpn = array();
  $rpn[] = array('NameTitle' => 'Kimberly Basham, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'BashamKimberlyARNP',
          'Undergrad' => 'Joliet Junior College<br>Joliet, IL',
          'Medical' => 'Olivey Nazarene University<br>Bourbonnais, IL',
          'Board' => 'American Academy of Nurse Practitioners'
          );
  $audio = array();
  $psr = array('NameTitle' => 'Sue Geletka',
          'DoctorPage' => '#.php',
          'PhotoName' => 'GeletkaSue'
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