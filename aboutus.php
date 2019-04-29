<?php include("includes/header.php"); ?>
<?php include("includes/sidebar_common.php"); ?>	

    <div class="second_colomn">
    <div class="inner_content">    	
    		<div class="pro_heading"><h1>About Us</h1></div>
    	</div>
  <?php 
			insert_update_item_hit_count(-1,"aboutus","aboutus");
			$contents = get_page_contents("aboutus");
	        $page_contents = $contents['page_contents'];
			echo "<div class='normaltext'>".stripslashes($page_contents)."</div>";
			?>
</div>

</div>
       
<div class="clear"></div>
</div>
</div>
<?php include("includes/footer.php"); ?>
