<?php
  $carecenter = array('Name' => 'Santa Barbara', 
            'Short' => 'santa barbara',
            'Location' => 'Santa Barbara',
            'Address' => '1575 Santa Barbara Boulevard',
            'image' => 'cc_bldg_santabarbara',
            'map_include' => 'santabarbara_info_and_map');
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
  $doctor[] = array('NameTitle' => 'Saul Rosenblum, MD – Medical Director',
          'DoctorPage' => 'rosenblum.php',
          'PhotoName' => 'rosenblum',
          'Hometown' => 'Auburn, New York',
          'Undergrad' => 'State University of New York at Buffalo',
          'Medical' => 'State University of New York at Upstate Medical Center',
          'Intern' => 'The Genesee Hospital',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Kimberly Giovannelli, MD',
          'DoctorPage' => 'giovannelli.php',
          'PhotoName' => 'giovannelli',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'Georgia Southern University',
          'Medical' => 'University of South Florida College of Medicine',
          'Intern' => 'Bayfront Family Medicine',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Frank Melidona, DO',
          'DoctorPage' => 'melidona.php',
          'PhotoName' => 'melidona',
          'Hometown' => 'Youngstown, Ohio',
          'Undergrad' => 'McGill University, Montreal, Canada',
          'Medical' => 'Ohio University College of Osteopathic Medicine',
          'Intern' => 'Youngstown Osteopathic Hospital',
          'Board' => 'American Board of Osteopathic Family Practitioners'
          );
  $doctor[] = array('NameTitle' => 'Ashok Ojha, MD, MBBS, MRCP',
          'DoctorPage' => 'dr_profile.php?DrId=3',
          'PhotoName' => 'ojha_a',
          'Hometown' => 'Patna, India',
          'Undergrad' => 'Science College, Patna University',
          'Medical' => 'Patna Medical College',
          'Intern' => 'Highland Hospital, Rochester, New York',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Christopher Pead, MD',
          'DoctorPage' => 'pead.php',
          'PhotoName' => 'pead',
          'Hometown' => 'Watertown, Connecticut',
          'Undergrad' => 'University of South Florida',
          'Medical' => 'University of South Florida College of Medicine',
          'Intern' => 'Tallahassee Memorial',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Lori Wemlinger, MD',
          'DoctorPage' => 'wemlinger.php',
          'PhotoName' => 'wemlinger',
          'Hometown' => 'Bloomington, Illinois',
          'Undergrad' => 'University of Illinois',
          'Medical' => 'Southern Illinois University School of Medicine',
          'Intern' => 'Southern Illinois University School of Medicine Affiliated Hospitals',
          'Board' => 'American Board of Internal Medicine'
          );
  $pa = array();
  $pa[] = array('NameTitle' => 'Riddhi Patel, MSPA, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'PatelRiddhiPA',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'University of South Florida',
          'Medical' => 'Rosalind Franklin University of Medicine and Science',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $rpn = array();
  $rpn[] = array('NameTitle' => 'Virginia Clive, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'CliveVirginiaARNP',
          'Hometown' => 'Salisbury, New York',
          'Undergrad' => 'State University of NY at Plattsburgh',
          'Medical' => 'State University of NY at Utica/Rome',
          'Board' => 'American Academy of Nurse Practitioners'
          );
  $rpn[] = array('NameTitle' => 'Sylvia Wallace, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'WallaceSylviaARNP',
          'Hometown' => 'Ocala, Florida',
          'Undergrad' => 'University of Florida',
          'Medical' => 'University of Florida',
          'Board' => 'American Nurses Credentialing Center'
          );
  $audio = array();
  $psr = array('NameTitle' => 'Janie Hathcox',
          'DoctorPage' => '#.php',
          'PhotoName' => 'HathcoxJanie'
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