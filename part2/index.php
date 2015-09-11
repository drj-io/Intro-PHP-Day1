<?php


include('func.php');



$companies[] = array(
  "name" => "Madwire",
  "address" => "550 West Eisenhower Blvd",
  "city" => "Loveland",
  "state" => "CO",
  "zip" => "80537",
  "employees" => array('david','joe','jb','jerry')
    );
$companies[] = array(
  "name" => "IBM",
  "address" => "123 IBM Drive",
  "city" => "Boulder",
  "state" => "CO",
  "zip" => "80301",
  "employees" => array('mary','anne','jeff')
);
$companies[] = array(
  "name" => "HP",
  "address" => "123 HP Drive",
  "city" => "Fort Collins",
  "state" => "CO",
  "zip" => "80524",
  "employees" => array('bob','red','frank','phil','matt')
);
$companies[] = array(
  "name" => "Digital Globe",
  "address" => "123 DG Street",
  "city" => "Longmont",
  "state" => "CO",
  "zip" => "80501",
  "employees" => array('robert','aubrey')
);

 ?><!doctype html>
<html>
<head>

</head>
<body>
  <h1>Hi</h1>

  <table>
    <?php foreach($companies as $company) { ?>
      <tr>
        <td><?php print $company['name']; ?></td>
        <td><?php print $company['address']; ?></td>
        <td><?php print $company['city']; ?></td>
        <td><?php countEmployees($company['employees']); ?>
      </tr>
      <?php } ?>

  </table>


<style>
  table { width: 100%; }
  td { border: 1px solid black}

</style>

</body>


<?php



?>
