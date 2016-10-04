<?php
  $carecenter = array('Name' => 'Creekside', 
            'Short' => 'creekside',
            'Location' => 'Creekside',
            'Address' => '1050 Old Camp Road, Building 100',
            'image' => 'cc_bldg_ creekside',
            'map_include' => 'creekside_info_and_map');
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
  $doctor[] = array('NameTitle' => 'Robert Reilly, MD, FACP – Medical Director',
          'DoctorPage' => 'reilly.php',
          'PhotoName' => 'reilly',
          'Hometown' => 'Long Island, New York',
          'Undergrad' => 'University of Notre Dame',
          'Medical' => 'State University of New York at Stony Brook School of Medicine',
          'Intern' => 'Stony Brook University Hospital',
          'Board' => 'American Board of Internal Medicine'
          );
  $doctor[] = array('NameTitle' => 'Joseph Hildner, MD, FAAFP – Director of Medical Affairs',
          'DoctorPage' => 'hildner.php',
          'PhotoName' => 'hildner',
          'Hometown' => 'Miami, Florida',
          'Undergrad' => 'University of Notre Dame',
          'Medical' => 'Loyola University of Chicago',
          'Intern' => 'Eastern Maine Medical Center',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Denise Kennedy, MD',
          'DoctorPage' => 'kennedy.php',
          'PhotoName' => 'kennedy',
          'Hometown' => 'Dayton, Ohio',
          'Undergrad' => 'Wright State University',
          'Medical' => 'Wright State University School of Medicine',
          'Intern' => 'Dayton Community Family Practice',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Smita Ojha, MD MS',
          'DoctorPage' => 'ojha.php',
          'PhotoName' => 'ojha_s',
          'Hometown' => 'Patna, India',
          'Undergrad' => 'Patna Women’s College, Patna University',
          'Medical' => 'Patna Medical College',
          'Intern' => 'Mayo/St. Cloud Hospital',
          'Board' => 'American Board of Family Medicine'
          );
  $doctor[] = array('NameTitle' => 'Mirko Roethlisberger, MD',
          'DoctorPage' => 'roethlisberger.php',
          'PhotoName' => 'roethlisberger',
          'Hometown' => 'Suyiers, Switzerland',
          'Undergrad' => 'University of Berne',
          'Medical' => 'University of Berne',
          'Intern' => 'University of Rochester',
          'Board' => 'American Board of Internal Medicine'
          );

   $doctor[] = array('NameTitle' => 'Ashley Wood, MD',
          'DoctorPage' => '.php',
          'PhotoName' => 'wood',
          'Hometown' => 'Rochester, NY',
          'Undergrad' => 'University of Virginia',
          'Medical' => 'Northwestern University Feinberg School of Medicine ',
          'Intern' => 'NH Dartmouth Family',
          'Board' => 'American Board of Family Medicine'
          );

    $doctor[] = array('NameTitle' => 'Sweny Gulati, MD',
          'DoctorPage' => '.php',
          'PhotoName' => 'sweny',
          'Hometown' => 'Lady Lake, FL',
          'Undergrad' => 'University of Florida',
          'Medical' => 'University of Florida, College of Medicine',
          'Intern' => 'UF Health Shands Hospital, University of Florida  Department of Medicine',
          'Board' => 'American Board of Internal  Medicine'
          );

      $doctor[] = array('NameTitle' => 'Jillian O’Neill as PSR',
          'DoctorPage' => '.php',
          'PhotoName' => 'jillian',
          'Hometown' => 'Suyiers, Switzerland',
          'Undergrad' => 'University of Berne',
          'Medical' => 'University of Berne',
          'Intern' => 'University of Rochester',
          'Board' => 'American Board of Internal Medicine'
          );
  $pa = array();
  $pa[] = array('NameTitle' => 'Karen Doyle, MPAS, PA-C',
          'DoctorPage' => '#.php',
          'PhotoName' => 'DoyleKarenPA',
          'Hometown' => 'Philadelphia, Pennsylvania',
          'Medical' => 'Hahnemann University, PA; University of Nebraska',
          'Board' => 'National Commission on Certification of Physician Assistants'
          );
  $rpn = array();
  $rpn[] = array('NameTitle' => 'Deborah Jones, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'JonesDeborahARNP',
          'Hometown' => 'Portland, Indiana',
          'Undergrad' => 'Ball State University',
          'Medical' => 'Ball State University, School of Nursing',
          'Board' => 'American Nurses Credentialing Center'
          );
  $rpn[] = array('NameTitle' => 'Jennifer Jordahl, MSN, ARNP-BC',
          'DoctorPage' => '#.php',
          'PhotoName' => 'JordahlJenniferARNP',
          'Hometown' => 'Clare, Michigan',
          'Undergrad' => 'Grand Valley State University',
          'Medical' => 'Grand Valley State University',
          'Board' => 'American Nurses Credentialing Center'
          );
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

  $audio[] = array('NameTitle' => 'Stephan Condill, AuD',
          'DoctorPage' => '.php',
          'PhotoName' => 'stephan',
          'Hometown' => 'Orlando, FL',
          'Undergrad' => 'University of Central Florida',
          'Medical' => 'University of South Florida',
          'Intern' => 'James A. Haley Veteran’s Administration Medical Center',
          'Board' => 'American Board of Audiology'
          );
  // $psr = array('NameTitle' => 'Susan Shaw',
  //         'DoctorPage' => '#.php',
  //         'PhotoName' => 'ShawSusan'
  //         );
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