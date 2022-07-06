<?php

# This is a simple kata with usage of if/else function
#if($distanceToPump/$mpg<=$fuelLeft) return true;
#else return false;


function zeroFuel($distanceToPump, $mpg, $fuelLeft) {
  return $distanceToPump/$mpg<=$fuelLeft ? true : false;
}


?>