<?php 
/*Actual filename = 'attachment.zip' (Unknown to the viewers). 
When downloaded to be saved as 'mydownload.zip'. 
*/ 
$filename='ES_Catalog.zip'; 
@header("Content-type: application/zip"); 
@header("Content-Disposition: attachment; filename=$filename"); 
echo file_get_contents('ES_Catalog.zip'); 
?>