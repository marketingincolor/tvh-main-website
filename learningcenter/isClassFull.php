<?php
  # Check to see if Class is Full
  function isClassFull($classid, $classes)
  {
    $maxClassSize = 12;

    $classfull = 0;
    if (count($classes > 0)) {
      foreach($classes as $class) {
        if ($class->Registered >= $maxClassSize) {
          $classfull = 1;
        } 
      }
    }

    return $classfull;
  }
?>