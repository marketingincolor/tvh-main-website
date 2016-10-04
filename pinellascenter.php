<?php
  $carecenter = array('Name' => 'Pinellas', 
            'Short' => 'pinellas',
            'Location' => 'Pinellas',
            'Address' => '2485 Pinellas Place',
            'image' => 'cc_bldg_pinellas',
            'map_include' => 'pinellas_info_and_map');
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
  $doctor[] = array('NameTitle' => 'Laura Cloukey, DO – Medical Director',
          'DoctorPage' => 'cloukey.php',
          'PhotoName' => 'cloukey',
          'Hometown' => 'Waltham, Massachusetts',
          'Undergrad' => 'University of Massachusetts',
          'Medical' => 'University of New England',
          'Intern' => 'Carney Hospital, Boston University',
          'Board' => 'American Board of Internal Medicine'
          );
  /*$doctor[] = array('NameTitle' => 'Helene Aisenstat, MD',
          'DoctorPage' => 'aisenstat_h.php',
          'PhotoName' => 'aisenstat_h',
          'Hometown' => 'St. Louis, Missouri',
          'Undergrad' => 'Jeanne Mance School of Nursing, St. Michaels College',
          'Medical' => 'Universidad Tecnilogica De Santiago',
          'Intern' => 'Lutheran Hosptal, Deaconess Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Robert Aisenstat, MD',
          'DoctorPage' => 'aisenstat_r.php',
          'PhotoName' => 'aisenstat_r',
          'Hometown' => 'St. Louis, Missouri',
          'Undergrad' => 'City College of New York',
          'Medical' => 'Universidad Tecnilogica De Santiago',
          'Intern' => 'Deaconess Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  */$doctor[] = array('NameTitle' => 'Mariel Gonzalez, MD',
          'DoctorPage' => 'gonzalez.php',
          'PhotoName' => 'gonzalez',
          'Hometown' => 'San Juan, Puerto Rico',
          'Undergrad' => 'University of Puerto Rico',
          'Medical' => 'University of Puerto Rico School of Medicine',
          'Intern' => 'Penn State Good Samaritan Family Practice',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Fred Kaplan, MD',
          'DoctorPage' => 'kaplan.php',
          'PhotoName' => 'kaplan',
          'Hometown' => 'Monsey, New York',
          'Undergrad' => 'Colgate University',
          'Medical' => 'George Washington University School of Medicine & Health Sciences',
          'Intern' => 'Albany Medical Center',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'David Kelley, MD',
          'DoctorPage' => 'kelley.php',
          'PhotoName' => 'kelley',
          'Hometown' => 'Lake Forest, Illinois',
          'Undergrad' => 'University of Illinois',
          'Medical' => 'University of Illinois School of Medicine',
          'Intern' => 'University of Illinois School of Medicine',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Tomas Perez, MD',
          'DoctorPage' => 'perez.php',
          'PhotoName' => 'perez',
          'Hometown' => 'Bayamon, Puerto Rico',
          'Undergrad' => 'Emory University',
          'Medical' => 'Universidad Central del Caribe',
          'Intern' => 'Penn State University Good Samaritan Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Julie Sudduth, DO',
          'DoctorPage' => 'sudduth.php',
          'PhotoName' => 'sudduth',
          'Hometown' => 'Inverness, Florida',
          'Undergrad' => 'Clemson University',
          'Medical' => 'University of Health Sciences',
          'Intern' => 'Saint Barnabas Hospital; Sacred Heart Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Robert Raquet, MD',
          'DoctorPage' => 'raquet.php',
          'PhotoName' => 'raquet',
          'Hometown' => 'Congers, NY',
          'Undergrad' => 'State University of New York at Stony Brook',
          'Medical' => 'University of Health Sciences, The Chicago Medical School',
          'Intern' => 'Georgetown University',
          'Board' => 'American Board of Internal Medicine'
          );
  $pa = array();
  $rpn = array();
  $rpn[] = array('NameTitle' => 'Nancy Johnson, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'JohnsonNancyARNP',
          'Hometown' => 'Jackson, Missouri',
          'Undergrad' => 'Southeast Missouri State University',
          'Medical' => 'Indiana State University',
          'Board' => 'American Nurses Credentialing Center'
          );
  $rpn[] = array('NameTitle' => 'Sue Schueler, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'SchuelerSueARNP',
          'Hometown' => 'Louisville, Kentucky',
          'Undergrad' => 'University of Louisville, ADN, BSN',
          'Medical' => 'Spalding University, MSN',
          'Board' => 'American Academy of Nurse Practitioners'
          );
  $rpn[] = array('NameTitle' => 'Brittany Miller, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'MillerBrittneyARNP',
          'Hometown' => 'Kokomo, Indiana',
          'Undergrad' => 'Indiana University Kokomo',
          'Medical' => 'Ball State University, MSN/FNP',
          'Board' => 'American Nurses Credentialing Center'
          );
  $audio = array();
  $psr = array('NameTitle' => 'Mireya Mahaffey',
          'DoctorPage' => '#.php',
          'PhotoName' => 'MahaffeyMireya'
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