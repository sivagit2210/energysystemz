<?php
require_once("../config.php");
require_once("lib/dmlib.php");


//assign values
$flag = $_POST["flag"];


//Post job
if($flag==1)
{
 $arrInsert->book_title = $_POST["txt_title"];
 $arrInsert->short_description = $_POST["sDesc"];
 $arrInsert->active = 1; 
 $arrInsert->publish_date =  date("y-m-d",strtotime($_POST["dop"]));

  $thumbwidth = 100;
  $thumbheight = 100;

 //Save Book
 $pub_file =  $_FILES['book_file']['name'];
 if ($pub_file) 
  {
        $arrInsert->document_name = stripslashes($_FILES['book_file']['name']);
	    //get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['book_file']['name']);
 	    //get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		$size=filesize($_FILES['book_file']['tmp_name']);
		$bookname=time().'.'.$extension;
		$newname="publications/".$bookname;
		$copied = copy($_FILES['book_file']['tmp_name'], $newname);
		$arrInsert->file_name = $bookname;    
  }


//Save Cover Image
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
			$newname="book_covers/".$imagename;
			$copied = copy($_FILES['infraphoto']['tmp_name'], $newname);
			
		}
	createThumbs2("book_covers/","book_covers/thumbs/",$thumbwidth,$thumbheight,$imagename);
	$arrInsert->cover_image = $imagename;    
	}

 //$arrInsert->image_name = $_POST["infraphoto"];

 $value = insert_table($arrInsert,'svf_publications');
 $_SESSION['logmsg'] = "Added Successfully";  
header("Location: publications.php");
 }

?>