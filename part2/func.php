<?php

function countEmployees($employees){


    $count = 0;
    foreach($employees as $employee){

      $count++;
    }
    print $count;

}
function countEmployees2($employees){


  return count($employees);

}
function capName($employee){

  return ucfirst($employee);


}
