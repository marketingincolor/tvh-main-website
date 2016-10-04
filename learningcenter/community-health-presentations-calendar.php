<?php
$presentation = array();

/* ***********************AUGUST ******************************/
$presentation[] = array("ClassName" => "The Villages Health 2016, presented by Dr. Elliot Sussman, Tom Menichino and Dr. Jeffrey Lowenkron",
                  "ClassTime" => "2016-01-19 13:30"
                  );
$presentation[] = array("ClassName" => "Healthy Weight Loss, presented by Dr. Frank Melidona",
                  "ClassTime" => "2016-02-23 13:30",
                  "PresenterImage" => "images/smdocs/melidona.jpg"
                  );
$presentation[] = array("ClassName" => "Nutrition, presented by Kristen Curtis, RD",
                  "ClassTime" => "2016-03-22 13:30"
                  );
$presentation[] = array("ClassName" => "Heart Health: Cholesterol and Blood Pressure, presented by Dr. Robert Reilly",
                  "ClassTime" => "2016-04-26 13:30",
                  "PresenterImage" => "images/smdocs/reilly.jpg"
                  );
$presentation[] = array("ClassName" => "Osteoporosis/Osteopenia, presented by Caroline Mathis, ARNP",
                  "ClassTime" => "2016-05-24 13:30",
                  "PresenterImage" => "images/smdocs/mathis.jpg"
                  );
$presentation[] = array("ClassName" => "Getting a Good Night’s Sleep, presented by Dr. Laura Cloukey",
                  "ClassTime" => "2016-06-28 13:30",
                  "PresenterImage" => "images/smdocs/cloukey.jpg"
                  );
$presentation[] = array("ClassName" => "Urinary Tract Infections, presented by Jacqueline Skotnicki, BSN CEN RN-BC",
                  "ClassTime" => "2016-07-26 13:30",
                  "PresenterImage" => "images/smdocs/skotnicki.jpg"
                  );
$presentation[] = array("ClassName" => "The Science of Alzheimer's Disease, presented by Dr. David Morgan",
                  "ClassTime" => "2016-08-23 13:30"
                  );
$presentation[] = array("ClassName" => "Suicide Awareness and Prevention, present by Joseph Sivak, MD, CPC",
                  "ClassTime" => "2016-09-27 13:30"
                  );
$presentation[] = array("ClassName" => "Advances in Robotic Surgery, presented by Nicole Bairossi, MD FACS",
                  "ClassTime" => "2016-10-25 13:30",
                  "PresenterImage" => "images/smdocs/bairossi.jpg"
                  );



      foreach ($presentation as $key => $value) {
            $PresentationDate[$key] = $value["ClassTime"];
      }

      array_multisort($PresentationDate, SORT_ASC, $presentation);
?>
