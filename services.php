<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div class="second_colomn">
    <div class="inner_content">   

  <?php 
			$pageid = @$_GET['page'];
			if($pageid)
			{
			  $contents = get_page_contents($pageid);
			  $page_details = get_page_title_by_id($pageid);
			  $page_title = $page_details['title'];
			  insert_update_item_hit_count($pageid,$page_title,"services");
			}
			else
			{
			  $contents = get_page_contents("services");
			  $page_title = "SERVICES";
			  insert_update_item_hit_count(-1,"services","services");
	        }
			
			$page_contents = $contents['page_contents'];
			//echo $page_contents;
			?>




<div class="pro_heading"><h1><?php echo $page_title;?></h1></div>


    <?php echo '<div class="normaltext">'.$page_contents.'</div>'; ?>


	
  <div id="service-left-menu" style="padding:10px 20px;">
<div class="nav-menu">
  <ul>
<?php
/*
if(!$pageid){
	echo "<p class='normaltext'><b>Residential</b></p>";
$getpagelist = get_page_by_category("Residential");

if($getpagelist)
   {
   for($j=0;$j<count($getpagelist);$j++)
   {
      echo "<li><a href='services.php?page=".$getpagelist[$j]['id']."'>".$getpagelist[$j]['title']."</a></li>";
   }
   }

  
   }
  
  
   
   if(!$pageid){
	   echo "<br /><p><b>Commercial</b></p>";
$getpagelist = get_page_by_category("Commercial");

if($getpagelist)
   {
   for($j=0;$j<count($getpagelist);$j++)
   {
      echo "<li><a href='services.php?page=".$getpagelist[$j]['id']."'>".$getpagelist[$j]['title']."</a></li>";
   }
   }

  
   }*/
?>             
</ul></div>	</div>

</div>

</div>
       
<div class="clear"></div>
</div>
</div>

<?php include("includes/footer.php"); ?>
