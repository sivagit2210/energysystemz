<?php
require_once("../config.php");
require_once("lib/dmlib.php");


//assign values
$flag = $_POST["flag"];


//Post job
if($flag==1)
{
 $arrInsert->category = $_POST["category"];
 $arrInsert->title = $_POST["txttitle"];
 $arrInsert->display_order = 1;
 $value = insert_table($arrInsert,'univarr_pages');
 $_SESSION['logmsg'] = "Page created Successfully";  
 header("Location: manage_page.php");
 }
 else if($flag==2)
 {  
 $update_id = $_POST["updateid"];
 $arrInsert->category = $_POST["category"];
 $arrInsert->title = $_POST["txttitle"];
 update_table($arrInsert,'univarr_pages',$update_id);
 $_SESSION['logmsg'] = "Page Updated Successfully";  
 header("Location: manage_page.php");  
 }
 else if($flag==3)
 {  
 $id = $_POST["pageid"];
 $arrInsert->page_id = $id;
 $arrInsert->page_contents = addslashes($_POST["pagecontents"]);
 
 $check_exists = mysql_query("SELECT * from univarr_page_contents WHERE page_id='".$id."'");
 $check_res = @mysql_fetch_array($check_exists);
 if($check_res)
 {
   $update_id = $check_res['id'];
   update_table($arrInsert,'univarr_page_contents',$update_id);  
   header("Location: manage_page_content.php"); 
	
	}
 else
 {   
	 $value = insert_table($arrInsert,'univarr_page_contents');
	  header("Location: manage_page_content.php"); 
		 
		 }
 //update_table($arrInsert,'univarr_pages',$update_id);
 //$_SESSION['logmsg'] = "Page Updated Successfully";  
 //header("Location: manage_page.php");  
 }
else if($flag==4)
{
 $arrInsert->title = $_POST["txttitle"];
 $arrInsert->photo_description = $_POST["desc"];
 $image=$_FILES['infraphoto']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['infraphoto']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			echo '<h1>Unknown extension!</h1>';
 			$errors=1;
 		}
 		else
 		{
		    $size=filesize($_FILES['infraphoto']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="slideshowimages/".$imagename;
			$copied = copy($_FILES['infraphoto']['tmp_name'], $newname);
			
		}
	createThumbs("slideshowimages/","slideshowimages/thumbs/",100,$imagename);
	
	if(homeslideshow == "")
	{
	  createThumbs2("slideshowimages/","slideshowimages/middle_thumb/",770,340,$imagename);
	}
	else
	{
	  createThumbs2("slideshowimages/","slideshowimages/middle_thumb/",770,340,$imagename);
	}
	
	
	$arrInsert->image_name = $imagename;    
	}

 //$arrInsert->image_name = $_POST["infraphoto"];
 $arrInsert->category = $_POST["category"];
 $value = insert_table($arrInsert,'ourlook_photos');

 header("Location: slide_show.php?cat=".$arrInsert->category);
 }

?>