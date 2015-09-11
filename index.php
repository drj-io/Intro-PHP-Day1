<html>
<head>
</head>
<body>
<?php



  $companies=
    array(
      "madwire" => array(
          "name" => "Madwire",
          "address" => "550 West Eisenhower Blvd",
          "city" => "Loveland",
          "state" => "CO",
          "zip" => "80537",
          "employees" => array('david','joe','jb','jerry')
      )
    );
  $companies[] = array(
    "name" => "IBM",
    "address" => "123 IBM Drive",
    "city" => "Boulder",
    "state" => "CO",
    "zip" => "80301",
    "employees" => array('david','joe','jb','jerry')
  );
  $companies[] = array(
    "name" => "HP",
    "address" => "123 HP Drive",
    "city" => "Fort Collins",
    "state" => "CO",
    "zip" => "80524",
    "employees" => array('david','joe','jb','jerry')
  );
  $companies[] = array(
    "name" => "Digital Globe",
    "address" => "123 DG Street",
    "city" => "Longmont",
    "state" => "CO",
    "zip" => "80501",
    "employees" => array('david','joe','jb','jerry')
  );

  $x = "madwire";


  // bug fix
  print $companies[$x]['name'];
  print "<ul>";
  foreach($companies as $key => $company){
    print "<li>". $key .  " - " . $company['name'];

      print "<ul>";
      foreach($company['employees'] as $employee){


          print "<li>". $employee. "</li> \n";


      }
      print "</ul>";

    print "</li> \n";



  }
  ?> </ul> <?php

  print "<pre>".print_r($companies, true). "</pre>";


// http://prntscr.com/8ez16o


?>


</body>
