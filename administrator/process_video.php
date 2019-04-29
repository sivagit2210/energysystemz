<?php
require_once("../config.php");
require_once("lib/dmlib.php");


//assign values
$flag = $_POST["flag"];

print_r($_POST);
//Post job
if($flag==1)
{
$youtubelink = $_POST["youtube_url"];
$image=$_FILES['video_file']['name'];
 if ($image) 
  {
	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['video_file']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
            $size=filesize($_FILES['video_file']['tmp_name']);
			$imagename=time().'.'.$extension;
			$newname="videos/".$imagename;
			$copied = copy($_FILES['video_file']['tmp_name'], $newname);
	  
	  $arrInsert->title = $_POST["txt_video_title"];
	  $arrInsert->video_name = $newname;	  
	  $arrInsert->active = "1";
	  $arrInsert->category = "video";
	  $value = insert_table($arrInsert,'svf_video');
	  $_SESSION['logmsg'] = "video added Successfully";  
      header("Location: videos.php");
	  
	}

	
 if($youtubelink)
 {
 	  $arrInsert->title = $_POST["txt_video_title"];;
	  $arrInsert->youtube_url = $_POST["youtube_url"];  
	  $arrInsert->active = "1";
	  $arrInsert->category = "youtube";
	  $value = insert_table($arrInsert,'svf_video');	  
	  $_SESSION['logmsg'] = "Video Added Successfully";  
      header("Location: videos.php");
 }
}

?>