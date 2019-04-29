<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div class="second_colomn">
    <div class="inner_content">    	

    		
  <?php 
			insert_update_item_hit_count(-1,"products","products");
			$product_id = @$_GET['id'];
			if($product_id)
			{			  
			  $product_details = get_project_by_id($product_id);
			  $product_title = $product_details['title'];
			  $product_description = $product_details['description'];
			  insert_update_item_hit_count($product_id,"product","product_view");
			}
			?>

            <div class="pro_heading"><h1><?php echo $product_details['title']; ?></h1></div>
    
        <br />
            <?php
			
			echo '
			<table border="0" align="right" style="margin:auto;" width="20%">
			<tr>
			<td>
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e8b0f4e67be9a93"></script>
<!-- AddThis Button END -->
			</td>
			</tr>
			</table><br />
			';			
			 
			 echo "<table border='0' cellspacing='10' cellpadding='0' width='100%' class='product_details'>";			 
			 echo "<tr><td align='left'><span class='frtlevelheading'><a href='articles_view.php?id=".$product_id."'><h2 class='frtlevelheading'>".$product_title."</h2></a></span><br></td></tr>";
			  if($_REQUEST['id'] == '53'){
			  	echo '<tr><td align="center"><ul class="enlarge"><img src="administrator/project_image/'.$product_details['image_name'].'" hspace="10" vspace="10" class="prodborder" height="375" width="500"></ul>';
			  }elseif($_REQUEST['id'] == '54'){
			  	echo '<tr><td align="center"><ul class="enlarge"><img  height="500" width="300" src="administrator/project_image/'.$product_details['image_name'].'" hspace="10" vspace="10" class="prodborder"></ul><br>';			  
			  }else{
			  	echo '<tr><td align="center"><ul class="enlarge"><img src="administrator/project_image/'.$product_details['image_name'].'" hspace="10" vspace="10" class="prodborder"></ul><br>';
			  }
			  
			 echo '<a href="appointments.php?id='.$product_id.'"><img src="images/product_button.png" align="right" /></a>
			  
			  </td></tr>
			  <tr><td>'.$product_description.'</td></tr>';
			  
			 echo '<tr><td align="right">';
			 
			 if($_REQUEST['id'] == '54'){
		   		echo '<a href="images/Energy_Systems_Mono_Panel.pdf" target="_blank"><img src="images/download-button.png" /></a>';
			 }
	   echo '</td></tr>';
			
			
			 echo "</table>";
			
			
			
			
			?>
             
</div>

</div>
     
<div class="clear"></div>
</div>
</div>

<?php include("includes/footer.php"); ?>
