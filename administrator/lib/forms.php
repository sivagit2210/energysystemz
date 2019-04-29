<?php


function createEditor($name,$value)
{
 	    $sBasePath = 'fckeditor/' ;
		$oFCKeditor = new FCKeditor($name) ;
		$oFCKeditor->BasePath	= $sBasePath ;
		$oFCKeditor->Config['AutoDetectLanguage']	= false ;
		$oFCKeditor->Config['DefaultLanguage']		= 'en';
		$oFCKeditor->Height = '350' ; 
		$oFCKeditor->Width = '550' ;
		//$oFCKeditor->ToolbarSet	= 'customtoolbarset' ;//FOR LIMITED TOOLBAR BUTTONS
		$oFCKeditor->Value		= $value;
		$oFCKeditor->Create() ;
}

 function newpageform($arrData='',$flag='1')
{
  
   echo " <form name='frmloginup' method='post' action='process_page.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Category</strong</td><td>:</td><td>".get_category(@$arrData['category'])."</td>
   </tr> <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txttitle' id='txttitle' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>  <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>
   <input type='hidden' name='updateid' value='".@$arrData['id']."'>
   <br>
   </form>";
   
   }
   
   function get_category($selvalue)
 {
    $arrOptions[0] = "Residential";
	$arrOptions[1] = "Commercial";
	
	$gender = "<select name='category' id='category'><option value='0'>Select</option>";
	for($i=0;$i<count($arrOptions);$i++)
	{
	   if($selvalue== $arrOptions[$i])
	   {
	      $gender .= "<option value='".$arrOptions[$i]."' selected='selected'>".$arrOptions[$i]."</option>";
	    }
	   else
	   {
	      $gender .= "<option value='".$arrOptions[$i]."'>".$arrOptions[$i]."</option>";
	    }
	  
	 }
    $gender .= "</select>";
	return $gender;
 }

function page_contents_form($flag,$category,$pageid,$pagecontents)
   {
   
     echo"
   <form name='frmsignup' method='post' action='process_page.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Page</strong></td><td>:</td><td>".$category."</td>
   </tr>  
   <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td>";
   
   createEditor('pagecontents',$pagecontents);
   
   echo "</td>
   </tr>
  <tr>
   <td colspan='3' align='center'>
   <input type='submit' name='btnregsubmit'  id='btnregsubmit' value='Submit' class='btnsubmit'>
   </td>
   </tr>
	</table>
	<input type='hidden' name='flag' value='".$flag."'>
	<input type='hidden' name='pageid' value='".$pageid."'>
	</form>
	";
	     
   }
   function infrastructure_photos($flag='4',$category='homeslideshow')
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_page.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
    <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txttitle' id='txttitle' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'></td>
   </tr> 
    <tr>
   <td><strong>Select Image</strong</td><td>:</td><td><input type='file' name='infraphoto'></td>
   </tr> 
   <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td><textarea rows='5' cols='70' name='desc'></textarea></td>
   </tr>
   <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'> 
   <input type='hidden' name='category' value='".$category."'> 
   <br>
   </form>";
   
   }
   
   function testimonial_form($arrData='',$flag='1')
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_testimonial.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Name</strong</td><td>:</td><td><input type='text' name='txtname' id='txtname' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>
   <tr>
   <td><strong>Company</strong</td><td>:</td><td><input type='text' name='txt_companyname' id='txt_companyname' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>
<tr>
   <td><strong>Select Photo</strong</td><td>:</td><td><input type='file' name='infraphoto'></td>
   </tr>    
    <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td><textarea rows='3' name='txt_description' id='txt_description' cols='40'></textarea></td>
   </tr> 
    <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>
   <input type='hidden' name='updateid' value='".@$arrData['id']."'>
   <br>
   </form>";
   
   }
   
    function newcertificate_form($arrData='',$flag='1')
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_certificates.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Name</strong</td><td>:</td><td><input type='text' name='txtname' id='txtname' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>
   <tr>
   <td><strong>Select Certificate</strong</td><td>:</td><td><input type='file' name='infraphoto'></td>
   </tr>    
    <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td><textarea rows='3' name='txt_description' id='txt_description' cols='40'></textarea></td>
   </tr> 
    <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>
   <input type='hidden' name='updateid' value='".@$arrData['id']."'>
   <br>
   </form>";
   
   }
   
   
   
   function projects_form($arrData='',$flag='1')
{
  
  $chkstatus = @$arrData['status'];
  if($chkstatus == 1)
  {
     $checked = "checked='checked'";
  }
  else
  {
     $checked = "";
  }
  
   echo " <form name='frmloginup' method='post' action='process_project.php' enctype='multipart/form-data'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txttitle' id='txttitle' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>
   <tr>
   <td><strong>Image</strong</td><td>:</td><td valign='top'><input type='file' name='art_image' id='art_image' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'>";
   
   if(@$arrData['image_name'])
   {
    echo "<br><img src='project_image/thumbs/".$arrData['image_name']."' height='100' width='100'>";
   }
   else
   {
   
   }
   
   echo "</td>
   </tr>   
    <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td>
   ";
   
   createEditor('article_content',@$arrData['description']);
   echo "
   
   </td>
   </tr> 
    <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>
   <input type='hidden' name='updateid' value='".@$arrData['id']."'>
   <br>
   </form>";
   
   }
   
   
 function news_form($arrData='',$flag='1')
{
  
  
  
   echo " <form name='frmloginup' method='post' action='process_news.php' enctype='multipart/form-data'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txttitle' id='txttitle' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35' value='".@$arrData['title']."'></td>
   </tr>
   <tr>
   <td><strong>News Date</strong></td><td>:</td><td><input type='text' name='dop' id='dop'><img src='../images/calendar.gif' onClick='javascript: fPopCalendar(\"dop\")' id='google_start_date_link' style='cursor:pointer;cursor:hand'></td>
   </tr>
   <tr>
   <td><strong>Image</strong</td><td>:</td><td valign='top'><input type='file' name='news_image' id='news_image' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'>";
   
   if(@$arrData['image_name'])
   {
    echo "<br><img src='news_image/thumbs/".$arrData['image_name']."' height='100' width='100'>";
   }
   else
   {
   
   }
   
   echo "</td>
   </tr>   
    <tr>
   <td valign='top'><strong>Description</strong</td><td valign='top'>:</td><td>
   ";
   
   createEditor('news_content',@$arrData['description']);
   echo "
   
   </td>
   </tr> 
    <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>
   <input type='hidden' name='updateid' value='".@$arrData['id']."'>
   <br>
   </form>";
   
   }
   
   
