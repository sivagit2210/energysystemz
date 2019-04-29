<!--include header menu-->
<?php include("includes/header.php"); ?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="10" style="height:426px;">
	<tr>
	<td width="15%" valign="top"><?php include("includes/menu.php");?></td>
	<td valign="top">
	<h2 class="heading_admin">Manage Publications</h2>
	
	<?php 
	$delete = @$_GET['delete'];
	
	if($delete)
	{
	  delete_record_by_id('svf_publications',$delete);
	}	
	
	$publicationlists = get_publications_lists();
	
	if($publicationlists)
	 {
	    echo "<br><table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Title</th><th width='5%'>Show</th><th width='5%'>Category</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($publicationlists);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$publicationlists[$i]['book_title']."</td><td align='center'><input type='checkbox'></td><td align='center'>".$publicationlists[$i]['document_name']."</td><td align='center'><a href='publications.php?delete=".$publicationlists[$i]['id']."'>Delete</a></td></tr>";
		   
		 }
	   echo "</table>";
	 }
	 echo "<br><h2 class='heading_admin2'>Add New Book</h2>";
	publication_form(1);
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
