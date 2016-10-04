<?php
$screenings = array();

$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-04-06 08:00",
                  "ClassEnd" => "2016-04-06 12:00");
$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-04-13 08:00",
                  "ClassEnd" => "2016-04-13 11:00");

$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-05-12 10:00",
                  "ClassEnd" => "2016-05-12 12:00");
$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-05-23 08:00",
                  "ClassEnd" => "2016-05-23 10:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-05-31 10:00",
                  "ClassEnd" => "2016-05-31 12:00");

$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-06-06 14:00",
                  "ClassEnd" => "2016-06-06 16:00");
$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-06-20 08:00",
                  "ClassEnd" => "2016-06-20 10:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-06-21 10:00",
                  "ClassEnd" => "2016-06-21 12:00");

$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-07-11 08:00",
                  "ClassEnd" => "2016-07-11 10:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-07-19 09:30",
                  "ClassEnd" => "2016-07-19 11:30");
$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-07-28 08:00",
                  "ClassEnd" => "2016-07-28 10:00");

$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-08-01 08:00",
                  "ClassEnd" => "2016-08-01 10:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-08-16 09:30",
                  "ClassEnd" => "2016-08-16 11:30");
$screenings[] = array("CareCenter" => "Mulberry Grove",
                  "ClassTime" => "2016-08-24 12:00",
                  "ClassEnd" => "2016-08-24 14:00");

$screenings[] = array("CareCenter" => "Mulberry Grove",
                  "ClassTime" => "2016-09-15 11:00",
                  "ClassEnd" => "2016-09-15 13:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-09-27 09:30",
                  "ClassEnd" => "2016-09-27 11:30");
$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-09-21 09:00",
                  "ClassEnd" => "2016-09-21 11:00");

$screenings[] = array("CareCenter" => "Santa Barbara",
                  "ClassTime" => "2016-10-13 12:30",
                  "ClassEnd" => "2016-10-13 14:30");
$screenings[] = array("CareCenter" => "Creekside",
                  "ClassTime" => "2016-10-20 14:00",
                  "ClassEnd" => "2016-10-20 16:00");
$screenings[] = array("CareCenter" => "Pinellas",
                  "ClassTime" => "2016-10-25 09:30",
                  "ClassEnd" => "2016-10-25 11:30");

      foreach ($screenings as $key => $value) {
            $ClassDate[$key] = $value["ClassTime"];
      }

      array_multisort($ClassDate, SORT_ASC, $screenings);
?>
