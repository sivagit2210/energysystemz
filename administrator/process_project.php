<?php
require_once("../config.php");
require_once("lib/dmlib.php");


//assign values
$flag = $_POST["flag"];

//Post job
if($flag==1)
{
//print_r($_POST);
//get post data
$arrInsert->title = addslashes($_POST['txttitle']);
$arrInsert->description = addslashes($_POST['article_content']);
$arrInsert->status = 0;
$arrInsert->publish_date = date("Y-m-d");

$image=$_FILES['art_image']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['art_image']['name']);
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
		    $size=filesize($_FILES['art_image']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="project_image/".$imagename;
			$copied = copy($_FILES['art_image']['tmp_name'], $newname);
			
		}
	createThumbs("project_image/","project_image/thumbs/",100,$imagename);
	$arrInsert->image_name = $imagename;    
	}

$value = insert_table($arrInsert,'outlook_projects');
 $_SESSION['logmsg'] = "Product added Successfully";  
@header("Location: projects.php");
 }
 else if($flag==2)
 {
 //print_r($_POST);
//get post data
 $update_id = $_POST["updateid"];
$arrInsert->title = addslashes ($_POST['txttitle']);
$arrInsert->description = addslashes ($_POST['article_content']);
$image=$_FILES['art_image']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['art_image']['name']);
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
		    $size=filesize($_FILES['art_image']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="project_image/".$imagename;
			$copied = copy($_FILES['art_image']['tmp_name'], $newname);
			
		}
	createThumbs("project_image/","project_image/thumbs/",100,$imagename);
	$arrInsert->image_name = $imagename;    
	}
 
 if($update_id)
 {
   update_table($arrInsert,'outlook_projects',$update_id);
 }
  $_SESSION['logmsg'] = "Project details updated Successfully";  
 header("Location: projects.php");
 }
 
?>