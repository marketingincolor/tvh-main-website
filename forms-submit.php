<?php


function SendMail($to, $subject, $message, $cc = null, $bcc = null, $attach_fullpath_filename = null)
{
    $from = "no-reply@thevillages.com"; 
    $headers = "From: $from" . "\r\n";
    
    if (isset($cc))  $headers .= "Cc: $cc" . "\r\n";
    if (isset($bcc)) $headers .= "Bcc: $bcc" . "\r\n";
    
    if (isset($attach_fullpath_filename)) {
        if ($attach_fullpath_filename > "")  {
            $uid = md5(uniqid(time()));

            //$file_name_array = explode("/",$attach_fullpath_filename); 
            //$file_name = $file_name_array[count($file_name_array)-1];
            $file_name = $attach_fullpath_filename['name'];


            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type:multipart/mixed; boundary=\"{$uid}\"\r\n";

            # Build up the multi-part message
                            $msg = "This is a multi-part message in MIME format\r\n\n";
                            $msg .= "--{$uid}\r\n";		//Before cover message
                            $msg .= "Content-Type: text/plain; charset=\"iso8859-1\"\r\n";
                            $msg .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
                            $msg .= $message . "\r\n";		// the cover message
                            $msg .= "--{$uid}\r\n";		// between cover and PDF
                            $msg .= "Content-Type: application/octet-stream; ";
                            $msg .= "name=\"{$file_name}\"\r\n";
                            $msg .= "Content-Disposition: attachment; ";
                            $msg .= "filename=\"{$file_name}\"\r\n";
                            $msg .= "Content-Transfer-Encoding: base64\r\n\r\n";
                            $msg .= chunk_split(base64_encode(file_get_contents($attach_fullpath_filename['tmp_name']))) . "\r\n\n";
                            $msg .= "--{$uid}--\r\n";		// after PDF
            $message = $msg;
        }
    }
    $ok = @mail($to, $subject, $message, $headers); 
}        


$message = "";

// exclude these form fields
$exclude = "firstspot|formID|FormName|ReturnTo|simple_spc|website|currentPage|saveForm|idstamp|stats|clickOrEnter|CloseThis|";

$replace = array('q4_fullName' => 'Name','q4_fullName4' => 'Name'
				,'q16_dateOf' => 'Birthdate','q14_villagesId' => 'Villages ID'
				,'q10_address10' => 'Address', 'q13_address13'=> 'Address'
				,'q7_phoneNumber7' => 'Phone','q5_email5' => 'Email','q15_medicarePlans' => 'Medicare Plans'
				,'q11_othercommercialInsurance' => 'Other/Commercial Insurance'
				,'q9_preferredMethod' => 'Preferred Method of Contact', 'q14_iPrefer' => 'Preferred Method of Contact'
				,'q13_iWant' => 'Sent New Patient Forms By','q8_additionalComments' => 'Additional Comments'
				,'q15_bestTime'=> 'Best Time to Contact', 'q10_desiredPosition' => 'Desired Position'
				,'q17_howDid17' => 'How Did You Hear About Us', 'q18_other' => 'How Did You Hear About Us (Other)'
				,'q16_title'=> 'Title'
				,'ClassTitle'=>'Class Title', 'StartDate'=> 'Class Date', 'StartTime'=> 'Class Time'
				,'Field1'=>'Manager', 'Field2'=>'Employee Name', 'Field3'=>'Employee Email', 'Field104'=>'Role', 'Field105'=>'Facility', 'DateOfHire'=>'Date of Hire'
				,'q12_otherInsurance'=>'Other Insurance'
				,'group1' => 'Existing Patient', 'q10_doYou10' => 'Request Access to your secure only medical record?'
				,'q9_preferredMethod_other' => 'Other Preferred Method of Contact'
				,'VillageResident'=>'Village Resident', 'MedicareEligible'=>'Medicare Eligible'
				,'AnyoneElseMedicareEligible'=>'Is anyone else in your household eligible for Medicare?', 'WhoElse'=>'Who else is eligible for Medicare'
				,'careCenter'=>'Which Care Center location you will be visiting');
$split_key = array('q4_fullName'=> ',', 'q4_fullName4' => ','
				,'q16_dateOf' => '/'
				,'q7_phoneNumber7' => '-'
				,'Field106'=>'/'
				,'Phone'=> '-');

foreach ($_REQUEST as $key => $value) {
	${$key} = $value;

	if (!strpos($exclude, "|" . $key . "|")) {
		$display_name = $key;
		if (array_key_exists($key, $replace)) {
			$display_name = $replace[$key];
		}
		if (is_array(${$key})) {
			$split_by = ",";
			if (array_key_exists($key, $split_key)) {
				$split_by = $split_key[$key];
			}
			$message .= $display_name . ": " . implode($split_by,$$key) . "\r\n";
		}
		else {
			$message .= $display_name . ": " . $value . "\r\n";
		}
	}
}


$attach_file = "";
//print_r($_FILES);
//echo "file: " .  (is_array($_FILES['q12_pleaseAttach12']);
	$attach_file = $_FILES['q12_pleaseAttach12'];

