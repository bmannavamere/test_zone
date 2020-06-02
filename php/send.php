<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_config.php';

// Create a new record in the database.

if(isset($_POST["user_id"]))
{

  $user_id       = $_POST["user_id"];
  $strengths     = implode(", ", $_POST["strengths"]);
  $weaknesses    = implode(", ", $_POST["weaknesses"]);
  $opportunities = implode(", ", $_POST["opportunities"]);
  $threats       = implode(", ", $_POST["threats"]);

  // https://www.w3schools.com/php/php_mysql_prepared_statements.asp
  // prepare sql and bind parameters
  $stmt = $connect->prepare("INSERT INTO exec_swot_survey (user_id, strengths, weaknesses, opportunities, threats)
                             VALUES (:user_id, :strengths, :weaknesses, :opportunities, :threats)");

  $stmt->bindParam(':user_id', $user_id);
  $stmt->bindParam(':strengths', $strengths);
  $stmt->bindParam(':weaknesses', $weaknesses);
  $stmt->bindParam(':opportunities', $opportunities);
  $stmt->bindParam(':threats', $threats);

  // insert a row
  $status = $stmt->execute();

  if ($status) {
     echo 'success';
  } else {
     echo 'failure';
  }
}
