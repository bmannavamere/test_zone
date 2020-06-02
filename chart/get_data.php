<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../php/db_config.php';

// Get records
$getData = "SELECT * FROM exec_swot_survey";
$query = $connect->prepare($getData);
$query->execute();
$datas = $query->fetchAll();

// echo "<pre>";
//   print_r($datas);
// echo "</pre>";

$strengths = [];
foreach ($datas as $data) {
  // echo $data['strengths'].'<br><hr>';
  array_push($strengths, $data['strengths']);
}

echo "<pre>";
  print_r($strengths);
echo "</pre>";


// $result = array_unique($strengths);
$countMe = array_count_values($strengths);

echo "<pre>";
  print_r($countMe);
echo "</pre>";


// $returnMe = json_encode(array_values($strengths));
// echo $returnMe;


// echo $data;

// $dataJSON = json_encode($data);

// $output = "";
//
// // Make a default selected empty option
// $output .= '<option disabled selected value> -- select an option -- </option>';
//
// // Put each distinct community name in the select with the val being the comm ID.
// foreach ($data as $key => $value) {
//   $output .= '<option class="community" value='.$value['communityID'].'>'.$value['comm_name'].'</option>';
// }
//
// echo $output;
