<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

<div class="second_colomn">
    <div class="inner_content">    	
    		<div class="pro_heading"><h1>Frequently asked questions</h1></div>
    	</div>

<div class="normaltext">
  <?php 
			insert_update_item_hit_count(-1,"faq","faq");
			$contents = get_page_contents("faq");
	        $page_contents = $contents['page_contents'];
			 echo $page_contents;
			?>
 </div>
 
</div>

</div>
       
<div class="clear"></div>
</div>
</div>

<?php include("includes/footer.php"); ?>
