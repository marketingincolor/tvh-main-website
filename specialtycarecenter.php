<?php
  $carecenter = array('Name' => 'Specialty', 
            'Short' => 'specialty',
            'Location' => 'Specialty',
            'Address' => '1400 US Highway 441 North, Suite 810',
            'image' => 'cc_bldg_specialty',
            'map_include' => 'specialty_info_and_map');
  $groups = array();
  $groups[] = array("array_name" => "cardio", 
                "group_title" => "CARDIOLOGY");
  $groups[] = array("array_name" => "endo",
                "group_title" => 'ENDOCRINOLOGY');
  $groups[] = array("array_name" => "general",
                "group_title" => 'GENERAL SURGERY');
  $groups[] = array("array_name" => "gyn",
                "group_title" => 'GYNECOLOGY');
  $groups[] = array("array_name" => "arnp",
                "group_title" => 'NURSE PRACTITIONER');
  $groups[] = array("array_name" => "neur",
                "group_title" => 'NEUROLOGY');
  $groups[] = array("array_name" => "orth",
                "group_title" => 'ORTHOPAEDICS');
  $groups[] = array("array_name" => "rheum",
                "group_title" => 'RHEUMATOLOGY');
  $groups[] = array("array_name" => "psych",
                "group_title" => 'PSYCHIATRY');
   $groups[] = array("array_name" => "gas",
                "group_title" => 'GASTROENTEROLOGY, HEPATOLOGY AND NUTRITION');
  $cardio = array();
  $endo = array();
  $general = array();
  $gyn = array();
  $arnp = array();
  $neur = array();
  $orth = array();
  $rheum = array();
    $gas = array();

  $cardio[] = array('NameTitle' => 'Robert Kersh, MD, FACC',
          'DoctorPage' => 'cardiology.php',
          'PhotoName' => 'kersh',
          'Hometown' => 'New York, New York',
          'Undergrad' => 'Stevens Institute of Technology',
          'Medical' => 'Nassau County Medical Center',
          'Fellowship' => 'Medical College of Pennsylvania',
          'Board' => 'American Board of Internal Medicine and Cardiovascular Diseases'
          );
  $cardio[] = array('NameTitle' => 'Robert Skotnicki, DO, FACC, FASE, FASNC, FSCAI',
          'DoctorPage' => 'cardiology.php',
          'PhotoName' => 'skotnicki',
          'Hometown' => 'Erie, Pennsylvania',
          'Undergrad' => 'John Carroll University',
          'Medical' => 'Hospital of Philadelphia College of Osteopathic Medicine',
          'Intern' => 'St. Frances Hospital',
          'Board' => 'American Osteopathic Board of Internal Medicine and Cardiovascular Diseases'
          );

  $cardio[] = array('NameTitle' => 'Robert Herman, MD, FACP, FACC',
          'DoctorPage' => 'cardiology.php',
          'PhotoName' => 'herman',
          'Hometown' => 'Massapequa, NY',
          'Undergrad' => 'State University of New York at Stony Brook',
          'Medical' => 'Jefferson Medical College',
          'Intern' => 'Wright Patterson Air Force Base',
          'Board' => 'American Board of Internal Medicine - Cardiovascular Diseases'
          );
  $endo[] = array('NameTitle' => 'James H. Mersey, MD',
          'DoctorPage' => 'endocrinology.php',
          'PhotoName' => 'mersey',
          'Hometown' => 'New York, New York',
          'Medical' => 'Johns Hopkins University',
          'Fellowship' => 'Brigham and Women’s Hospital',
          'Intern' => 'American Board of Endocrinology and American Board of Internal Medicine'
          );

  $endo[] = array('NameTitle' => 'Susan Lephart, MSN, ARNP-BC',
          'DoctorPage' => 'endocrinology.php',
          'PhotoName' => 'lephart',
          'Hometown' => 'Fairborn, OH',
          'Undergrad' => 'Indiana Wesleyan University',
          'Medical' => 'Wright State University',
          'Board' => 'American Academy of Nurse Practitioners'
          );

  $endo[] = array('NameTitle' => 'Kristen Curtis, MS, RD, LDN ',
          'DoctorPage' => 'endocrinology.php',
          'PhotoName' => 'curtis',
          'Hometown' => 'Frankenmuth, Michigan ',
          'Undergrad' => 'Michigan State University ',
          'Medical' => 'Louisiana Technical University',
          'Intern' => 'Academy of Nutrition and  Dietetics'
          );
  $general[] = array('NameTitle' => 'Edwin Menor, MD',
          'DoctorPage' => 'generalsurgery.php',
          'PhotoName' => 'menor',
          'Hometown' => 'Lima, Peru',
          'Undergrad' => 'University of Massachusetts',
          'Medical' => 'Creighton University School of Medicine',
          'Intern' => 'Mt. Sinai Medical Center',
          'Board' => 'American Board of General Surgery'
          );
  $general[] = array('NameTitle' => 'Nicole Bairossi, MD, FACS',
          'DoctorPage' => 'generalsurgery.php',
          'PhotoName' => 'bairossi',
          'Hometown' => 'Westmoreland, New York',
          'Undergrad' => 'Gannon University',
          'Medical' => 'Saba University',
          'Intern' => 'Carolinas Medical Center',
          'Board' => 'American Board of Surgery'
          );
  $gyn[] = array('NameTitle' => 'James Flaherty, DO, FACOG – Medical Director',
          'DoctorPage' => 'gynecology.php',
          'PhotoName' => 'flaherty',
          'Hometown' => 'Portland, Maine',
          'Undergrad' => 'Boston College and University of Maine',
          'Medical' => 'Kansas City College of Osteopathic Medicine',
          'Intern' => 'Letterman Army Medical Center',
          'Board' => 'American Board of Obstetrics and Gynecology; Subspeciality board certified in Female Pelvic Medicine and Reconstructive Surgery'
          );
  $gyn[] = array('NameTitle' => 'Kathleen A. Steepy, MD, FACOG',
          'DoctorPage' => 'gynecology.php',
          'PhotoName' => 'steepy',
          'Hometown' => 'Pottsville, Pennsylvania',
          'Undergrad' => 'Carnegie-Mellon University',
          'Medical' => 'Temple University Medical School',
          'Intern' => 'OB/GYN, Wright State University',
          'Board' => 'American Board of Obstetrics and Gynecology'
          );

   $gyn[] = array('NameTitle' => 'Elizabeth Raquet, MD',
          'DoctorPage' => 'gynecology.php',
          'PhotoName' => 'raquetE',
          'Hometown' => 'Worcester,  MA',
          'Undergrad' => 'Skidmore College',
          'Medical' => 'University of Health Sciences, The Chicago  Medical School',
          'Intern' => 'Walter Reed Army Medical Center',
          'Board' => 'American Board of Obstetrics and Gynecology'
          );
  // $arnp[] = array('NameTitle' => 'Rosemary Kipp, ARNP',
  //         'DoctorPage' => 'gynecology.php',
  //         'PhotoName' => 'KippRosemaryARNP',
  //         'Hometown' => 'Leesburg, Florida',
  //         'Undergrad' => 'Daytona Beach Community College',
  //         'Medical' => 'University of Texas Southwestern Medical Center Nurse Practitioner Program',
  //         'Board' => 'National Certification Corporation'
  //         );
  $arnp[] = array('NameTitle' => 'Caroline Mathis, MSN, ARNP-BC',
          'DoctorPage' => 'gynecology.php',
          'PhotoName' => 'MathisCarolineARNP',
          'Hometown' => 'Boston, Massachusetts',
          'Undergrad' => 'Shenandoah University',
          'Medical' => 'University of Cincinnati',
          'Board' => 'Women’s Health Care through the National Certification Corporation'
          );

  // $neur[] = array('NameTitle' => 'Kenneth Henschel, MD',
  //         'DoctorPage' => 'henschel.php',
  //         'PhotoName' => 'henschel',
  //         'Hometown' => 'Silver Spring, Maryland',
  //         'Undergrad' => 'Haverford College',
  //         'Medical' => 'University of Pittsburgh School of Medicine',
  //         'Intern' => 'State University of New York',
  //         'Board' => 'American Board of Psychiatry and Neurology',
  //         'Fellowship' => 'Clinical Fellowship in Neuro-Immunology, University of Maryland'
  //         );
 
  $orth[] = array('NameTitle' => 'David B. Ethier, MD',
          'DoctorPage' => 'orthopaedics.php',
          'PhotoName' => 'ethier',
          'Hometown' => 'Southbridge, Massachusetts',
          'Undergrad' => 'Uniformed Services University of the Health Sciences',
          'Medical' => 'Wilford Hall Medical Center',
          'Intern' => 'State University of New York',
          'Board' => 'American Board of Orthopaedic Surgery'
          );
  $orth[] = array('NameTitle' => 'Thomas Sullivan, MD',
          'DoctorPage' => 'orthopaedics.php',
          'PhotoName' => 'sullivan',
          'Hometown' => 'Jamaica, New York',
          'Undergrad' => 'Vanderbilt University',
          'Medical' => 'Vanderbilt Medical School',
          'Intern' => 'University of Massachusetts',
          'Board' => 'American Board of Orthopaedic Surgery'
          );
  $rheum[] = array('NameTitle' => 'Edward L. Morris, MD, FACR',
          'DoctorPage' => 'morris.php',
          'PhotoName' => 'morris',
          'Hometown' => 'Baltimore, Maryland',
          'Undergrad' => 'University of Maryland',
          'Medical' => 'University of Maryland School of Medicine',
          'Intern' => 'University of Maryland School of Medicine, Johns Hopkins School of Medicine',
          'Board' => 'American Board of Rheumatology and American Board of Internal Medicine'
          );
  $psych[] = array('NameTitle' => 'Joseph Sivak, MD',
          'DoctorPage' => 'sivak.php',
          'PhotoName' => 'sivak',
          'Undergrad' => 'John Carroll University<br>Cleveland, OH',
          'Medical' => 'Hahnemann University School of Medicine<br>Philadelphia, PA',
          'Intern' => 'University of Rochester School of Medicine<br>Rochester, NY',
          'Board' => 'American Board of Psychiatry and Neurology'
          );

   $gas[] = array('NameTitle' => 'Michael  Pezzone,  MD, PhD, AGAF',
          'DoctorPage' => 'endocrinology.php',
          'PhotoName' => 'pezzone',
          'Hometown' => 'Newcastle and Pittsburgh, PA ',
          'Undergrad' => 'Cornell  University',
          'Medical' => 'University of Pittsburgh, School of Medicine',
          'Intern' => 'American  Board of Internal  Medicine and Gastroenterology and  Hepatology'
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
      <span class="h1">Welcome to The Villages Health <?php echo $carecenter['Location']; ?> Care Center</span>
      <div class="bolders">
        <?php 
        include ("includes/physicians-directory-inc.php");
        //include ("includes/patient-services-rep-inc.php");
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