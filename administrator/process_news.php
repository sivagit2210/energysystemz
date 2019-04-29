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
$arrInsert->description = addslashes($_POST['news_content']);
$arrInsert->active = 1;
$arrInsert->publish_date = date("Y-m-d");
$image=$_FILES['news_image']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['news_image']['name']);
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
		    $size=filesize($_FILES['news_image']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="news_image/".$imagename;
			$copied = copy($_FILES['news_image']['tmp_name'], $newname);
			
		}
	createThumbs("news_image/","news_image/thumbs/",100,$imagename);
	$arrInsert->image_name = $imagename;    
	}

$value = insert_table($arrInsert,'svf_news');
 $_SESSION['logmsg'] = "News added Successfully";  
header("Location: news.php");
 }
 else if($flag==2)
 {
 //print_r($_POST);
//get post data
 $update_id = $_POST["updateid"];
$arrInsert->title = addslashes ($_POST['txttitle']);
$arrInsert->description = addslashes ($_POST['news_content']);
$image=$_FILES['news_image']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['news_image']['name']);
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
		    $size=filesize($_FILES['news_image']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="news_image/".$imagename;
			$copied = copy($_FILES['news_image']['tmp_name'], $newname);
			
		}
	createThumbs("news_image/","news_image/thumbs/",100,$imagename);
	$arrInsert->image_name = $imagename;    
	}
 
 if($update_id)
 {
   update_table($arrInsert,'svf_news',$update_id);
 }
  $_SESSION['logmsg'] = "Article updated Successfully";  
 header("Location: news.php");
 }
 
?>