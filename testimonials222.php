<?php include("includes/header.php"); ?>
<!--Welcome-->
<div id="welcome" align="center" style="margin:10px 10px 0px 10px;">
<table width="100%" height="auto">
<tr>
  <td width="70%" valign="top">
  
  <?php 
			$pageid = @$_GET['page'];
			if($pageid)
			{
			  $contents = get_page_contents($pageid);
			  $page_details = get_page_title_by_id($pageid);
			  $page_title = $page_details['title'];
			  insert_update_item_hit_count($pageid,$page_title,"testimonials");
			}
			else
			{
			  $contents = get_page_contents("testimonials");
			  $page_title = "TESTIMONIALS";
			  insert_update_item_hit_count(-1,"home","testimonials");
	        }
			
			$page_contents = $contents['page_contents'];
			//echo $page_contents;
			?>
  
  
  <div id="welcome_title">
  <div id="welcome_text"><h3><?php echo $page_title;?></h3></div>
  <div id="welcome_para">
  <?php echo $page_contents; ?>
  
  </div>

  </div>
  </td>
  
  <td width="30%" valign="top">
  <div id="latest_news_title">
  <div id="latest_news_text"><h3>Latest News</h3></div>
  <div id="latest_news_update">
  <table>
  <tr>
    <td valign="top">
	<div id="latest-img"><a href="#"><img src="images/news-img.jpg" width="56" height="50" /></a></div></td>
	<td valign="top">
	<div id="latest-upadate-text_para_main">
	<div id="latest-upadate-text">
	 <h4>17.02.2012</h4></div>
	 <div id="latest-upadate-para"><p> Parturient amet montes nascetur duim 
fusce feugiat alesda morbi nunco gravida 
cursusnec.
    </p>
	</div>
	</div>
	</td>
  </tr>
  <tr>
    <td valign="top">
	<div id="latest-img"><a href="#"><img src="images/news-img.jpg" width="56" height="50" /></a></div></td>
	<td valign="top">
	<div id="latest-upadate-text_para_main">
	<div id="latest-upadate-text">
	 <h4>17.02.2012</h4></div>
	 <div id="latest-upadate-para"><p> Parturient amet montes nascetur duim 
fusce feugiat alesda morbi nunco gravida 
cursusnec.
    </p>
	</div>
	</div>
	</td>
  </tr>
  <tr>
    <td valign="top">
	<div id="latest-img"><a href="#"><img src="images/news-img.jpg" width="56" height="50" /></a></div></td>
	<td valign="top">
	<div id="latest-upadate-text_para_main">
	<div id="latest-upadate-text">
	 <h4>17.02.2012</h4></div>
	 <div id="latest-upadate-para"><p> Parturient amet montes nascetur duim 
fusce feugiat alesda morbi nunco gravida 
cursusnec.
    </p>
	</div>
	</div>
	</td>
  </tr>
  </table>
  </div>
  <div id="more"><a href="#">More</a></div>
  </div>
  </td>
</tr>
</table>
</div>

<?php include("includes/footer.php"); ?>
