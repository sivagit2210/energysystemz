<?php
require_once("../config.php");
//Insert table Values

$username = $_POST["txtusername"];
$password = $_POST["txtpassword"];

if($password)
{
$password = md5($password);
}

//check login validation
$check_username = mysql_query("SELECT * from univarr_user WHERE username='".$username."' and password='".$password."'");
$check_res = @mysql_fetch_array($check_username);
if($check_res)
{

  $_SESSION['username'] = $username;
  $_SESSION['userid'] = $check_res['id'];
 
  header("Location: home.php"); 
}
else
{
  $_SESSION['log_msg'] = "Invalid username / password";
  header("Location: index.php"); 
}
?>