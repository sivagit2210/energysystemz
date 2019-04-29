<!--include header menu-->
<?php include("includes/header.php"); 
include("fckeditor/fckeditor.php") ;
?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="10" style="height:426px;">
	<tr>
	<td width="15%" valign="top"><?php include("includes/menu.php");?></td>
	<td valign="top">
	
	
	<?php 
	$edit = @$_GET['edit'];
	$delete = @$_GET['delete'];
	$_SESSION['delmsg'] = '';
	if($edit)
	{
	  $articles_data = get_project_by_id($edit);	  
	  projects_form($articles_data,2);
	}	
	else
	{
	if($delete)
	{
	  delete_record_by_id('appointments',$delete);
	  $_SESSION['delmsg'] = 'Deleted Successfully.';
	 }
	if($_SESSION['delmsg']){
	 echo "<div align='center'>".$_SESSION['delmsg']."</div>";
	 $_SESSION['delmsg'] = '';	
	}
	?>
	
	<h2 class="heading_admin">Product Enquiry Details</h2>
	<?php
	$articlelist = get_appointment_lists();
	
	if($articlelist)
	 {
	    echo "<br><table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th width='20%'>Product Name</th><th width='12%'>Name</th><th width='10%'>Phone</th><th width='10%'>Email</th><th width='30%'>Comments</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($articlelist);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$articlelist[$i]['product_name']."</td><td>".$articlelist[$i]['name']."</td><td>".$articlelist[$i]['phone']."</td><td align='center'>".$articlelist[$i]['email']."</td><td align='left'>".$articlelist[$i]['comments']."</td><td align='center'><a onclick='return confirmSubmit()' href='appointments.php?delete=".$articlelist[$i]['id']."'>Delete</a></td></tr>";
		   
		 }
	   echo "</table>";
	 }
	 
	 }
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
