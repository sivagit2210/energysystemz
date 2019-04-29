<?php
function get_page_list()
{
$pagelist ="";
  $pagelists = mysql_query("SELECT * from univarr_pages");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 function get_Testimonials_list()
{
$pagelist ="";
  $pagelists = mysql_query("SELECT * from testimonials");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
  function get_Testimonials_Latest()
{
$pagelist ="";
  $pagelists = mysql_query("select * from testimonials order by id desc limit 0,3");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
  function get_Certificates()
{
$pagelist ="";
  $pagelists = mysql_query("select * from es_certificate order by id desc limit 0,5");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
  
  function get_medianews_Latest()
{
$pagelist ="";
  $pagelists = mysql_query("select * from svf_news order by id desc limit 0,5");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
 
 
 function get_project_list()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from outlook_projects order by id desc");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }
 
  function get_latest_product()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from outlook_projects order by id desc limit 0,6");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }
 
 
  function get_appointment_lists()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from appointments order by appointment_date desc");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }
 
 
 
  function get_latest_news_list()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from svf_news");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }
 
   function get_latest_top2news()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from svf_news order by id desc limit 0,3");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }

 
function get_latest_news_list_by_active($value)
{
  $newslist ="";
  $newslists = mysql_query("SELECT * from svf_news where active=".$value);
   while ($row = mysql_fetch_assoc($newslists)) {
   $newslist[] =  $row;
}
  return $newslist;
 
 }
 
 
 function get_latest_news_list_top5($value)
{
  $newslist ="";
  $newslists = mysql_query("SELECT * from svf_news where active=".$value." order by id desc limit 5");
   while ($row = mysql_fetch_assoc($newslists)) {
   $newslist[] =  $row;
}
  return $newslist;
 
 }
 
 
function get_featured_articles_list()
{
$articlelist ="";
  $articlelists = mysql_query("SELECT * from svf_articles order by id asc limit 4");
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist;
 
 }
 
 function get_project_by_id($id)
 {
   $pagelists = mysql_query("SELECT * from outlook_projects where id='".$id."'");
   $data = mysql_fetch_assoc($pagelists);
   return $data;
 }
 
  function get_news_by_id($id)
 {
   $newslists = mysql_query("SELECT * from svf_news where id='".$id."'");
   $data = mysql_fetch_assoc($newslists);
   return $data;
 }
 
 function get_page_by_id($id)
 {
   $pagelists = mysql_query("SELECT * from univarr_pages where id='".$id."'");
   $data = mysql_fetch_assoc($pagelists);
   return $data;
 }
 
 function get_product_name($id)
 {
   $pagelists = mysql_query("SELECT title from outlook_projects where id='".$id."'");
   $data = mysql_fetch_assoc($pagelists);
   return $data;
 }
 
  function get_page_by_category($category)
 {
   $pagelist ="";
   $pagelists = mysql_query("SELECT * from univarr_pages where category='".$category."'");   
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
   return $pagelist;
 }
 
 function get_product_page()
 {
   $pagelist ="";
   $pagelists = mysql_query("SELECT * from univarr_pages");   
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
   return $pagelist;
 }
 
 function get_photo_list($category)
{
 $pagelist =""; 
 $pagelists = mysql_query("SELECT * from ourlook_photos where category='".$category."'");

   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
  function get_advertisment_images_lists()
{
 $pagelist =""; 
 $pagelists = mysql_query("SELECT * from svf_advertisement_images");
   while ($row = mysql_fetch_assoc($pagelists)) {
   $pagelist[] =  $row;
}
  return $pagelist;
 
 }
 
   function get_videos_lists()
{
   $videolist =""; 
   $videolists = mysql_query("SELECT * from svf_video");
   while ($row = mysql_fetch_assoc($videolists)) {
   $videolist[] =  $row;
}
  return $videolist;
 
 }
 
 function get_archieves_year($tblname)
{   
  $articlelist ="";
  $articlelists = @mysql_query("select distinct(year(publish_date)) as pyear from ".$tblname." order by publish_date asc");
   while ($row = @mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist; 
 }
 
  function get_archieves_month($year,$tblname)
{
  $articlelist ="";
  $articlelists = mysql_query("select distinct(month(publish_date)) as pmonth from ".$tblname." where year(publish_date) = ".$year);
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist; 
 }
 
   function get_archieves_month_year($year,$month,$tblname)
{
  $articlelist ="";
  $articlelists = mysql_query("select * from ".$tblname." where year(publish_date) = ".$year." and month(publish_date)=".$month);
   while ($row = mysql_fetch_assoc($articlelists)) {
   $articlelist[] =  $row;
}
  return $articlelist; 
 }
 
 function getmonth_by_id($month)
 {
  $arrMonth[1] = "Jan";
  $arrMonth[2] = "Feb";
  $arrMonth[3] = "Mar";
  $arrMonth[4] = "Apr";
  $arrMonth[5] = "May";
  $arrMonth[6] = "June";
  $arrMonth[7] = "July";
  $arrMonth[8] = "Aug";
  $arrMonth[9] = "Sep";
  $arrMonth[10] = "Oct";
  $arrMonth[11] = "Nov";
  $arrMonth[12] = "Dec";
  return $arrMonth[$month];
 }


function get_advertisement_by_random($category)
 {
   $advlists = mysql_query("select * from svf_advertisement_images where category='".$category."' ORDER BY Rand() LIMIT 1");
   $data = mysql_fetch_assoc($advlists);
   return $data;
 }
 
 function get_popular_items()
{
  $popularlist ="";
  $popularlists = mysql_query("select * from svf_popular_items_hits where category in('news','article') and item_id !='-1'  order by hit_count desc limit 5 ");
   while ($row = mysql_fetch_assoc($popularlists)) {
   $popularlist[] =  $row;
}
  return $popularlist; 
 }
 
 function get_comments_count($item_id,$category)
 {
   $commentscount = mysql_query("select count(*) as totcomments from svf_comments where item_id='".$item_id."' and category='".$category."'");
   $data = mysql_fetch_assoc($commentscount);
   return $data;
 }
 
 function get_comments_by_category($item_id,$category)
 { 
  $commentslist ="";
  $commentslists = mysql_query("select * from svf_comments where item_id='".$item_id."' and category='".$category."'");
   while ($row = mysql_fetch_assoc($commentslists)) {
   $commentslist[] =  $row;
}
  return $commentslist; 
   
 }
 
    function get_videos_lists_active()
{
   $videolist =""; 
   $videolists = mysql_query("SELECT * from svf_video where active=1");
   while ($row = mysql_fetch_assoc($videolists)) {
   $videolist[] =  $row;
}
  return $videolist;
 
 }
 
 function get_publications_lists()
{
   $booklist =""; 
   $booklists = mysql_query("SELECT * from svf_publications");
   while ($row = mysql_fetch_assoc($booklists)) {
   $booklist[] =  $row;
}
  return $booklist;
 
 }
 
 function get_publications_lists_by_active()
{
   $booklist =""; 
   $booklists = mysql_query("SELECT * from svf_publications where active='1'");
   while ($row = mysql_fetch_assoc($booklists)) {
   $booklist[] =  $row;
}
  return $booklist;
 
 }
 
  function get_publication_by_id($id)
 {
   $pagelists = mysql_query("SELECT * from svf_publications where id='".$id."'");
   $data = mysql_fetch_assoc($pagelists);
   return $data;
 }
 
?>