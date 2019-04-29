<?php
require_once("config.php");
require_once("administrator/lib/dmlib.php");


//assign values
$flag = $_GET["flag"];

if($flag == 2){

 $arrInsert->product_name = addslashes($_POST["txt_proname"]);
 $arrInsert->name = addslashes($_POST["txt_name"]);
 $arrInsert->email = addslashes($_POST["txt_email"]);
 $arrInsert->phone = addslashes($_POST["txt_phone"]);
 $arrInsert->comments = addslashes($_POST["txt_notes"]);
 $arrInsert->appointment_date = date();
 $arrInsert->status = 1;

$value = insert_table($arrInsert,'appointments');

$_SESSION['logmsg'] = "Dear  $arrInsert->name, <br> <br>Your product request has been sent successfully. Our representative will give the call to you and clarify your comments / Query. <br><br> Thank you"; 

header("Location: appointments.php");
}

 ?>