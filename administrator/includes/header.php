<?php require_once("../config.php"); 
      require_once("lib/forms.php");
	   require_once("lib/data.php");
	   require_once("lib/dmlib.php");
	   
	  if(@$_SESSION['username'] || @$_SESSION['userid'])
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Energy Systems - Administrator</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/common.js"></script>
<style type="text/css" media="all">
@import url(../css/cwcalendar.css);
</style>
    <script type="text/javascript" src="../js/calendar.js"></script>
</head>
<body>
<div class="maindiv">
	 <table border="0" width="100%" cellpadding="0" cellspacing="0">
   	  <tr>
   	  <td class="banner_bg">
   	  <table border="0" width="100%">
	  <tr>
	  <td>
	  <div class="hdmain-logo"><img src="images/logo.png" /></div>
	  </td>
	  <td align="right" style="color:#FFF;" width="40%">
	  Logged as: <?php echo $_SESSION['username'];?>(
	  <a href="logout.php" style="color:#FFF;">Logout</a> &nbsp;)
	  
	  <td>
	  </tr>
	  </table>
	</tr>
	
<?php 

}
else
{
    header("Location: index.php");
}
?>
