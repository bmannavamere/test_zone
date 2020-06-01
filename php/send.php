<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db_config.php';

// Create a new testimonial record in the database.

if(isset($_POST["user_id"]))
{
  $user_id       = $_POST["user_id"];
  $strengths     = $_POST["s"];
  $weaknesses    = $_POST["w"];
  $opportunities = $_POST["o"];
  $threats       = $_POST["t"];

  // https://www.w3schools.com/php/php_mysql_prepared_statements.asp
  // prepare sql and bind parameters
  $stmt = $connect->prepare("INSERT INTO exec_swot_survey (user_id, strengths, weaknesses, opportunities, threats)
                             VALUES (:user_id, :strengths, :weaknesses, :opportunities, :threats)");

  $stmt->bindParam(':user_id', $user_id);
  $stmt->bindParam(':strengths', $strengths);
  $stmt->bindParam(':testimony', $testimony);
  $stmt->bindParam(':communityID', $communityID);
  $stmt->bindParam(':active', $active);

  // insert a row
  $status = $stmt->execute();

  if ($status) {
     echo 'success';
  } else {
     echo 'failure';
  }
}
