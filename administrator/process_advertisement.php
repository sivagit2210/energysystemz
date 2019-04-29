<?php
require_once("../config.php");
require_once("lib/dmlib.php");


//assign values
$flag = $_POST["flag"];


//Post job
if($flag==1)
{
 $arrInsert->title = $_POST["txttitle"];
 $imagewidth = $_POST["sizecategory"]; 
 $arrInsert->category =  $imagewidth;

if($imagewidth == "234*60")
{
 $thumbwidth = 234;
 $thumbheight = 60;
}
else if($imagewidth == "468*60")
{
  $thumbwidth = 468;
  $thumbheight = 60;
}
else if($imagewidth == "720*90")
{
  $thumbwidth = 720;
  $thumbheight = 90;
}


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
			$newname="advertisement_images/".$imagename;
			$copied = copy($_FILES['infraphoto']['tmp_name'], $newname);
			
		}
	createThumbs2("advertisement_images/","advertisement_images/thumbs/",$thumbwidth,$thumbheight,$imagename);
	$arrInsert->image_name = $imagename;    
	}

 //$arrInsert->image_name = $_POST["infraphoto"];

 $value = insert_table($arrInsert,'svf_advertisement_images');
 $_SESSION['logmsg'] = "Added Successfully";  
 header("Location: advertisment.php");
 }

?>