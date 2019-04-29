<div class="columncontainer">
		<div id="left">
    		<div class="navhead01">
    			<div class="navheadinfo">Products </div>
    		</div>
    			<div class="nav-menu">
    				<ul>
    					<?php
$projectlists = get_project_list();
	
	if($projectlists)
	 {
	    for($i=0;$i<count($projectlists);$i++)
		{
		
echo "<li><a href='productdetails.php?id=".$projectlists[$i]['id']."'>".$projectlists[$i]['title']."</a></li>";
		
		}
	}


?>      
					</ul>
				</div>
			<div class="navfooter"></div>
			
			<div class="clear"></div>
			
			<div class="navhead01">
    			<div class="navheadinfo">Solar Panel catalogue</div>
    		</div>
    			<div class="nav-menu">
				
				<a href="ES_Solor_Panel_Catalogue.pdf" target="_blank" > <img src="images/catalog.jpg" height="80" width="185" /> </a>
			
            </div>
			<div class="navfooter"></div>
			
			
			<div class="clear"></div>
			
			
			<div class="navhead01">
				<div class="navheadinfo">Power Consumption</div>
			</div>
            <div class="navmid">
    				<div class="navinfo">
    			
 <ul class="enlarge"><a href="powercon.php" > <img src="images/tech-savings-main-img.jpg" height="125" width="150" /> </a></ul>
					</div>
    			</div>
			
			
			
			
			
    			<!--	<ul>-->
    					
						
						<?php /*?>$getpagelist = get_product_page();

if($getpagelist)
   {

   for($j=0;$j<count($getpagelist);$j++)
   {
      echo "<li><a href='services.php?page=".$getpagelist[$j]['id']."'>".$getpagelist[$j]['title']."</a></li>";
   }
   }<?php */

/*$getpagelist = get_page_by_category("Residential");

if($getpagelist)
   {
   echo "<p style='color:#000;'><b>Residential</b></p>";
   for($j=0;$j<count($getpagelist);$j++)
   {
      echo "<li><a href='services.php?page=".$getpagelist[$j]['id']."'>".$getpagelist[$j]['title']."</a></li>";
   }
   }

   $getpagelist = get_page_by_category("Commercial");

if($getpagelist)
   {
   echo "<p style='color:#000;'><b>Commercial</b></p>";
   for($j=0;$j<count($getpagelist);$j++)
   {
      echo "<li><a href='services.php?page=".$getpagelist[$j]['id']."'>".$getpagelist[$j]['title']."</a></li>";
   }
   }*/
   
   
   
   
   ?>

						
					
					<!--</ul>-->
				
    	</div>
        <?php 
		   function removeAllSpecialCharacters($string) {
    return preg_replace("/[^a-zA-Z0-9\s-]/", "", $string);
}
		?>