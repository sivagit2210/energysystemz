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
	<h2 class="heading_admin">Manage News & Events</h2>
	<br />
	<?php 
	$edit = @$_GET['edit'];
	$delete = @$_GET['delete'];
	
	if($edit)
	{
	  $news_data = get_news_by_id($edit);	  
	  news_form($news_data,2);
	}	
	else
	{
	if($delete)
	{
	  delete_record_by_id('svf_news',$delete);
	}
	
	
	$newslists = get_latest_news_list();
	
	if($newslists)
	 {
	    echo "<table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Title</th><th width='5%'>Edit</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($newslists);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$newslists[$i]['title']."</td><td><a href='news.php?edit=".$newslists[$i]['id']."'>Edit</a></td><td align='center'><a onclick='return confirmSubmit()' href='news.php?delete=".$newslists[$i]['id']."'>Delete</a></td></tr>";
		   
		 }
	   echo "</table>";
	 }
	 news_form(); 
	 }
	 
	 
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
