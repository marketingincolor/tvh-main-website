<?php
$health = array();
$DescMatterOfBalance = "Boston University's A Matter of Balance program consists of eight 2-hour classes that can meet once a week for 8 weeks or twice a week for 4 weeks. The class is composed of discussion around fall hazards and fall prevention, and in classes 3 - 8, balance exercises are also performed.";
$DescDiabetes = "The Centers for Disease Control and Prevention-led National Diabetes Prevention Program is an evidence-based lifestyle change program for preventing type 2 diabetes. The year-long program helps participants make real lifestyle changes such as eating healthier, including physical activity into their daily lives, and improving problem-solving and coping skills. Participants meet with a trained lifestyle coach and a small group of people who are making lifestyle changes to prevent diabetes. Sessions are weekly for 4 months and twice a month for 4 months, and then monthly for 4 months. This proven program can help people with prediabetes and/or at risk for type 2 diabetes make achievable and realistic lifestyle changes and cut their risk of developing type 2 diabetes by 70%.";
$DescChronic = "Stanford University's nationally-recognized, evidence-based program for individuals with chronic disease is a six-week course that meets weekly for 2.5 hours each session. Join others dealing with chronic conditions to discuss how to eat better, exercise, reduce stress, and improve communication with your health care team.";
$DescEatHealthyBeActive = "The Center for Disease Control and Prevention's Eat Healthy, Be Active program is a six week program covering a variety of nutrition and physical activity topics while focusing on skill-building techniques.";

/* ***********************AUGUST ******************************/
$health[] = array("CareCenter" => "Where?",
                  "ClassName" => "A Matter of Balance",
                  "ClassDesc" => $DescMatterOfBalance,
                  "ClassTime" => array("2016-08-04 08:30","2016-08-11 08:30","2016-08-18 08:30","2016-08-25 08:30","2016-09-02 08:30","2016-09-09 08:30","2016-09-16 08:30","2016-09-23 08:30"),
                  "Image" => "images/a-matter-of-balance.png"
                  );
$health[] = array("CareCenter" => "Where?",
                  "ClassName" => "The National Diabetes Prevention Program",
                  "ClassDesc" => $DescDiabetes,
                  "ClassTime" => array("2016-08-06 08:30"),
                  "Image" => "images/NDPPlogo.png"
                  );
$health[] = array("CareCenter" => "Where?",
                  "ClassName" => "Chronic Disease Self-Management Program",
                  "ClassDesc" => $DescChronic,
                  "ClassTime" => array("2016-08-06 18:30"),
                  "Image" => "images/chronic conditions_0.png"
                  );
$health[] = array("CareCenter" => "Where?",
                  "ClassName" => "Eat Healthy, Be Active",
                  "ClassDesc" => $DescEatHealthyBeActive,
                  "ClassTime" => array("2016-08-14 12:30"),
                  "Image" => "images/eatHealthyBeActive.png"
                  );
/*$health[] = array("CareCenter" => "Where?",
                  "ClassName" => "Eat Healthy, Be Active",
                  "ClassDesc" => $DescEatHealthyBeActive,
                  "ClassTime" => array("2016-09-14 12:30"),
                  "Image" => "images/eatHealthyBeActive.png"
                  );
*/


      foreach ($health as $key => $value) {
            $HealthDate[$key] = $value["ClassTime"][0];
      }

      array_multisort($HealthDate, SORT_ASC, $health);
?>
