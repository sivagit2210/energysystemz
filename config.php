<?php
// Database connection details
$db_username = "energysy_energy1";
$db_password = "Enery123#";
$database = "energysy_energy1";
$hostname = "localhost";
require_once('includes/db-conn.php');
//require_once("lib/dmlib.php");
db_conn($db_username,$db_password,$database,$hostname);
@session_start();

?>