function advertisement_form($flag=1)
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_advertisement.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Size Category</strong</td><td>:</td><td>
	<select name='sizecategory'>
	<option value='234*60'>234*60</option>
	<option value='468*60'>468*60</option>
	<option value='720*90'>720*90</option>
   </select>
   </td>
   </tr> 
    <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txttitle' id='txttitle' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'></td>
   </tr> 
    <tr>
   <td><strong>Select Image</strong</td><td>:</td><td><input type='file' name='infraphoto'></td>
   </tr> 
   <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>  
   <br>
   </form>";
   
   }
   
   
function video_form($flag=1)
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_video.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>
   <tr>
   <td><strong>Size Category</strong</td><td>:</td><td>
	<select name='sizecategory' onchange='javascript:showhidevideo(this.value);'>
	<option value='upload'>Upload Video</option>
	<option value='youtube'>You Tube</option>
   </select>
   </td>
   </tr> 
    <tr>
   <td><strong>Title</strong</td><td>:</td><td><input type='text' name='txt_video_title' id='txt_video_title' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'></td>
   </tr> 
   <tr>
   <td colspan='3'>
   
   
   <table border='0' cellpadding='0' cellspacing='0' id='showvideo'>
   <tr>
   <td  width='95'><strong>Select Video</strong</td><td width='12'>:</td><td><input type='file' name='video_file' id='video_file'></td>
   </tr> 
   </table>
   
   <table border='0' cellpadding='0' cellspacing='0' id='showyoutube' style='display:none'>
   <tr>
   <td width='95'><strong>Youtube URL</strong</td><td width='12'>:</td><td><input type='text' name='youtube_url' id='youtube_url'></td>
   </tr> 
   </table>
   </td>
   </tr>
   <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>
   </table>
   <input type='hidden' name='flag' value='".$flag."'>  
   <br>
   </form>";
   
   }
   
function publication_form($flag=1)
{
  
   echo " <form name='frmloginup' method='post' enctype='multipart/form-data' action='process_publication.php'>
   <br>
   <table border='0' cellpadding='0' cellspacing='10'>   
   <tr>
   <td><strong>Book Title</strong</td><td>:</td><td><input type='text' name='txt_title' id='txt_title' class='txtinput' onfocus='this.className=\"txtinputfocus\"'  onblur='this.className=\"txtinput\"' size='35'></td>
   </tr>
   <tr>
   <td valign='top'><strong>Short Description</strong</td><td valign='top'>:</td><td>
   <textarea rows='2' cols='40' id='sDesc' name='sDesc'></textarea>
   </td>
   </tr>
   <tr>
   <td valign='top'><strong>Cover Image</strong</td><td valign='top'>:</td><td>
  <input type='file' name='infraphoto'>
   </td>
   </tr>
   <tr>
   <td valign='top'><strong>Book</strong</td><td valign='top'>:</td><td>
  <input type='file' name='book_file'>
   </td>
   </tr>
<tr>
   <td valign='top'><strong>Date of Publication</strong</td><td valign='top'>:</td><td>
  <input type='text' name='dop' id='dop'><img src='../images/calendar.gif' onClick='javascript: fPopCalendar(\"dop\")' id='google_start_date_link' style='cursor:pointer;cursor:hand'>
   </td>
   </tr> 
    <tr>
  <td colspan='3' align='center'>
   <input type='submit' name='btnlogsubmit'  id='btnlogsubmit' value='Submit' class='submitclass'>
   </td>
   </tr>    
   </table>
   <input type='hidden' name='flag' value='".$flag."'>  
   <br>
   </form>";
   
   }

?>