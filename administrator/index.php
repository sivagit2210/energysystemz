<!--include header menu-->
<?php include("includes/header_login.php"); ?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="50" style="height:426px;">
	<tr>
	<td width="50%"><img src="images/logo.png" /></td>
	<td align="center">
	<span><?php echo @$_SESSION['log_msg']; ?></span>
	<br />
	<form name="frmlogin" method="post" action="processlogin.php">
	<table border="0" class="tbllogin" cellpadding="0" cellspacing="10" style="color:#FFF;">
	<tr>
	<td colspan="2"><strong>Administrator Login</strong></td>	
	</tr>
	<tr>
	<td><strong>Username</strong></td>
	<td><input type="text" name="txtusername" id="txtusername"  class="txtinput" onblur="this.className='txtinput'" onfocus="this.className='txtinputfocus'"/></td>
	</tr>
	<tr>
	<td><strong>Password</strong></td>
	<td><input type="password" name="txtpassword" id="txtpassword" class="txtinput" onblur="this.className='txtinput'" onfocus="this.className='txtinputfocus'"/></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="btnsubmit" value="Submit" class="submitclass"/></td></tr>
	</table>
	</form>
	<?php $_SESSION['log_msg']=""; ?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
