<?php

$host = "132.148.17.227";
$username = "avamerem_cbcDevTeam";
$password = "[g3iXlPr1@=J";
$db_name = "avamerem_custom_surveys";

try {
  $connect = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
//to handle connection error
catch(PDOException $exception){
  echo "Connection error: " . $exception->getMessage();
}
