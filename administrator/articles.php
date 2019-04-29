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
	<h2 class="heading_admin">Manage Articles</h2>
	
	<?php 
	$edit = @$_GET['edit'];
	$delete = @$_GET['delete'];
	
	if($edit)
	{
	  $articles_data = get_article_by_id($edit);	  
	  articles_form($articles_data,2);
	}	
	else
	{
	if($delete)
	{
	  delete_record_by_id('svf_articles',$delete);
	}
	articles_form(); 
	
	$articlelist = get_articles_list();
	
	if($articlelist)
	 {
	    echo "<table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Title</th><th width='5%'>Edit</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($articlelist);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$articlelist[$i]['title']."</td><td><a href='articles.php?edit=".$articlelist[$i]['id']."'>Edit</a></td><td align='center'><a href='articles.php?delete=".$articlelist[$i]['id']."'>Delete</a></td></tr>";
		   
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