// no form specified
	// code added to attempt to find out how a 'new form' is occurring
if (!isset($FormName)) {
	$FormName = "new form";
	$message .= ": buffers :"."\r\n";
	$increment = 0;
	$message .= $increment++;
		foreach ($_REQUEST as $key => $value) {
		$message .= $increment++;
		if (is_array(${$key})) {
			$split_by = ",";
			if (array_key_exists($key, $split_key)) {
				$split_by = $split_key[$key];
			}
			$message .= ": " . implode($split_by,$$key) . "\r\n";
		}
		else {
			$message .= ": " . $value . "\r\n";
		}
	}
}

/* 
To test email, comment out the recipients "$to" line and email will be sent to the default "$to" variable on line immediately below this comment
*/
$today = date("Y-m-d");
$to = "david.huffman@thevillagestsg.com";
$subject = "Web Form: " . $FormName;
#$bcc = 'david.huffman@thevillagestsg.com';

if ($FormName == "The Learning Center") {
	//$to = "awixted@health.usf.edu";
	$to = "Amy.Wixted@thevillageshealth.com";
	if ($ClassTitle == "Medicare Advantage Education") {
		$to = "david.huffman@thevillagestsg.com";
	}
}
if ($FormName == "Contact Us") {
	$to = "Beth.Garrett@thevillageshealth.com";
	/*if (($today >= "2015-09-25") && ($today <= "2015-10-04")) {
		$to="linda.arredondo@thevillageshealth.com";
	}*/
	#$to = "Cynthia.Bradley@thevillageshealth.com";
}
if ($FormName == "NewPatient") {
	//$to = "Stephanie.Rutledge@thevillageshealth.com, Beth.Garrett@thevillageshealth.com";
	$to = "Barbara.Oliver@thevillageshealth.com, Beth.Garrett@thevillageshealth.com";
}
if ($FormName == "Staff Jobs") {
	$to = "Lauriez@compasshrm.com";
}
if ($FormName == "Physician Jobs") {
	//$to = "Kathy.Lieffort@thevillageshealth.com";
	$to = "Shirley.ruttell@thevillageshealth.com";
}
if (($FormName == "eCW EMR") || ($FormName == "eCW") || ($FormName == "eCW Overview"))
{
	$to = "Mary.mort@thevillageshealth.com, theresa.pruna@thevillageshealth.com";
}
if ($FormName == "Free Insurance Checkup Request") {
	$to = "call.center@thevillageshealth.com";
	$bcc = "david.huffman@thevillagestsg.com, jparrish@marketingincolor.com";

	$message = "This person has requested information about getting an Insurance Checkup appointment at The Villages Health Care Center. Please contact as soon as possible by phone number provided. If phone contact is unsuccessful, try email as an alternate.\n\n" . $message;
}
if ($FormName == "MedicareReferred") {
	$to = $referredEmail;
	//$bcc = "jparrish@marketingincolor.com";

	// send unique message
	//$subject = $referredName . " referred you for a FREE Insureance Checkup";
	$subject = "Your friend " . $referrerName . " thought you might be interested";
	$message = "I signed up for an insurance checkup at The Villages Health:\nwww.thevillageshealth.com/medicare" . "\n" . "See what you think!";
	if ($OptionalMessage <> "") {
		$message .= "\n\n";
		$message .= "Message from " . $referredName . ": " . $OptionalMessage;
	}
}


if ($FormName != "new form")
{
	SendMail($to, $subject, $message, null, $bcc, $attach_file);
}


// Send confirmation email to submittor
if ($FormName == "NewPatient") {
	$patient_to = $_REQUEST["q5_email5"];
	$patient_subject = "The Villages Health Confirmation";
	$patient_message = "Thank you for submitting your information to The Villages Health. A member from our team will reach out to you in the next few days. In the meantime, please ensure that your information is correct.\r\n\r\n";
	$patient_message .= $message . "\r\n\r\n";
	$patient_message .= "If you have any questions, feel free to call us at 352-674-1700\r\n\r\n";
	$patient_message .= "We look forward to building a healthy relationship with you,\r\n\r\n";
	$patient_message .= "-The Villages Health";
	SendMail($patient_to, $patient_subject, $patient_message, null, null, null);
}
// Send confirmation email to submittor

if ($FormName == "The Learning Center") {
	$patient_to = $_REQUEST["Email"];
	//$patient_to = "david.huffman@thevillagestsg.com";
	$patient_subject = $_REQUEST["Field3"] . " Learning Center Confirmation";
	$patient_message = "Thank you for signing up! A proactive approach to your personal wellness is the key to good health.
Please find the information about your class below

{$ClassTitle}
{$StartDate} @ {$StartTime}
{$Location}

If you have any questions, feel free to call us at 352-753-6214

We look forward to building a healthy relationship with you,

-The Villages Health
	";
	SendMail($patient_to, $patient_subject, $patient_message, null, null, null);
}

