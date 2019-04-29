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
$arrInsert->name = addslashes($_POST['txtname']);
$arrInsert->desc_comments = addslashes($_POST['txt_description']);;
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
			$newname="certificateimages/".$imagename;
			$copied = copy($_FILES['infraphoto']['tmp_name'], $newname);
			
		}
	createThumbs("certificateimages/","thumbs/",100,$imagename);
	$arrInsert->photo_name = $imagename;    
	}

$value = insert_table($arrInsert,'es_certificate');
 $_SESSION['logmsg'] = "Certificate added Successfully";  
header("Location: certificates.php");
 }
 
 
?>