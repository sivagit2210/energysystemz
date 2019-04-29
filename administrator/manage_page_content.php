<!--include header menu-->
<?php include("includes/header.php"); 
include("fckeditor/fckeditor.php") ;
require_once("lib/dmlib.php");
?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="10" style="height:426px;">
	<tr>
	<td width="15%" valign="top"><?php include("includes/menu.php");?></td>
	<td valign="top">
	<h2 class="heading_admin">Manage Pages</h2>
	
	<?php 
	$edit = @$_GET['edit'];	
	$category = @$_GET['cat'];
	
	if($edit)
	{
	  //$pagedata = get_page_by_id($edit);	  
	  //newpageform($pagedata,2);
	 
	 if($category != "general")
	 {
	   $page_details = get_page_by_id($edit);
	   $category = $page_details['title'];
	   $pageid = $edit;
	 }
	 else
	 {
	   $pageid =$edit;
	 }
	  $contents = get_page_contents($pageid);
	  $page_contents = $contents['page_contents'];
	  page_contents_form(3,$category,$pageid,$page_contents);
	}	
	else
	{	
	
	$pagelists = get_page_list();
	
	
	echo "<br><table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Page Name</th><th width='15%'>Category</th><th width='20%'>Edit Page Contents</th></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>1</td><td>Home</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=home'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>2</td><td>About Us</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=aboutus'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>3</td><td>Products</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=products'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>4</td><td>Services</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=services'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>5</td><td>Appointments</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=appointments'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>6</td><td>Media</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=media'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>7</td><td>Testimonials</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=testimonials'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>7</td><td>FAQ</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=faq'>Edit</a></td></tr>";
echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>8</td><td>Contact Us</td><td>General</td><td align='center'><a href='manage_page_content.php?cat=general&edit=contactus'>Edit</a></td></tr>";

		
	if($pagelists)
	 {
	    
		
		for($i=0;$i<count($pagelists);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+9)."</td><td>".$pagelists[$i]['title']."</td><td>".$pagelists[$i]['category']."</td><td align='center'><a href='manage_page_content.php?cat=dynamic&edit=".$pagelists[$i]['id']."'>Edit</a></td></tr>";
		   
		 }
	   
	 }
	 echo "</table>";
	 }
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