/*
// **************** PATIENT CONFIRMATION EMAIL *** DISABLED **************
if ($FormName == "Free Insurance Checkup Request") {
	$medicare_to = $_REQUEST["q5_email5"];
	$medicare_subject = "Insurance Checkup Confirmation";
	$medicare_message = "Thanks again for requesting an insurance checkup with The Villages Health. We will contact you at our earliest opportunity about scheduling your appointment at " . $_REQUEST["careCenter"] . " Care Center. 

If you know of any Villager friends who may be interested in becoming a patient at The Villages Health and/or learning about Medicare Advantage, please visit this page to find out how you can send them information: http://thevillageshealth.com/medicare/refer.php 

Thank you! 
The Villages Health
";
	SendMail($medicare_to, $medicare_subject, $medicare_message, null, null, null);
}
*/

if (isset($ReturnTo)) {
?>
		<html>
			<body>
				<?php
					############ UPDATE LEARNING CENTER REGISTERED
					if ($FormName == "The Learning Center") {
						$classid = $ClassTitle . ":" . $Location . ":" . $StartDate . " " . $StartTime;
						$s = simplexml_load_file('learningcenter/attendance.xml');
						$classes = $s->xpath('//Class[ClassId="'.$classid.'"]');
						if (count($classes) > 0) {
							foreach($classes as $class) {
								$class->Registered = $class->Registered+1;
							}
						}
						else {
							# add node
							$classadd = $s->addChild('Class');
							$classadd->addChild('ClassId', $classid);
							$classadd->addChild('Registered', 1);
						}
						$s->saveXML('learningcenter/attendance.xml');
					}
				?>				

				<span style="font-family:'Levenim MT';">Thank you for your submission.</span>
				<form name='thanks' id='thanks' method='post' action="<?php echo $ReturnTo; ?>">
					<!--<input type='hidden' name='FormSubmitted' value=1>-->
					<?php
						if (!isset($CloseThis))  {
					?>
							<input type='submit' value='Return to The Villages Health'>
					<?php 
					}
						else {
					?>
							<input type='button' onClick='window.close();' value='Close this window'>
					<?php 
						}

					?>
				</form>
			</body>
		</html>
<?php
	//header("Location: {$ReturnTo}?FormSubmitted=1");
}
else {

	############ UPDATE LEARNING CENTER REGISTERED
	if ($FormName == "Free Insurance Checkup Request") {
		$s = simplexml_load_file('medicare/signup.xml');
			# add node
			$signupadd = $s->addChild('Registered');
			$signupadd->addChild('Name', $q4_fullName4);
			$signupadd->addChild('Email', $q5_email5);
			$signupadd->addChild('Phone', $q7_phoneNumber7);
			$signupadd->addChild('CareCenter', $careCenter);
		$s->saveXML('medicare/signup.xml');
	}
	if ($FormName == "MedicareReferred") {
		$s = simplexml_load_file('medicare/refer.xml');
			# add node
			$signupadd = $s->addChild('Referral');
			$signupadd->addChild('Referrer', $referrerName);
			$signupadd->addChild('ReferrerEmail', $referrerEmail);
			$signupadd->addChild('Referred', $referredName);
			$signupadd->addChild('ReferredEmail', $referredEmail);
		$s->saveXML('medicare/refer.xml');
	}


	$thankYouMessage = "Thank you for your submission.";
	if ($FormName == "NewPatient") { 
		$thankYouMessage = "Thank you for your interest in becoming a new patient of The Villages Health Care Centers. 
			<br><br>
			Members of our team will review your information and reach out to you in the next few days. 
			<br><br>
			We also have sent you an email confirmation for your records
			<br><br>
			We look forward to meeting you!";
	}
	if ($FormName == "Free Insurance Checkup Request") {
		//$thankYouMessage = 'Thank you for your request! We will contact you at our earliest opportunity.  If you know of any Villager friends who may be interested in learning about The Villages Health and Medicare Advantage, <b><a href="/medicare/refer.php" target="_parent">please click here.</a></b>';
		$thankYouMessage = 'Thank you for your submission!';
	}
	if ($FormName == "MedicareReferred") {
		$thankYouMessage = "Thank you, your message has been sent.  Have anyone else you'd like to refer?  <b><a href='/medicare/refer.php' target='_parent'>Just click here</a></b> to refresh this page and complete the form again to send to another friend!";

?>
	
<?php
	}
?>

	<br>
	<div id="FormDiv" style="-webkit-box-shadow: 0px 2px 5px -1px rgba(0,0,0,0.65); -moz-box-shadow: 0px 2px 5px -1px rgba(0,0,0,0.65); box-shadow: 0px 2px 5px -1px rgba(0,0,0,1.65); border:1px solid black; padding:7px;">
		<span style="font-family:'Levenim MT';"><?php echo $thankYouMessage; ?></span>
	</div>

	
<?php

	if ($FormName == "Free Insurance Checkup Request") {
		?>
		<script src="../jquery-1.9.1.js"></script>
		<script>
			$(document).ready(function () {
        		$("#SubmitThankYouDiv").innerHTML("Thank you for submitting");
        	});
		</script>
		<?php
	}
}
?>